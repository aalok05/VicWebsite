<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function idea_submission()
    {

        Mail::send(['text'=>'mail'],['name','VIC'],function($message)
        {
            $message->to('manojromina1997@gmail.com','Manoj Romina')->subject('Testing');
            $message->from('manojromina1997@gmail.com','Manoj');

        });

        echo 'Mail Send';
    }
}
