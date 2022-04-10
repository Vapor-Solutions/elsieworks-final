<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $appends = [
        'image_url'
    ];

    public function getImageUrlAttribute()
    {
        $name = trim(collect(explode(' ', $this->name))->map(function ($segment) {
            return $segment[0] ?? '';
        })->join(' '));

        if ($this->image != null) $image = '/storage/clients/' . $this->image;

        return $image??'https://ui-avatars.com/api/?name='.urlencode($name).'&color=7F9CF5&background=EBF4FF';
    }

    public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
}
