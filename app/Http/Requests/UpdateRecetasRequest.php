<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRecetasRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'categoria_id'=> 'requiered|exists:categorias,id',
            'user_id'=> 'requiered|exists:users,id',
            'titulo'=> 'required|string|max:255',
            'descripcion'=> 'required|string',
            'ingredientes'=> 'required|string',
            'instrucciones'=> 'required|string',
            
        ];
    }
}