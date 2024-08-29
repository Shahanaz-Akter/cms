<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('backend.layouts.master_page');
});

Route::group(['prefix' => 'cms'], function () {
    Route::get('/home-page', function () {
        return view('backend.layouts.master_page');
    })->name('home.page');

    Route::get('/templates', function () {
        return view('backend.template.templates');
    })->name('template');
});


Route::group(['prefix' => 'template'], function () {
    Route::get('/temp1', function () {
        return view('backend.template.temp1');
    })->name('temp1');

    Route::get('/temp2', function () {
        return view('backend.template.temp2');
    })->name('temp2');

    Route::get('/temp3', function () {
        return view('backend.template.temp3');
    })->name('temp3');

    Route::get('/temp1-edit', function () {
        return view('backend.template.temp1-edit');
    })->name('temp1.edit');


    Route::post('/post-temp1', function () {
        return 'post-temp1';
    })->name('post.temp1');


    Route::get('/temp2-edit', function () {
        return view('backend.template.temp2-edit');
    })->name('temp2.edit');

    Route::post('/post-temp2', function () {
        return 'post-temp2';
    })->name('post.temp2');

    Route::get('/temp3-edit', function () {
        return view('backend.template.temp3-edit');
    })->name('temp3.edit');

    Route::post('/post-temp3', function () {
        return 'post-temp3';
    })->name('post.temp3');

    Route::get('/custom-content', function () {
        return view('backend.template.custom-content');
    })->name('custom.content');



});


// Route::get('/landing-page', function () {
//     return view('backend.layouts.langing-page');
// });