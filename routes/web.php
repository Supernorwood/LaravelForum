<?php


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/discuss', function () {
        return view('discuss');
    });

    Route::get('/test', function(){

        //return App\User::find(1)->profile;
        phpinfo();
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/{provider}/auth',[
        'uses' => 'SocialsController@auth',
        'as' => 'social.auth'
    ]);

    Route::get('/{provider}/redirect',[
        'uses' => 'SocialsController@auth_callback',
        'as' => 'social.callback'
    ]);

    Route:: group(['middleware' => 'auth'], function(){

        Route::resource('channels', 'ChannelsController');

    });



