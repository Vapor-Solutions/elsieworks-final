<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(ServiceCategory::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
