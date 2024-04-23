<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'id',
        'name',
        'chat',
    ];

    protected $casts = [
        'chat' => 'array',
    ];
}
