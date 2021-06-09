<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    public function service () {
        return $this->hasMany(Service::class); 
    }
    public function iphone () {
        return $this->hasMany(Iphone::class); 
    }
}
