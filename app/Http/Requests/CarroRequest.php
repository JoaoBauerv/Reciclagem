<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {   
        // Definindo as regras de validação
        return [
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'ano' => 'required|integer|min:1886|max:' . date('Y'),
            'cor' => 'required|string|max:50',
            'placa' => 'required|string|max:10|unique:carros,placa',
        ];
    }
    
    public function messages()
        {
            return [
                'modelo.required' => 'O campo modelo é obrigatório.',
                'modelo.string' => 'O campo modelo deve ser um texto.',
                'modelo.max' => 'O campo modelo não pode ter mais que 255 caracteres.',
        
                'marca.required' => 'O campo marca é obrigatório.',
                'marca.string' => 'O campo marca deve ser um texto.',
                'marca.max' => 'O campo marca não pode ter mais que 255 caracteres.',
        
                'ano.required' => 'O campo ano é obrigatório.',
                'ano.integer' => 'O campo ano deve ser um número inteiro.',
                'ano.min' => 'O ano deve ser no mínimo 1886.',
                'ano.max' => 'O ano não pode ser maior que o atual.',
        
                'cor.required' => 'O campo cor é obrigatório.',
                'cor.string' => 'O campo cor deve ser um texto.',
                'cor.max' => 'O campo cor não pode ter mais que 50 caracteres.',
        
                'placa.required' => 'O campo placa é obrigatório.',
                'placa.string' => 'O campo placa deve ser um texto.',
                'placa.max' => 'O campo placa não pode ter mais que 10 caracteres.',
                'placa.unique' => 'Essa placa já está cadastrada.',
            ];
        }
    }

