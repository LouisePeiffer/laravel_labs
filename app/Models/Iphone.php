<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    use HasFactory;
    public function icon () {
        return $this->belongsTo(Icon::class);
    }
}
