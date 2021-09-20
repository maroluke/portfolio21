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
            'email' => 'required|email',
        ]);

        $email = 'hello@lukacmarko.com';
   
        $mailInfo = [
            'title' => 'New CV Request',
            'senderEmail' => $request->get('email')
        ];
  
        Mail::to($email)->send(new CvRequestMail($mailInfo));

        return response()->json([ 'success'=> 'Email address ' . $request->get('email') . ' is successfully submitted!']);
   
        // // return response()->json([
        // //     'message' => 'Mail has sent from: '
        // // ], Response::HTTP_OK);

        // if ($this->validate->passes()) {
        //     return response()->json(['success'=>'Added new records.']);
        // }

        // return response()->json(['error'=>$this->validate->errors()]);
    }
}
