<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
   public function sendMail(){


$details=[
'name'=>'Mail from Surfside Media',
'email'=>'this is for testing mail using gmail',
'subject'=>'thisfgail',
'message'=>'ss',
];

Mail::to('orggivehope@gmail.com')->send(new ContactMail($details));


    return view('Email Sent');
   }
}
