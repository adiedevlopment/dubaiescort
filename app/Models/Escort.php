<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnail;
use Illuminate\Support\Str;

class Escort extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'gender', 'category' , 'local_area' , 'age', 'location', 'phone', 'email',
        'rate_per_hour', 'bio', 'services', 'profile_photo', 'rating',
        'verified', 'status', 'experience', 'languages_spoken','vip',  'height', 'bust', 'nationality', 'orientation', 'ethnicity',
    'shaved', 'hair_color', 'smokes', 'outcall_rate' , 'marital_status' ,  'meta_title', 'meta_description', 'meta_keywords', 'custom_title', 'thumb1','thumb2','thumb3', 'about', 'slug',
    ];

    protected $casts = [
        'languages_spoken' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function thumbnails()
{
    return $this->hasMany(Thumbnail::class);
}





  protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Agar slug empty hai to name se generate karo
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name); // hyphen ke saath
            }
        });
    }
}
