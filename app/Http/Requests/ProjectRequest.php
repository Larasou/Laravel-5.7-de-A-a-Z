<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|min:6',
            'description' => 'required|between:6,500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Le nom du projet est obligatoire!",
            'name.min' => "Le nom doit faire au minimum 6 caracteres!",
            'description.required' => "La desccription du projet est obligatoire!",
            'description.between' => "La desccription du projet doit faire entre 6 et 500 caracteres",
        ];
    }
}
