<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateListingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:5000'],
            'price' => ['required', 'numeric', 'min:0', 'max:9999999.99'],
            'location' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'url', 'max:2048'],
            ...$this->metaRules(),
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Pavadinimas yra privalomas.',
            'price.required' => 'Kaina yra privaloma.',
            'price.numeric' => 'Kaina turi būti skaičius.',
            'location.required' => 'Vietovė yra privaloma.',
        ];
    }

    /**
     * @return array<string, array<int, string>>
     */
    private function metaRules(): array
    {
        $theme = config('theme.active');
        $fields = config("theme.modules.{$theme}.meta_fields", []);
        $rules = [];

        foreach ($fields as $key => $field) {
            $fieldRules = ['nullable'];

            $fieldRules[] = match ($field['type']) {
                'integer' => 'integer',
                'decimal' => 'numeric',
                'boolean' => 'boolean',
                default => 'string',
            };

            $fieldRules[] = 'max:1000';

            $rules["meta.{$key}"] = $fieldRules;
        }

        return $rules;
    }
}
