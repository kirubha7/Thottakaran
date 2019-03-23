<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.content.index');
})->name('home');

//content

Route::get('/content','Contentcontroller@content')->name('content');
Route::post('/content','Contentcontroller@insert')->name('content');
Route::get('/content/show_content','Contentcontroller@show')->name('show_content');

