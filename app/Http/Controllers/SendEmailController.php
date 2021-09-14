<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function mail()
    {
        $to_name = 'RECEIVER_NAME';
        $to_email = 'RECEIVER_EMAIL_ADDRESS';
        $data = array('name'=>"Cloudways (sender_name)", "body" => "A test mail");
        
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
        });
       
       return 'Email sent Successfully';
    }
}
