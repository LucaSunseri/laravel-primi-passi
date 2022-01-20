<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/link', function () {

    $data = [
        "name" => "Social",
        "links" => [
            "https://www.youtube.com/",
            "https://www.facebook.com/",
            "https://www.instagram.com/",
            "https://www.twitch.tv/",
        ]
    ];

    return view('link', $data);
})->name('link');
