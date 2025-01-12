<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'contents' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'subject', 'contents');

        Mail::send('email.contact', $data, function ($message) use ($data) {
            $message->to('depeuterwout@gmail.com') // Replace with your email address
            ->subject($data['subject'])
                ->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
