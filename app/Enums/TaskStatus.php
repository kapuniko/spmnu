<?php

namespace App\Enums;

enum TaskStatus: string
{
    case NEW = 'new';
    case AT_WORK = 'at work';
    case POSTPONED = 'postponed';
    case DONE = 'done';
    case CANCELED = 'canceled';


    public function getColor(): ?string
    {
        return match ($this) {
            self::NEW => 'info',
            self::AT_WORK => 'primary',
            self::POSTPONED => 'warning',
            self::DONE => 'success',
            self::CANCELED => 'secondary',
        };
    }
}
