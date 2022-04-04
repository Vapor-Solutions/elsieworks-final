<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $appends = [
        'image_url'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getImageUrlAttribute()
    {
        return '/storage/testimonials/'.$this->image;
    }
}
