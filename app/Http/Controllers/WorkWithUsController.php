<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WorkWithUsController extends Controller
{
    // Funzione per richiama la vista blade //
    public function workwithus()
    {

        return view('workwithus');
    }

    // Funzione per eseguire il submit //
    public function submitapplication(Request $request)
    {

        //dd($request->all());
        // Validazione del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // validazione del CV
        ]);

        // Dettaglio email nuovo utente
        $contact = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        // Salvo il file caricato sul form  e ottieni il percorso
        $path = $request->file('cv')->store('attachments', 'public'); // Salvo nella cartella storage/app/public/attachments
        $attachment = storage_path('app/public/' . $path); // Percorso completo del file

        // Invia l'email all'utente candidato
        $contact = $request->all();
        Mail::to($contact['email'])->send(new InfoMail($contact));

        // Invia mail all'admin per visionare il cv di un candidato
        Mail::to($contact['email'])->send(new AdminMail($contact, $attachment));

        // Messaggio di conferma //
        session()->flash('success', 'Candidatura inviata con successo!');
        return redirect()->route('workwithus');
    }
}
