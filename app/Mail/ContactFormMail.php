<?php

// app/Mail/ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $company;
    public $messageContent; // Изменили имя переменной

    public function __construct($name, $email, $company, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->company = $company;
        $this->messageContent = $message;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
            ->view('emails.contact-form');
    }
}


