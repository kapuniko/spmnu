<?php

declare(strict_types=1);

namespace App\MoonShine\Fields;

use MoonShine\Fields\Json;
use Closure;
use App\MoonShine\Pages\HasAktauTime;

class Chat extends Json
{
    use HasAktauTime;

    protected string $view = 'admin.fields.chat';

}
