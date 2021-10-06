<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use snw\Subscriber\Mail\SubscriberMailable;
use snw\Subscriber\Models\Subscriber;

class SubscribersController extends Controller
{
    //
    public function index() 
    {
        return view('subscriber::subscriber');
    }

    public function send(Request $request)
    {
            Mail::to(config('subscriber.snw_send_email_to'))->send(new SubscriberMailable($request->email));
            Subscriber::create($request->all());
        
        return redirect('/');
     
        
    }
}
