<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product.*.name' => 'required|array|min:1',
            'product.*.manufacturer' => 'required|array|min:1',
            'product.*.price' => 'required|integer|min:1',
            'product.*.unit' => 'required|array|min:1',
            'product.*.short_description' => 'required|array|min:1',
            'product.*.description' => 'required|array|min:1',
            'product.*.image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
