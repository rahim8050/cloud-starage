<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreEmailRequest;
use App\Models\Emails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Email;

class EmailController extends Controller
{
    public function subscribe(Request $request){
        $incomingFields = $request->validate([
            "email"=> "required",

            ]);

            $incomingFields['email'] = filter_var($incomingFields['email'], FILTER_SANITIZE_EMAIL);

            Emails::create($incomingFields);
            return redirect('about')->with('message', 'Email subscribed successfully');
            }
}
