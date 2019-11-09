<?php

Route::get('/test', function () {
    return "test";
});

Auth::routes();
Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
        Route::get('/', 'BriefController@index');
        Route::resource('briefs', 'BriefController');
        Route::resource('users', 'UserController')->middleware('checkAdmin');
        // Route::get('lock', 'PrefController@lock')->name('lock');
       
    });
});
// Route::fallback(function () {
//     //
//     return view('not_found');
// });