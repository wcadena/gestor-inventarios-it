<?php

namespace App\Http\Controllers;

use App\Mail\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use JWTAuth;
use JWTAuthException;
use Session;

class UserApiController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->middleware('auth')->except(['verify', 'resend']);
        $this->user = $user;
    }

    public function register(Request $request)
    {
        $user = $this->user->create([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        return response()->json(['status'=>true, 'message'=>'User created successfully', 'data'=>$user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = null;

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['invalid_email_or_password'], 422);
            }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function getAuthUser(Request $request)
    {
        $user = JWTAuth::toUser($request->token);

        return response()->json(['result' => $user]);
    }

    public function verify($token)
    {
        $user = User::where('verification_token', $token)->firstOrFail();
        $user->verified = User::USUARIO_VERIFICADO;
        $user->verification_token = null;
        //dd($token);
        $user->save();
        Session::flash('flash_message', 'Este usuario se ha sido verificado.');

        return redirect('login');
    }

    public function resend(User $user)
    {
        if ($user->esVerificado()) {
            //return $this->errorResponse('Este usuario ya ha sido verificado.', 409);
            Session::flash('flash_message', 'Este usuario ya ha sido verificado.');

            return redirect('login');
        }
        retry(5, function () use ($user) {
            $user->verification_token = User::generarVerificationToken();
            $user->save();
            Mail::to($user)->send(new UserCreated($user));
        }, 100);
        Session::flash('flash_message', 'El correo de verificación se ha reenviado a: '.$user->email);

        return redirect('login');
    }
}
