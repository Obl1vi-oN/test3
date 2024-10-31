<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class AddPhoneController extends Controller
{
    public function store(request $request)
    {
        Phone::create([
            'phone' => $request->phone,
            'contact_id' => $request->contact_id,
        ]);

        return redirect()->back();
    }

}
