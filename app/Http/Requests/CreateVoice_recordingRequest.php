<?php

namespace App\Http\Requests;

use App\Models\Voice_recording;
use Illuminate\Foundation\Http\FormRequest;

class CreateVoice_recordingRequest extends FormRequest
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
        return Voice_recording::$rules;
    }
}
