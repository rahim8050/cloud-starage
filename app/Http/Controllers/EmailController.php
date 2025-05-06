<?php

namespace App\Http\Controllers;

use App\Models\Emails;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function subscribe(Request $request)
{
    // The validated data is already available
    $validated = $request->validated();

    Emails::create($validated);

    return redirect()->route('about')->with('message', 'Email added successfully');
}
}
