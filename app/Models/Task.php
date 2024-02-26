<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MoonShine\Models\MoonshineUser;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_created',
        'name',
        'creator',
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
}
