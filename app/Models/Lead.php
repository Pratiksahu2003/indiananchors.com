<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'event',
        'location',
        'message',
        'email_sent',
    ];

    protected $casts = [
        'email_sent' => 'boolean',
    ];
}
