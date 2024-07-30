<?php

namespace App\Http\Controllers;

use App\Mail\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $incomingFields = $request->validate([
            'fullname' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:5',
            'phone' => ['nullable', 'regex:/^\d{10}$|^\d{12}$/']
        ], [
            'fullname.required' => 'Поле ім\'я є обов\'язковим.',
            'fullname.min' => 'Ім\'я повинно містити принаймні 3 символи.',
            'email.required' => 'Поле електронної пошти є обов\'язковим.',
            'email.email' => 'Введіть коректну електронну адресу.',
            'subject.required' => 'Поле тема є обов\'язковим.',
            'subject.min' => 'Тема повинна містити принаймні 5 символів.',
            'subject.max' => 'Тема не повинна перевищувати 100 символів.',
            'message.required' => 'Поле повідомлення є обов\'язковим.',
            'message.min' => 'Повідомлення повинно містити принаймні 5 символів.',
            'phone.regex' => 'введіть коректний номер телефону (без "+").'
        ]);

        $incomingFields['fullname'] = strip_tags($incomingFields['fullname']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['message'] = strip_tags($incomingFields['message']);
        $incomingFields['phone'] = strip_tags($incomingFields['phone']);

        $toEmail = 'turianytsia.timur@gmail.com';
        $details = [
            'fromName' => $incomingFields['fullname'],
            'fromEmail' =>  $incomingFields['email'],
            'subject' => $incomingFields['subject'],
            'message' => $incomingFields['message'],
            'phone' => $incomingFields['phone']
        ];

        Mail::to($toEmail)->send(new EmailSender($details));

        return redirect('/contact')->with('success', 'Повідомлення успішно надіслано!');
    }
}
