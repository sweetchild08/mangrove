<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required_without:phone', 'email', 'max:255', 'unique:users','nullable'],
            'phone' => ['required_without:email', 'unique:users','nullable'  ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'first_name'=>['required', 'string', 'max:255'],
            'middle_name'=>['nullable', 'string', 'max:255'],
            'last_name'=>['required', 'string', 'max:255'],
            'province'=>['required', 'string', 'max:255'],
            'city'=>['required', 'string', 'max:255'],
            'zipcode'=>['required', 'string', 'max:255'],
            'barangay'=>['required', 'string', 'max:255'],
            'gender'=>['required', 'string', 'max:255'],
        ];
    }
}
