<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
// use illuminate\contract\Mailer;
// use Illuminate\Mail\Mailable;



class ContactController extends Controller
{
   public function contact(){
    return view('pages/contact');
   }


public function sendmail(Request $request){


//     $details=$request->all();
//    Mail::to('orggivehope@gmail.com') ->send(new ContactMail($details));

return back()->with('message_sent','Your Message has been senr successfully!');
}


}
