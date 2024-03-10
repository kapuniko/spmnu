<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContragentPerson extends Model
{

    protected $table = "contragent_persons";
    protected $fillable = [
        'contragent_id',
        'post',
        'firstname',
        'secondname',
        'surname',
        'initials',
        'phone',
        'email',
        'description',
    ];

    public function contragent(): BelongsTo
    {
        return $this->belongsTo(Contragent::class);
    }
}
