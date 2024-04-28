<?php

namespace App\Models;

use App\Models\Contragent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MoonShine\Models\MoonshineUser;

class WorkObject extends Model
{

    protected $fillable = [
        'name',
        'address',
        'date_created',
        'deadline',
        'creator',
        'status',
        'description',
        'performer',
        'files',
        'contract_files',
        'project_files',
        'photos',
        'chat',
        'is_archived'
    ];


    protected $casts = [
        'files' => 'array', // указываем, что поле 'files' должно быть преобразовано в массив
        'contract_files' => 'array',
        'project_files' => 'array',
        'photos' => 'array',
        'chat' => 'array'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::saving(function ($workObject) {
            // Проверяем, изменилось ли значение поля is_archived
            if ($workObject->isDirty('is_archived')) {
                // Получаем все связанные задачи и обновляем их is_archived на то же значение
                $workObject->tasks()->update(['is_archived' => $workObject->is_archived]);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'creator', 'id');
    }

    public function contragent(): BelongsTo
    {
        return $this->belongsTo(Contragent::class);
    }
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function performer_id(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class, 'performer', 'id');
    }

    public function members_id(): BelongsToMany
    {
        return $this->belongsToMany(MoonshineUser::class);
    }

}
