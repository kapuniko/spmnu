<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MoonShine\Models\MoonshineUser;

class WorkObject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'client',
        'date_created',
        'deadline',
        'creator',
        'status',
        'description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'creator', 'id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }



}
