<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Validator;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'           => 'required|max:255',
            //'username'       => 'sometimes|required|max:255|unique:users',
            'email'          => 'required|email|max:255|unique:users',
            'password'       => 'required|min:6|confirmed',
            //'first_name'     => 'required|max:255',
            //'last_name'      => 'required|max:255',
            'terms'          => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        $fields = [
            'name'               => $data['name'],
            'email'              => $data['email'],
            'first_name'         => '--',
            'last_name'          => '--',
            'username'           => $data['email'],
            'rol'                => 'registrado',
            'empresa'            => env('EMP_PRINCIPAL', 'Ecuatask'),
            'token'              => User::generarVerificationToken(),
            'verification_token' => User::generarVerificationToken(),
            'password'           => bcrypt($data['password']),
        ];
        if (config('auth.providers.users.field', 'email') === 'username' && isset($data['username'])) {
            $fields['username'] = $data['username'];
        }

        return User::create($fields);
    }
}
