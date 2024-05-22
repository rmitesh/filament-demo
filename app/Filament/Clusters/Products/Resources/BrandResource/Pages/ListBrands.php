<?php

namespace App\Filament\Clusters\Products\Resources\BrandResource\Pages;

use App\Filament\Clusters\Products\Resources\BrandResource;
use App\Filament\Exports\Shop\BrandExporter;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrands extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ExportAction::make()
                ->exporter(BrandExporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
