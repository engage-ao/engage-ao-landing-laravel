<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'email',
        'country_code',
        'phone',
        'company_name',
        'role',
    ];
}
