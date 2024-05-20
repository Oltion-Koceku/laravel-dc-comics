<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicReaquest extends FormRequest
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
            'title'=>'required|min:3|max:100',
            'thumb'=>'required|min:10|max:255',
            'price'=>'required|min:1|max:6',
            'series'=>'max:50',
            'sale_date'=>'required',
            'type'=>'required|min:3|max:50',
            // visto che salvo i dati gia in array bisogna stampare la stringa
            'artists' => 'required|array',
            'artists.*' => 'required|string',
            'writers' => 'required|array',
            'writers.*' => 'required|string'
        ];
    }

    public function messages(): array{

        return [

            'title.required'=>'Il titolo è obbligatorio',
            'title.min'=>'Il titolo non può avere meno di :min caratteri',
            'title.max'=>'Il tiolo non puo superare :max caratteri',
            'thumb.required'=>'Il thumb è obbligatorio',
            'thumb.min'=>'Il thumb non può avere meno di :min caratteri',
            'thumb.max'=>'Il thumb non puo superare :max caratteri',
            'price.required'=>'Il price è obbligatorio',
            'price.min'=>'Il price non può avere meno di :min caratteri',
            'price.max'=>'Il price non puo superare :max caratteri',
            'series.max'=>'Il series non puo superare :max caratteri',
            'sale_date.required'=>'Il sale_date è obbligatorio',
            'type.required'=>'Il type è obbligatorio',
            'type.min'=>'Il type non può avere meno di :min caratteri',
            'type.max'=>'Il type non puo superare :max caratteri',
            'artists.*.required' => 'il campo Artisti è obbligatorio',
            'artists.*.string' => 'il campo Artisti deve essere una stringa',
            'writers.*.required' => 'il campo Scrittori è obbligatorio',
            'writers.*.string' => 'il campo Scrittori deve essere una stringa',

        ];

    }
}
