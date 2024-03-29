<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MoonShine\Models\MoonshineUser;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_created',
        'name',
        'creator',
        'updater',
        'performer',
        'description',
        'status',
        'deadline'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'creator', 'id');
    }

    public function performerUser(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'performer', 'id');
    }

    public function updaterUser(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'updater', 'id');
    }

    public function workObject(): BelongsTo
    {
        return $this->belongsTo(WorkObject::class);
    }

    public function statusTracker(): HasMany
    {
        return $this->hasMany(StatusTracker::class, 'task_id', 'id');
    }
}
