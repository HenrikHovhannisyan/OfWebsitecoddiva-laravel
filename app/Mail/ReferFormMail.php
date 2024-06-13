<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReferFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $yourFullName;
    public $yourEmail;
    public $yourMobileNumber;
    public $friendFullName;
    public $friendEmail;
    public $friendMobileNumber;
    public $friendInstagram;

    public function __construct($yourFullName, $yourEmail, $yourMobileNumber, $friendFullName, $friendEmail, $friendMobileNumber, $friendInstagram)
    {
        $this->yourFullName = $yourFullName;
        $this->yourEmail = $yourEmail;
        $this->yourMobileNumber = $yourMobileNumber;
        $this->friendFullName = $friendFullName;
        $this->friendEmail = $friendEmail;
        $this->friendMobileNumber = $friendMobileNumber;
        $this->friendInstagram = $friendInstagram;
    }

    public function build()
    {
        return $this->subject('Refer Form Mail')
            ->view('emails.refer-form'); // Создайте соответствующий шаблон письма в папке resources/views/emails
    }
}
