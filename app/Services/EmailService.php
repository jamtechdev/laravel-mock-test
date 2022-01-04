<?php


namespace App\Services;

use App\Notifications\SetPasswordNotification;
use App\Mail\WelcomeNewCustomer;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function WelcomeNewCustomer($customer)
    {
        //Mail::to($customer['email'])->send(new WelcomeNewCustomer($customer));
        Mail::fake();
    }
}
