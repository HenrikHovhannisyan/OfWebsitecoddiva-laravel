<?php

// app/Http/Controllers/ContactFormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Подключаем класс для отправки письма

class ContactFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $company = $request->input('company');
        $message = $request->input('message');

        Mail::to('liketodev12345@gmail.com')
            ->send(new ContactFormMail($name, $email, $company, $message));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}

