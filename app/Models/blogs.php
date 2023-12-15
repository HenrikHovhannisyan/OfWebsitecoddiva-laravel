<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_image',
        'blog_title',
        'blog_description',
        'image1',
        'image2',
        'title',
        'description',
    ];

}
