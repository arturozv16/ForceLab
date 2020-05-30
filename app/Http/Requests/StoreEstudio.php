<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudio extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tipoEstudio'=>'required | min:3 | max:500',
            'fechaEstudio'=>'required|date|after_or_equal:today',
            //'fechaEntrega'=>'required|date|after:today',
            //'fechaProximo'=>'required|date|after:today',
            //'fechaRevision'=>'required|date|after:today',
        ];
    }
}
