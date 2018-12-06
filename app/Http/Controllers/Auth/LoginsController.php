<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginsRequest;
use App\User;
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
        $user = User::where('name', $request->name)
            ->orWhere('email', $request->name)
            ->first();

        if ($user) {
            if (\Hash::check($request->password, $user->password)) {
                auth()->login($user);

                return redirect('/');
            }

            return $this->messageError($request);
        }

        return $this->messageError($request);

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

    public function destroy()
    {
        auth()->logout();

        return back();
    }
}
