<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('lastname', 'asc')->get();
        return view('index', ['contacts' => $contacts]);
    }

    public function show($id)
    {
        $contacts = Contact::findOrFail($id);
        $phones = $contacts->phones;
        return view('show', compact('contacts', 'phones'));
    }

    public function store(request $request)
    {
        Contact::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'surname' => $request->surname,
            'phone' => $request->phone,
        ]);

        return redirect('/')->with('success', 'Успешно');
    }
}
