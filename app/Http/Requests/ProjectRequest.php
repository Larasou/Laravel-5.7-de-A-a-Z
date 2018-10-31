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
            'name.min' => "Le nom du projet doit faire 6 caracteres!",
            'description.required' => "La description du projet est obligatoire!",
            'description.between' => "La description du projet doit faire entre 6 et 200 caracteres.",
        ];
    }
}
