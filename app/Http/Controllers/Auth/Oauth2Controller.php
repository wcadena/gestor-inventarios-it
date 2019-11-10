<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\OAuthApp;
use GuzzleHttp\Client;
use http\Client\Curl\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use GuzzleHttp\Stream\Stream;
use Illuminate\Support\Facades\Auth;

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
        $http = new Client();

        $response1 = $http->post('http://10.10.6.116:8080/auth/realms/dev/protocol/openid-connect/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => 'employee-service',
                'client_secret' => 'ff7627e4-2f06-4924-a0c6-de34bbe0c4fd',
                'redirect_uri' => 'http://inventarios.local/callback',
                'code' => $request->code,
            ],
        ]);
        //dd(json_decode((string) $response->getBody(), true));
        $resp = json_decode((string) $response1->getBody(), true);
        //dd($resp['access_token']);
        $resp =($resp['access_token']);
        //return redirect('oauth_final');

        //dd($resp);
        $http2 = new Client();
        $response = $http2->request('GET', 'http://10.10.6.116:8080/auth/realms/dev/protocol/openid-connect/userinfo', [
            'headers' => [
                'Authorization' => 'Bearer '.$resp,

            ],
        ]);
        $user = json_decode((string) $response->getBody(), true);
        $us = \App\User::where('email',$user['email'])->firstorfail();

        Auth::loginUsingId($us->id);
        //dd($resp,$response,$response->getBody()->read(1024),$user);

        return redirect('home');
    }
}
