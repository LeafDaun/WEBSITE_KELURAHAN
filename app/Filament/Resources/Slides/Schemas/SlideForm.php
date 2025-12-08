<?php

namespace App\Filament\Resources\Slides\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class SlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->default(null)
                    ->required(),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                            ->disk('public')
                            ->directory('slide')
                            ->label('Gambar Slide')
                            ->required(),
            ]);
    }
}
