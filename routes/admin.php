<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.content.add');
})->name('home');

//content

Route::get('/content/add','Contentcontroller@content');
Route::post('/content/add','Contentcontroller@savecontent')->name('savecontent');
Route::get('/contents','Contentcontroller@show')->name('show_content');
Route::get('/content/{id}/edit','Contentcontroller@EditContent')->name('EditContent');
Route::post('/content/{id}/update','Contentcontroller@UpdateContent')->name('UpdateContent');
Route::delete('/content/{id}/delete','Contentcontroller@DeleteContent')->name('DeleteContent');

