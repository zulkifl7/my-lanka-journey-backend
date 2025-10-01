<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image_url'];

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}