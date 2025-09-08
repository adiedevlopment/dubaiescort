<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'author',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',

        // Add other fillable fields as necessary
    ];
}
