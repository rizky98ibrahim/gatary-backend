<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity',
        'ip_address',
        'user_agent',
        'tags',
        'locale',
        'method',
        'url',
    ];

    // ! User has many activity logs
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}