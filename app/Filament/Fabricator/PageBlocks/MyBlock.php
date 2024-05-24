<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class MyBlock extends PageBlock
{
    public static function getBlockSchema(): Forms\Components\Builder\Block
    {
        return Forms\Components\Builder\Block::make('my')
            ->schema([
                Forms\Components\TextInput::make('heading'),
                
                Forms\Components\RichEditor::make('description'),

                Forms\Components\FileUpload::make('image')
                    ->image(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}