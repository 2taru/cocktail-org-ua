<?php

namespace App\Http\Controllers;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $incomingFields['phone'] = '';
        $incomingFields = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            // 'phone' => 'min:8'
        ]);

        $incomingFields['fullname'] = strip_tags($incomingFields['fullname']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['message'] = strip_tags($incomingFields['message']);
        //$incomingFields['phone'] = strip_tags($incomingFields['phone']);

        $toEmail = 'turianytsia.timur@gmail.com';
        $details = [
            'fromName' => $incomingFields['fullname'],
            'fromEmail' =>  $incomingFields['email'],
            'subject' => $incomingFields['subject'],
            'message' => $incomingFields['message'],
            //'phone' => $incomingFields['phone']
        ];

        Mail::to($toEmail)->send(new EmailSender($details));

        return redirect('/contact')->with('success', 'Повідомлення успішно надіслано!');
    }
}
