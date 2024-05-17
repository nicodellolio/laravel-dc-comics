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
            'title' => 'required | min:3 | max: 150' ,
            'description' => 'nullable',
            'thumb' => 'nullable | starts_with: https:// ',
            'price' => 'required | starts_with: $',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'nullable'
        ];
    }
}
