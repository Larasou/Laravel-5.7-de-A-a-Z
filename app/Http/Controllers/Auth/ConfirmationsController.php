<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmationsController extends Controller
{
    public function store(User $user, $token)
    {
        if ($user->exists) {

            $user->update([
                'email_verified_at' => now(),
                'token' => null
            ]);

            return redirect('/')->with(['message' => "Compte validé!"]);
        }
        return redirect('/')->with(['message' => "L'utilisateur n'existe pas!"]);
    }
}
