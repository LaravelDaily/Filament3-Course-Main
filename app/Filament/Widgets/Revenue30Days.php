<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Revenue30Days extends BaseWidget
{
    protected int | string | array $columnSpan = 4;

    protected static ?int $sort = 3;

    protected function getStats(): array
    {
        return [
//            Stat::make('Revenue Last 30 Days (USD)',
//                number_format(Order::where('created_at', '>=', now()->subDays(30)->startOfDay())->sum('price') / 100, 2))
        ];
    }
}
