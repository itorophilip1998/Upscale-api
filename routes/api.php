<?php

use App\Http\Controllers\Mailler;
use Illuminate\Support\Facades\Route; 

Route::post('send-mail', [Mailler::class,'sendMail']);
