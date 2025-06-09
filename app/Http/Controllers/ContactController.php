<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $validatedData = $request->validated();

        Contact::create($validatedData);

        return redirect()->route('message-received');
    }
}
