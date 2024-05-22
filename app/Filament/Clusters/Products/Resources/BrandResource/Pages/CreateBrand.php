<?php

namespace App\Filament\Clusters\Products\Resources\BrandResource\Pages;

use App\Filament\Clusters\Products\Resources\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBrand extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
