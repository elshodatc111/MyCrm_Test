<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller{
    public function index(){
        $Setting = Setting::first();
        return view('contact',compact('Setting'));
    }
    public function contactPost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'text' => 'required',
        ]);
        $Contact = Contact::create($validated);
        return redirect()->route('contact');
    }
}
