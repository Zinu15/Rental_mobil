<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMobilRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'merek' => 'required',
            'model' => 'required',
            'nopol' => 'required',
            'harga' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'merek.required' => 'Merek Tidak Boleh Kosong',
            'model.required' => 'Model Tidak Boleh Kosong',
            'nopol.required' => ' No Polisi Tidak Boleh Kosong',
            'harga.required' => 'Harga Tidak Boleh Kosong',
        ];
    }

}
