<?php

use App\Mail\SendMail;
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
Route::get('/user', function () {
    return view('emails.user');
});
Route::get('/admin', function () {
    return view('emails.admin');
});



Route::get('send-mail', function () {
    $user = [
        "subject" => "Upscale Advisory",
        "view" => "emails.user",
        "main" => request()->all()
    ];
    $admin = [
        "subject" => "Upscale Advisory",
        "view" => "emails.admin",
        "main" => request()->all()
    ];
    // return $admin;
    try {
        Mail::to("support@upscaleadvisory.de")->send(new SendMail($admin));
        Mail::to(request()->user_email)->send(new SendMail($user));
        return response()->json(["message" => "Delivered!"]);
    } catch (\Throwable $th) {
        throw $th;
        return response()->json(['message' => 'Mail was not sent!  check email address and try again ⚠️'], 401);
    }
});
