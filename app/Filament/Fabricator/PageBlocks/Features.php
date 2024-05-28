<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Features extends PageBlock
{
    public static function getBlockSchema(): Forms\Components\Builder\Block
    {
        return Forms\Components\Builder\Block::make('features')
            ->schema([
                Forms\Components\TextInput::make('heading')
                    ->string(),
                    
                Forms\Components\Repeater::make('cards')
                    ->minItems(1)
                    ->maxItems(3)
                    ->defaultItems(1)
                    ->collapsible()
                    ->grid(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->string(),
                        
                        Forms\Components\Textarea::make('content')
                            ->string(),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}