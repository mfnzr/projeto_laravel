<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateExplorerRequest extends FormRequest
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
            'id' => '|unique:explorers',
            'nome' => 'required|string|unique:explorers',
            'idade' => 'required|integer',
            'latitude' => 'required|integer',
            'longitude' => 'required|integer',
            'inventario' => 'nullable|string',
        ];
    }
}
