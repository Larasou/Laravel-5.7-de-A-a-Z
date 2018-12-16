<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResetController extends Controller
{
    public function create(User $user, $token)
    {
        if ($user->token === $token)
            return view('auth.passwords.reset');

        return redirect('/')->with([
            'color' => 'orange',
            'message' => "Hummm.. il y a un probleme!"
        ]);
    }

    public function store(User $user, $token, Request $request)
    {
        $request->validate(['password' => 'required|confirmed|min:6']);

        $user->update([
            'password' => $request->password,
            'token'=> null,
        ]);

        return redirect('/')->with([
            'message' => "Mot de passe mise à jour!",
        ]);
    }
}
