<?php

namespace App\Http\Requests;

use App\Models\Ticket_statute;
use Illuminate\Foundation\Http\FormRequest;

class CreateTicket_statuteRequest extends FormRequest
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
        return Ticket_statute::$rules;
    }
}
