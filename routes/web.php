<?php

use Illuminate\Support\Facades\Route;


Route::get('categories',[App\Http\controllers\category_controller::class, 'index'] );
Route::get('categories/create',[App\Http\controllers\category_controller::class, 'create'] );
Route::post('categories/create',[App\Http\controllers\category_controller::class, 'store'] );

// for edit
Route::get('categories/{id}/edit',[App\Http\controllers\category_controller::class, 'edit'] );


// update
Route::put('categories/{id}/edit',[App\Http\controllers\category_controller::class, 'update'] );
// delete
Route::delete('categories/{id}/delete', [App\Http\Controllers\category_controller::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
