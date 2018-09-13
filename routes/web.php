<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('ajax/user', 'Ajax\UserController');

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 'client-id',
        'redirect_uri' => 'https://vm.jpm.jp/auth/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);
    return redirect('https://vm.jpm.jp/oauth/authorize?'.$query);
});
Route::get('/callback', function (Request $request) {
    $http = new GuzzleHttp\Client;
    $response = $http->post('https://vm.jpm.jp/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => 'client-id',
            'client_secret' => 'client-secret',
            'redirect_uri' => 'https://vm.jpm.jp/auth/callback',
            'code' => $request->code,
        ],
    ]);
    return json_decode((string) $response->getBody(), true);
});
