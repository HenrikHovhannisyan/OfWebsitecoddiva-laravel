<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class models extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'image1',
        'info',
        'height',
        'bust',
        'waist',
        'hip',
        'description',
        'description1',
        'description2',
    ];

}
