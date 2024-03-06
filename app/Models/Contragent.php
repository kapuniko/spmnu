<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contragent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'iin',
        'rnn',
        'bin',
        'gos_reg',
        'bank_detail',
        'description'
    ];

    public function contragentType(): BelongsTo
    {
        return $this->belongsTo(ContragentType::class);
    }

    public function workObjects(): HasMany
    {
        return $this->hasMany(WorkObject::class);
    }

}

