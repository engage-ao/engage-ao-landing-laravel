<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatorRequest;
use App\Models\Creator;

class CreatorController extends Controller
{
    public function store(CreatorRequest $request)
    {
        $validatedData = $request->validated();

        Creator::create($validatedData);

        return redirect()->route('thank-you');
    }
}
