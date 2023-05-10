<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:3',
            'producer'=>'required|min:3',
            'cover'=>'required|image',
            'review'=>'required|min:10|max:100',
            'year'=>'required|min:4|max:4',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Devi inserire un titolo di almeno 3 caratteri',
            'title.min' => 'Devi inserire un titolo di almeno 3 caratteri',
            'producer.required' => 'Devi inserire il nome di un produttore di almeno 3 caratteri',
            'producer.min' => 'Devi inserire il nome di un produttore di almeno 3 caratteri',
            'cover.required' => 'Devi inserire un\'immagine',
            'review.required' => 'Devi inserire una recensione di almeno 10 caratteri(massimo 100)',
            'review.min' => 'Devi inserire una recensione di almeno 10 caratteri(massimo 100)',
            'review.max' => 'Devi inserire una recensione di almeno 10 caratteri(massimo 100)',
            'year.required' => 'Devi inserire un anno di uscita valido',
            'year.min' => 'Devi inserire un anno di uscita valido',
            'year.max' => 'Devi inserire un anno di uscita valido',
        ];
    }
}
