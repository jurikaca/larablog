<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact()
    {
        return view('emails.contact');
    }

    public function send(Request $request)
    {
        $rules = [
        'name' => ['required','max:32'],
        'email' => ['required','max:32','email'],
        'subject' => ['required', 'max:50'],
        'mail_message' => ['required', 'max:2000'],
        ];

        $this->validate($request, $rules);

        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'mail_message' => $request->mail_message,
        ];
        Mail::send('emails.send', $data, function($message){
        $message->to('kaloraat@gmail.com', 'Ryannnnnnnnnnnnnn')->subject('Mail received from contact form');
    });
        notify()->flash('<h3>Thank you for contacting us, We will get back to you shortly.</h3>', 'success');
        return redirect('/');
    }
}
