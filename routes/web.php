<?php

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('/send-email', function () {
    $data = [
        'name' => 'Hendi Santika',
        'body' => 'Testing Kirim Email di hendisantika.com'
    ];

    Mail::to('hendi@yopmail.com')->send(new SendEmail($data));

    dd("Email Berhasil dikirim.");
});
