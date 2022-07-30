<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateAtosFormRequest extends FormRequest
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
        $rules = [
            'image' => [
                'image',
                'mimes:png,jpeg,jpg,svg,gif,bmp',
                'max:2048',
            ],
            'numero' => [
                'integer',
                'min:0',
            ],

            'ano' => 'integer|min:1900',

            'ementa' => [
                'string',
                'max:500',
            ],

            'setor' => [
                'string',
                'max:255',

            ],

            'classificacao' => 'string|max:255',
            'resposta' => 'string|max:255',
            'data_envio' => 'string|max:255',
        ];

        if ($this->method('PUT')) {
            $rules['image'] = [
                'mimes:png,jpeg,jpg,svg,gif,bmp',
            ];
        }
        return $rules;
    }
}