<?php

namespace App\Http\Controllers;

use App\Contact;

use App\Mail\ContactSent;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function contact(Request $request) {

        $messages = [
            'customer_contact.required' => 'Please fill in your contact details so we can get back to you.',
            'customer_message.required' => 'Please leave us a few words.'
        ];

        $this->validate($request, [
            'customer_contact' => 'required',
            'customer_message' => 'required'
        ],$messages);

    	$contact = new Contact;

    	$contact->customer_name = $request->customer_name;
    	$contact->customer_contact = $request->customer_contact;
    	$contact->customer_message = $request->customer_message;

		$contact->save();

		Mail::to('info@riant.eu')->send(new ContactSent($contact));

    	return redirect()->to('contact-us/form-send');

    	//return request()->all();

    }

    public function sent() {
    	return view('forms.success');
    }
}
