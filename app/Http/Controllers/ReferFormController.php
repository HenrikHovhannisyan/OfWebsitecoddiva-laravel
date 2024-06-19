<?php

namespace App\Http\Controllers;

use App\Mail\ReferFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ReferFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'your_full_name' => 'required|string',
            'your_email' => 'required|email',
            'your_mobile_number' => 'required|string',
            'friend_full_name' => 'required|string',
            'friend_email' => 'required|email|different:your_email',
            'friend_mobile_number' => 'required|string',
            'friend_instagram' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $yourFullName = $request->input('your_full_name');
        $yourEmail = $request->input('your_email');
        $yourMobileNumber = $request->input('your_mobile_number');
        $friendFullName = $request->input('friend_full_name');
        $friendEmail = $request->input('friend_email');
        $friendMobileNumber = $request->input('friend_mobile_number');
        $friendInstagram = $request->input('friend_instagram');

        Mail::to('liketodev12345@gmail.com')
            ->send(new ReferFormMail($yourFullName, $yourEmail, $yourMobileNumber, $friendFullName, $friendEmail, $friendMobileNumber, $friendInstagram));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}

