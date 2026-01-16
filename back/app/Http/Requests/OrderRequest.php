<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'order.*.user_id' => 'required|exists:users,id',
            'order.*.product_id' => 'required|exists:products,id',
            'order.*.discount' => 'required|integer|min:1',
            'order.*.quantity' => 'required|integer|min:1',
            'order.*.amount' => 'required|integer|min:1',
            'order.*.status' => 'required|array|min:1',
        ];
    }
}
