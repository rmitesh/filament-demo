<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Align: string implements HasLabel
{
    case Left = 'left';
    case Right = 'right';
    
    public function getLabel(): string
    {
        return match ($this) {
            Align::Left => 'Left',
            Align::Right => 'Right',
        };
    }
    
    public function getFlexClass(): string
    {
        return match ($this) {
            Align::Left => 'lg:flex-row',
            Align::Right => 'lg:flex-row-reverse',
        };
    }
}
