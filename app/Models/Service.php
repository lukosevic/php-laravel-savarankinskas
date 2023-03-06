<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'manager',
    ];


}
