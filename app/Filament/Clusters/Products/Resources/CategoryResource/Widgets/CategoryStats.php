<?php

namespace App\Filament\Clusters\Products\Resources\CategoryResource\Widgets;

use App\Filament\Clusters\Products\Resources\CategoryResource\Pages\ListCategories;
use App\Filament\Resources\Shop\OrderResource\Pages\ListOrders;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoryStats extends BaseWidget
{
    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListOrders::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Open orders', $this->getPageTableQuery()->whereIn('status', ['open', 'processing'])->count()),
            Stat::make('Average price', number_format($this->getPageTableQuery()->avg('total_price'), 2)),
        ];
    }
}
