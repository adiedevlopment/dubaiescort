<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    public function escort()
{
    return $this->belongsTo(Escort::class);
}
}
