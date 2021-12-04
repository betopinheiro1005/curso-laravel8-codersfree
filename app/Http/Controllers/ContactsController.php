<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        return view('contacts.index');
    }

    public function store(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required"
        ]);

        $email = new ContactMailable($request->all());
        Mail::to('beto10561@gmail.com')->send($email);

        return redirect()->route('contact.index')->with('info', 'Mensagem enviada com sucesso!');
    }
}
