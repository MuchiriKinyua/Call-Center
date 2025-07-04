<?php

namespace App\Http\Requests;

use App\Models\Whatsapp;
use Illuminate\Foundation\Http\FormRequest;

class UpdateWhatsappRequest extends FormRequest
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
        $rules = Whatsapp::$rules;
        
        return $rules;
    }
}
