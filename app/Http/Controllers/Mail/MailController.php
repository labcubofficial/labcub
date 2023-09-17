<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\MailJob;

class MailController extends Controller
{
    public function sendMail()
    {
        $email = 'godwinvimal142@gmail.com';
        MailJob::dispatch($email);
        dd('Mail sended successfully');
    }
}
