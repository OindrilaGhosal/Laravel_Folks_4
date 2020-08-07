<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        request()->user()->notify(new PaymentReceived());
        //Notification::same(request()->user(), new PaymentReceived());
    }
}
