<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginsRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "Il me faut ton identifiant!",
           // 'email.email' => "Ceci n'est pas une adresse email valide!",
            'password.required' => "Il me faut un mot de passe!",
            'password.min' => "Le mot de passe doit faire au moins 6 caracteres",
        ];
    }
}
