<?php

namespace App\Http\Controllers;

use App\Mail\CandidaturaRicevuta;
use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

class WorkWithUsController extends Controller
{
    public function workwithus()
    {

        return view('workwithus');
    }

    public function submitapplication(Request $request)
    {

        //dd($request->all());
        // Validazione del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // validazione del CV
        ]);


        // Dettagli dell'email
        $contact = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        // Invia l'email
        $contact = $request->all();
        Mail::to( $contact['email'])->send(new InfoMail($contact));
       
        session()->flash('success', 'Candidatura inviata con successo!');
        return redirect()->route('workwithus');
    }
}
