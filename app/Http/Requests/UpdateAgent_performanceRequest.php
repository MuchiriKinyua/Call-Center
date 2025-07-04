<?php

namespace App\Http\Requests;

use App\Models\Agent_performance;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAgent_performanceRequest extends FormRequest
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
        $rules = Agent_performance::$rules;
        
        return $rules;
    }
}
