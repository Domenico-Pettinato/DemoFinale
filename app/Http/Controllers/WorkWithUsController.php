<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkWithUsController extends Controller
{
    public function workwithus()
    {

        return view('workwithus');
    }

    public function submitApplication(Request $request)
    {
        // Validazione del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // validazione del CV
        ]);

        session()->flash('success', 'Candidatura inviata con successo!');
        return redirect()->route('workwithus');
    }
}
