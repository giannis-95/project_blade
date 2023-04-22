<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function sendNotification(){
        $user = User::all();

        $details = [
            'greeting' => 'hi laravel developer' ,
            'body' => 'this is the email' ,
            'actiontext' => 'Subscribed this channel' ,
            'actionurl' => '/' ,
            'lastline' => 'this is the line'
        ];


        Notification::send($user , new SendEmailNotification($details));
    }
}
