<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Enums\Align;
use Filament\Forms;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Sections extends PageBlock
{
    public static function getBlockSchema(): Forms\Components\Builder\Block
    {
        return Forms\Components\Builder\Block::make('sections')
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('heading')
                            ->columnSpan(2)
                            ->string(),

                        Forms\Components\Select::make('align')
                            ->searchable()
                            ->options(Align::class),
                    ]),
                
                Forms\Components\Textarea::make('content')
                    ->string(),
                
                
                Forms\Components\FileUpload::make('image')
                    ->image(),
                
                Forms\Components\TextInput::make('alt_image')
                    ->string(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}