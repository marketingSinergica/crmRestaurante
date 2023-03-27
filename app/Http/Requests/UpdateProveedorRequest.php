<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProveedorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => [
                'required'
            ],
            'telefonoContacto' => [
                'required'
            ],
            'emailContacto' => [
                'required',
                'unique:proveedors,emailContacto,' . $this->proveedor->id
            ],
            'direccion' => [
                'required'
            ],
            'comentario' => [
                'nullable'
            ],
        ];
    }
}
