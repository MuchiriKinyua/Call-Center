<?php

namespace App\Http\Requests;

use App\Models\Performance_report;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePerformance_reportRequest extends FormRequest
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
        $rules = Performance_report::$rules;
        
        return $rules;
    }
}
