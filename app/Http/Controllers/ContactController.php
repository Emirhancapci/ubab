<?php

namespace App\Http\Controllers;

use App\Models\Contact; 

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Form başarıyla gönderildi.');
    }
}
