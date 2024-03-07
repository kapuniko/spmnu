<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MoonShine\Models\MoonshineUser;

class StatusTracker extends Model
{
    protected $fillable = [
        'status',
        'user_id',
        'date_time',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'user_id', 'id');
    }
}
