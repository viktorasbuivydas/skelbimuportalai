<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Password::defaults()],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Vardas yra privalomas.',
            'email.required' => 'El. pašto adresas yra privalomas.',
            'email.email' => 'Neteisingas el. pašto formatas.',
            'email.unique' => 'Šis el. pašto adresas jau užregistruotas.',
            'password.required' => 'Slaptažodis yra privalomas.',
            'password.confirmed' => 'Slaptažodžiai nesutampa.',
        ];
    }
}
