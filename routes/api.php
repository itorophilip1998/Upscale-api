<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route; 

Route::post('send-mail', function () {

    // return $admin;
    try {
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
        return [$admin,$user];
        Mail::to("support@upscaleadvisory.de")->send(new SendMail($admin));
        Mail::to(request()->user_email)->send(new SendMail($user));
        return response()->json(["message" => "Delivered!"]);
    } catch (\Throwable $th) {
        return $th;
        // return response()->json(['message' => 'Mail was not sent!  check email address and try again ⚠️'], 401);
    }
});

 