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
    return view('welcome');
});

//Route::get('/test', function () {
//    return 'test';
//});

Route::group(['namespace' => 'Web'],function() {
    
    Route::get('/test', 'UserController@test');
    Route::get('/test2', 'UserController@test2');
    /* 登入畫面 */
    Route::get('/login', function(){
        return view('web.login.index',[
            'showMessage' => Session::get('showMessage')
        ]
                );
    });
    /* 登入 */
    Route::post('/login/check', 'UserController@loginCheck')
            ->middleware('verify.login');

});
