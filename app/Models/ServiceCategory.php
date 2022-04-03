<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
