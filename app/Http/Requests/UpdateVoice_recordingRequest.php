<?php

namespace App\Http\Requests;

use App\Models\Voice_recording;
use Illuminate\Foundation\Http\FormRequest;

class UpdateVoice_recordingRequest extends FormRequest
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
        $rules = Voice_recording::$rules;
        
        return $rules;
    }
}
