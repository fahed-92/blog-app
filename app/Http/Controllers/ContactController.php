<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Admin;
use App\Notifications\InboxMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }
    public function mailToAdmin( ContactRequest $request , Admin $admin){
//        $admin->notify( new InboxMessage($request));
        $admin->notify(new InboxMessage($request));
        return redirect()->back()->with('message','Thanks for your message! We will get back to you soon!');
    }
}
