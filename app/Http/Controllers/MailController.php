<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function testEmail()
    {
        // echo 'sdsdfsd';
        // exit;
        $to = 'thakurrarshman007@yopmail.com';
        $subject = 'Test Email';
        $emailMessage  = 'This is a test email.';

        Mail::to($to)->send(new \App\Mail\TestEmail($subject, $emailMessage));

        return 'Test email sent.';
    }
}
