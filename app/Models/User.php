<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //    ! Fillable
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'address',
        'avatar',
        'birth_place',
        'birth_date',
        'password',
        'religion',
        'gender',
        'status',
        'role_id'
    ];


    // ! Role has many users
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    // ! User has many posts
    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    // ! Function Has Role
    public function hasRole($roleName)
    {
        return $this->role->role_name == $roleName;
    }


    // ! Hidden
    protected $hidden = [
        'password',
        'remember_token',
    ];


    // ! Cast
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}