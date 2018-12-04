<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegistersRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistersController extends Controller
{
    public function create() 
    {
        return view('auth.register');      
    }

    public function store(RegistersRequest $request)
    {
        User::create($request->all());

        return back();
    }
}
