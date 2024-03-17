<?php

namespace App\MoonShine\Pages;

trait HasAktauTime
{
    public function AktauTime()
    {
        $currentDateTime = date("d.m.Y H:i");
        return date("d.m.Y H:i", strtotime($currentDateTime) + 5 * 3600);
    }

    public function AktauTimeToBase()
    {
        return date('Y-m-d H:i:s', strtotime($this->AktauTime()));
    }
}
