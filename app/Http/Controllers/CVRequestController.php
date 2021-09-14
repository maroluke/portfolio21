<?php

namespace App\Http\Controllers;

use App\Mail\CVRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CVRequestController extends Controller
{
    public function mail()
    {
       $name = 'Cloudways';
       Mail::to('Cloudways@Cloudways.com')->send(new CVRequest($name));
       
       return 'Email sent Successfully';
    }
}
