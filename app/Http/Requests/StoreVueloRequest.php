<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVueloRequest extends FormRequest
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
            'codigo' => 'required|max:6',
            'aero_origen' =>'required',
            'aero_destino' =>'required',
            'companya_id' =>'required',
            'hora_salida' =>'required',
            'hora_llegada' =>'required',
            'plazas' =>'required',
            'precio' =>'required',
        ];
    }
}
