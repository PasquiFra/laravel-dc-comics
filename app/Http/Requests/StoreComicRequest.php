<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:comics',
            'description' => 'string',
            'thumb' => 'url:http,https',
            'price' => 'string',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'required|date',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio'
        ];
    }
}
