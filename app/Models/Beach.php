<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'photos', // JSON me store karoge
         'image',
    'meta_tag',
    'meta_title',
    'meta_keywords',
    'meta_description'
    ];

    // Agar photos JSON format me hai
    protected $casts = [
        'photos' => 'array',
    ];
}

