<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function saveContact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        try {
            Mail::send(
                'email/contact',
                [
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'message1' => $request->get('message'),
                ],
                function ($message) use ($request) {
                    $message->to('roby@ajroni.com')->subject('Contact form - ' . $request->get('name'));
                }
            );
        } catch (Exception $e) {
            return back()->with('error', [$e->getMessage()]);
        }
        return back()->with('success', 'Message sent successfully. Thank you for contacting us');
    }
}
