<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);
        Mail::raw('It works!', function($message) {
            $message->to(request('email'))
                ->subject('Hello There');
        
        });
        //$email = request('email');
        //dd($email);
        return redirect('/contact')
			->with('message', 'Email sent!');
    }
}

