<?php

namespace App\Http\Controllers;
use Mail;
use App\Email;
use Illuminate\Http\Request;

class MailController extends Controller
{
   public function sendMail(Request $request){
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|min:10|numeric',
           'subject' => 'required',
           'message' => 'required',
       ]);
       $Mail = new Email;
       $Mail->name = request('name');
       $Mail->email = request('email');
       $Mail->phone = request('phone');
       $Mail->subject = request('subject');
       $Mail->message = request('message');
       $Mail->save();

      /* Mail::send(['html'=>'thottakaran.mail'], ["data"=>request()->all()], function($message) {
           $message->to('kirubharaj777@gmail.com')->subject('Queries');
           $message->from('kirubharaj777@gmail.com','from mail');
       });*/
       return back()->with('success','Mail Send Successfully');
   }
}
