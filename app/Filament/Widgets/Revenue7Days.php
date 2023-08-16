<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Revenue7Days extends BaseWidget
{
    protected int | string | array $columnSpan = 4;

    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
//            Stat::make('Revenue Last 7 Days (USD)',
//                number_format(Order::where('created_at', '>=', now()->subDays(7)->startOfDay())->sum('price') / 100, 2))
        ];
    }
}
