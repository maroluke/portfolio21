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

        $email = 'hello@lukacmarko.com';
        $title = '';

        if ($request->path() === 'submitCvEmail') {
            $title = 'New CV request from:';
        } else {
            $title = 'New newsletter subscription from:';
        }
   
        $mailInfo = [
            'title' => $title,
            'senderEmail' => $request->get('email'),
        ];
  
        Mail::to($email)->send(new CvRequestMail($mailInfo));

        return response()->json([ 'success'=> $request->get('email')]);
   
        // // return response()->json([
        // //     'message' => 'Mail has sent from: '
        // // ], Response::HTTP_OK);

        // if ($this->validate->passes()) {
        //     return response()->json(['success'=>'Added new records.']);
        // }

        // return response()->json(['error'=>$this->validate->errors()]);
    }
}
