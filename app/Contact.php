<?php

namespace App;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'send'
    ];

    public static function contactMailSend($contact)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new ContactMail($contact));

        $contact->send = 1;
        $contact->update();

        return true;

    }
}
