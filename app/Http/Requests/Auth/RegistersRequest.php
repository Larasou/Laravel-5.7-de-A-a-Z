<?php

namespace App\Http\Requests\Auth;

use App\Mail\RegisterMail;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\Array_;

class RegistersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha_dash',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Quel est ton nom d'utilisateur?",
            'name.alpha_dash' => "Ce n'est pas une chaine de alphanumérique valide",
            'email.required' => "Il me faut une adresse email!",
            'email.email' => "Ceci n'est pas une adresse email valide!",
            'password.required' => "Il me faut un mot de passe!",
            'password.confirmed' => "Les mots de passe ne correspodent pas!",
            'password.min' => "Le mot de passe doit faire au moins 6 caracteres",
        ];
    }

    public function persist($request)
    {
        $request['token'] = str_random(60);

        $user = User::create($request->all());

        \Mail::to($user)->send(new RegisterMail($user));

        return $user;
    }
}
