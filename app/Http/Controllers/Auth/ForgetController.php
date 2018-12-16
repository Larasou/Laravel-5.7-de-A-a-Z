<?php

namespace App\Http\Controllers\Auth;

use App\Notifications\SendAnEmailToUpdateThePassword;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgetController extends Controller
{
    public function create()
    {
        return view('auth.passwords.forget');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        $user = User::where('name', $request->name)
            ->orWhere('email', $request->name)
            ->first();

        if ($user) {
            $user->update(['token' => str_random(60)]);

            $user->notify(new SendAnEmailToUpdateThePassword());

            return redirect('/')->with([
                'message' => "Un email t'a été envoyé!"
            ]);
        }

       return  $this->messageError($request);
    }

    public function messageError($request)
    {
        return back()->with([
            'color' => 'red',
            'message' => "Identifiant incorrect!"
        ])->withInput([
            'name' => $request->name,
        ]);
    }
}
