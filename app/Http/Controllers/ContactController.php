<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => ['required','email'],
            'phone' => 'required',
            'message' => 'required'
        ]);

        Mail::to($request->email)->send(new ContactMail());
        return redirect()->back();
    }
}
