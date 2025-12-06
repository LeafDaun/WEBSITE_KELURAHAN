<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->default(null),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('persyaratan')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                            ->disk('public')
                            ->directory('layanan')
                            ->label('Gambar Layanan')
                            ->nullable(),
            ]);
    }
}
