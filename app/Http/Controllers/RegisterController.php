<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register()
    {

        return view('auth\register');
    }

    public function submitapplication(Request $request)
    {

        //dd($request->all());
        // Validazione del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);


        // Dettagli dell'email
        $contact = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        // Invia l'email
        $contact = $request->all();
        Mail::to( $contact['email'])->send(new RegisterMail($contact));
       
        session()->flash('success', 'Registrazione avvenuta con successo!');
        return redirect()->route('login');
    }
}
 