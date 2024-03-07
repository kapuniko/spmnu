<?php

namespace App\Enums;

use Illuminate\Support\Facades\App;

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
            self::NEW => 'gray',
            self::AT_WORK => 'purple',
            self::POSTPONED => 'yellow',
            self::DONE => 'green',
            self::CANCELED => 'pink',
        };
    }

    public function toString(?string $locale = null): ?string
    {
        $locale = $locale ?? App::getLocale(); // Используем Laravel для получения текущей локали

        switch ($locale) {
            case 'ru':
                return $this->translateToRussian();
            case 'kz':
                return $this->translateToKazakh();
            // Добавьте другие локали, если необходимо
            default:
                return $this->translateToEnglish();
        }
    }

    private function translateToRussian(): string
    {
        return match ($this) {
            self::NEW => 'Новая',
            self::AT_WORK => 'В работе',
            self::POSTPONED => 'Остановлена',
            self::DONE => 'Выполнена',
            self::CANCELED => 'Отменена',
        };
    }

    private function translateToKazakh(): string
    {
        return match ($this) {
            self::NEW => 'Жаңа',
            self::AT_WORK => 'Орындалуда',
            self::POSTPONED => 'Тоқтатылды',
            self::DONE => 'Дайын',
            self::CANCELED => 'Бас&nbsp;тартылды',
        };
    }

    private function translateToEnglish(): string
    {
        return match ($this) {
            self::NEW => 'New',
            self::AT_WORK => 'At work',
            self::POSTPONED => 'Postponed',
            self::DONE => 'Done',
            self::CANCELED => 'Canceled',
        };
    }

}
