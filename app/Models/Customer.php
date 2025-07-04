<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customers';

    public $fillable = [
        'full_name',
        'email',
        'phone',
        'alternative_phone',
        'address',
        'location',
        'account_number',
        'customer_type',
        'created_by'
    ];

    protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'alternative_phone' => 'string',
        'address' => 'string',
        'location' => 'string',
        'account_number' => 'string',
        'customer_type' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'alternative_phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:100',
        'location' => 'nullable|string|max:100',
        'account_number' => 'nullable|string|max:100',
        'customer_type' => 'nullable|string|max:100',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function calls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Call::class, 'customer_id');
    }

    public function cases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Case::class, 'customer_id');
    }

    public function chats(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Chat::class, 'customer_id');
    }

    public function customerFeedbacks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\CustomerFeedback::class, 'customer_id');
    }

    public function emails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Email::class, 'customer_id');
    }

    public function sms(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Sms::class, 'customer_id');
    }

    public function tickets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Ticket::class, 'customer_id');
    }

    public function whatsapps(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Whatsapp::class, 'customer_id');
    }
}
