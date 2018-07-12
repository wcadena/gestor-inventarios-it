<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\OAuthApp;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Oauth2Controller extends Controller
{
    public function __construct()
    {
    }

    public function redirect(Request $request)
    {
        //session()->flash('redirect_oauth2', 'redirect');
        $request->validate([
            'client_id'     => 'required',
            'token_secret'  => 'required',
            'client_secret' => 'required',
        ]);

        $oauth = $request->all();
        $oauth['id'] = session('_token');
        $oauth['activo'] = OAuthApp::AUTH_ACTIVO;

        OAuthApp::create($oauth);

        //dd(session()->all());
        $query = http_build_query([
            'client_id'     => $request->input('client_id'),
            'redirect_uri'  => env('APP_URL').'/callback',
            'response_type' => 'code',
            'scope'         => 'place-orders',
        ]);
        $redireccTOAut2 = env('APP_URL').'/oauth/authorize?'.$query;

        return redirect($redireccTOAut2);
    }

    public function callback(Request $request)
    {
        $token_oauth = OAuthApp::where('id', '=', session('_token'))->first();
        $http = new Client();

        $response = $http->post(env('APP_URL').'/oauth/token', [
            'form_params' => [
                'grant_type'    => 'authorization_code',
                'client_id'     => $token_oauth->client_id,
                'client_secret' => $token_oauth->client_secret,
                'redirect_uri'  => env('APP_URL').'/callback',
                'code'          => $request->code,
            ],
        ]);
        $token_oauth->activo = OAuthApp::AUTH_INACTIVO;
        $recuperadoDelCallOauth = json_decode((string) $response->getBody(), true);
        $token_oauth->token_type = $recuperadoDelCallOauth['token_type'];
        $token_oauth->expires_in = $recuperadoDelCallOauth['expires_in'];
        $token_oauth->access_token = $recuperadoDelCallOauth['access_token'];
        $token_oauth->refresh_token = $recuperadoDelCallOauth['refresh_token'];
        $token_oauth->save();

        return redirect('oauth_final');
    }
}
