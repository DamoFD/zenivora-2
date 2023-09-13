<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::raw($message, function ($mail) use ($name, $email) {
            $mail->from('contact@zenivora.com');
            $mail->to('contact@zenivora.com');
            $mail->subject("$name submitted a form from your site!");
            $mail->replyTo($email);
        });

        return back()->with('success', 'Your message has been successfully sent');
    }
}
