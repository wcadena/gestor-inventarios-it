<?php

namespace App\Http\Controllers\Auth;

use App\OAuthApp;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class Oauth2Controller extends Controller
{
    public function __construct()
    {

    }



    public function redirect(Request $request){
        //session()->flash('redirect_oauth2', 'redirect');
        $request->validate([
            'client_id' => 'required',
            'token_secret' => 'required',
        ]);

        $oauth=$request->all();
        $oauth['id'] = session('_token');
        $oauth['activo'] = OAuthApp::AUTH_ACTIVO;

        OAuthApp::create($oauth);

        //dd(session()->all());
        $query = http_build_query([
            'client_id' => $request->input('client_id'),
            'redirect_uri' => env('APP_URL').'/callback',
            'response_type' => 'code',
            'scope' => 'place-orders',
        ]);
        $redireccTOAut2=env('APP_URL').'/oauth/authorize?'.$query;
        return redirect($redireccTOAut2);

    }
    public function callback(Request $request){

        $http = new Client();

        $response = $http->post(env('APP_URL').'/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '5',
                'client_secret' => 'jBEJ5g4x4VVaJVDObsG1d9FISxSyURkDmMr67lhP',
                'redirect_uri' => env('APP_URL').'/callback',
                'code' => $request->code,
            ],
        ]);
        //session()->forget('redirect_oauth2');
        return json_decode((string) $response->getBody(), true);
    }
}
