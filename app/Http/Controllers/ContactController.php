<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
       return view('contact.index');
    }

    public function store(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ];

        $messages =
            [
                'first_name.required' => 'Поле First Name не заполнено',
                'last_name.required' => 'Поле Last Name не заполнено',
                'email' => 'Введіть пошту',
            ];
        $data = Validator::make($request->all(), $rules, $messages)->validate();

        if ($data){
            $contact = new Contact();
            $contact->first_name = $request->first_name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
            $contact->save();
        }

        Contact::contactMailSend($contact);

        return redirect()->route('contact.index')->with('success', 'Сообщение отправлено');

    }


}
