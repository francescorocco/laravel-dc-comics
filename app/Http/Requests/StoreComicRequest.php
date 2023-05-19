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
            'title'=>'required|max:50',
            'description'=>'nullable|max:60000',
            'thumb'=>'required|url|max:255',
            'price'=>'required|max:6',
            'series'=>'required|max:40',
            'sale_date'=>'required|max:10',
            'type'=>'required|max:30',
        ];
    }
        public function messages(){
            return[
                'title.required'=>'Il titolo è obbligatorio',
                'title.max'=>'Il titolo può contenere al massimo 50 caratteri',
                'description.max'=>'La descrizione puo contenere al massimo 60000 caratteri',
                'thumb.required'=>"L'immagine è obbligatoria",
                'thumb.url'=>"L'immagine deve essere un URL composto da: http://",
                'thumb.max'=>"L'URL può essere di massimo 255 caratteri",
                'price.required'=>'Il prezzo è obbligatorio',
                'price.max'=>'Il prezzo deve essere un valore composto da 4 cifre prima della virgola e 2 cifre dopo la virgola',
                'series.required'=>'Il campo serie è obbligatorio',
                'series.max'=>'Il campo serie accetta massimo 40 caratteri',
                'sale_date.required'=>'La data di vendita è obbligatoria',
                'sale_date.max'=>'La data può contenere al massimo 10 caratteri DD/MM/YYYY',
                'type.required'=>'Il campo tipo è obbligatorio',
                'type.max'=>'Il campo tipo accetta massimo 30 caratteri',
            ];
        }
}
