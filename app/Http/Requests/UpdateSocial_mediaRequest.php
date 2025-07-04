<?php

namespace App\Http\Requests;

use App\Models\Social_media;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSocial_mediaRequest extends FormRequest
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
        $rules = Social_media::$rules;
        
        return $rules;
    }
}
