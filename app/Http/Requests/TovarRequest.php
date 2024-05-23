<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TovarRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'info' => 'required|min:10|max:500',
            'firm' => 'required|min:3|max:50',

        ];
    }

    public function messages(){
        return[
            'name.required' => 'Поле ИМЯ является обязательным для заполнения',
            'info.required' => 'Поле ОПИСАНИЕ является обязательным для заполнения',
            'firm.required' => 'Поле ФИРМА является обязательным для заполнения',

        ];
    }
}
