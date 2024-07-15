<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
=======
            //
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
        ];
    }
}
