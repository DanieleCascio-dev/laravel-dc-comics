<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
        return [
            
                'title'=>'required|min:4|max:100',
                'description'=>'required',
                'image'=>'required',
                'price'=>'required',
                'sale_date'=>'required|date_format:Y-m-d',
                'type'=>'required',
                'series'=>'required'
            
            ];
    }

    public function messages(){

        return
        [
            'title.required'=>'A title is nedeed to proceed.',
            'title.min'=>'The title must include at least 4 characters',
            'description.required'=>'You have to add a description to a new comic.',
            'image.required'=>'Image required to a new comic',
            'price.required'=>'You need to add a price.',
            'sale_date.required'=>'You need to add a date',
            'sale_date.date_format'=>'You need to enter a Y-m-d date format',
            'type.required'=>'You need to select a type',
            'series.required'=>'You need to specify the series'
        ];

    }
}
