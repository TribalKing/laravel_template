<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    /**
    * Send email - Needed parameters (title, content, subject, from, to)
    * @param $request Request
    * @return string
    */
    public function sendEmail(Request $request)
    {
        Mail::send('emails.contact', ['title' => $request->title, 'content' => $request->content], function ($message) use ($request) {
            $message->from($request->from);
            $message->subject($request->subject);
            $message->to($request->to);

            // Use this one if mail is sent to your account only
            //$message->to(env('MAIL_USERNAME');
        });

        return 'Mail has be sent successfully.';

    }

}
