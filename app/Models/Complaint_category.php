<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint_category extends Model
{
    public $table = 'complaint_categories';

    public $fillable = [
        'full_name',
        'description'
    ];

    protected $casts = [
        'full_name' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
