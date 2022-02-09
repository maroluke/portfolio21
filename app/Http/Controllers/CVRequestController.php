<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\CvRequestMail;

class CvRequestController extends Controller
{
    public function mailSend(Request $request) {
        $this->validate($request, [
            // email for cv request
            'email' => 'required|email',
        ]);

        $email = 'markolukac@icloud.com';
        $title = '';

        if ($request->path() === 'submitCvEmail') {
            $title = 'CV request from:';
        } else {
            $title = 'Newsletter subscription from:';
        }
   
        $mailInfo = [
            'title' => $title,
            'senderEmail' => $request->get('email'),
        ];
  
        Mail::to($email)->send(new CvRequestMail($mailInfo));

        return response()->json([ 'success'=> $request->get('email')]);
    }
}
