<?php

namespace App\Http\Requests;

use App\Models\Notification_setting;
use Illuminate\Foundation\Http\FormRequest;

class CreateNotification_settingRequest extends FormRequest
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
        return Notification_setting::$rules;
    }
}
