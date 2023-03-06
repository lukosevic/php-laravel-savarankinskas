<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Master extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastName',
        'specialization',
        'city',
        'service',
        'photo',

    ];
}
