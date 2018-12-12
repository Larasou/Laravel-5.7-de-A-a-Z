<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegistersRequest;
use App\Mail\RegisterMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RegistersController extends Controller
{
    public function create() 
    {
        return view('auth.register');      
    }

    public function store(RegistersRequest $request)
    {
        $request['token'] = str_random(60);

        $user = User::create($request->all());

        Mail::to($user)->send(new RegisterMail($user));

        return redirect('/')->with([
            'meta-title' => "Compte créer avec succès!",
            'message' => "Il faut maintenant valider ton compte par email!"
        ]);
    }
}
