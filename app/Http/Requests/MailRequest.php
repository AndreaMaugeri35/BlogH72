<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{

    public function rules(): array
    {
        return 
            [                
                'name'=>'required|min:3',
                'email'=>'required|min:3',
                'message'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Devi inserire un nome',
            'email.min' => 'Devi inserire una mail',
            'message.required' => 'Devi inserire un messaggio',
        ];
    }
}
