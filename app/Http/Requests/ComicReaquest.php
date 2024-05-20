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
            'artists'=>'required',
            'writers'=>'required'
        ];
    }

    public function message(){

        [

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
            'artists.required'=>'Il artists è obbligatorio',
            'writers.required'=>'Il writers è obbligatorio',

        ];

    }
}
