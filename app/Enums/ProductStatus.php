<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum ProductStatus: string implements HasLabel, HasColor, HasIcon
{
    case IN_STOCK = 'in stock';
    case SOLD_OUT = 'sold out';
    case COMING_SOON = 'coming soon';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::IN_STOCK => 'In stock',
            self::SOLD_OUT => 'Sold out',
            self::COMING_SOON => 'Coming soon',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::IN_STOCK => 'success',
            self::SOLD_OUT => 'warning',
            self::COMING_SOON => 'gray',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::IN_STOCK => 'heroicon-m-pencil',
            self::SOLD_OUT => 'heroicon-m-eye',
            self::COMING_SOON => 'heroicon-m-check',
        };
    }
}
