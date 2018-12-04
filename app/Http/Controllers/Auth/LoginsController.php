<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginsController extends Controller
{
    public function create() 
    {
        return view('auth.login');      
    }

    public function store(LoginsRequest $request) 
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password]))
            return redirect('/');

        return back()->with([
            'color' => 'red',
            'message' => "Identifiant incorrect!"
        ]);

    }

    public function destroy()
    {
        auth()->logout();

        return back();
    }
}
