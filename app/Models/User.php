<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function post () {
        return $this->hasMany(Post::class);
    }
    public function job () {
        return $this->belongsTo(Job::class);
    }
    public function genre () {
        return $this->belongsTo(Genre::class);
    }
    public function role () {
        return $this->belongsTo(Role::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'name',
        'age',
        'email',
        'password',
        'img',       
        'role_id',       
        'job_id',       
        'testimonial_id',       
        'description',    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
