<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function store(BrandRequest $request)
    {
        $validatedData = $request->validated();

        Brand::create($validatedData);

        return redirect()->route('marcas')->with('success', 'Brand information submitted successfully!');
    }
}
