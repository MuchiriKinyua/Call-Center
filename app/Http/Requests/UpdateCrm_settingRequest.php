<?php

namespace App\Http\Requests;

use App\Models\Crm_setting;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCrm_settingRequest extends FormRequest
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
        $rules = Crm_setting::$rules;
        
        return $rules;
    }
}
