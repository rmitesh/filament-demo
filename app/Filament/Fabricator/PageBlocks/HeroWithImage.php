<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroWithImage extends PageBlock
{
    public static function getBlockSchema(): Forms\Components\Builder\Block
    {
        return Forms\Components\Builder\Block::make('hero-with-image')
            ->label('Hero section with image')
            ->schema([
                Forms\Components\Grid::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\Section::make('Left Section')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->string(),
                                
                                Forms\Components\TextInput::make('short_description')
                                    ->string(),
                                
                                Forms\Components\TextInput::make('button_text')
                                    ->string(),
                            ]),
                        
                        Forms\Components\Section::make('Right Section')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->columnSpanFull()
                                    ->image(),

                                Forms\Components\TextInput::make('alt_image')
                                    ->string(),
                            ]),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}