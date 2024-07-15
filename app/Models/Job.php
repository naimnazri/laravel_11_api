<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'description',
        'location',
        'salary',
        'company_name',
        'company_description',
        'company_email',
        'company_phone'
    ];
}
