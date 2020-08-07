<?php

namespace Toalamin\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toalamin\Contact\Models\Contact;

class ContactController extends Controller {

    public function index() {
        return view('contact::contacts');
    }

    public function send(Request $request) {
        
        //dd($request);
        //Contact::create($request->all());
        $contact =  new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        dd($contact);
        die("success");
      
    }

}
