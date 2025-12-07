<?php

namespace App\Filament\Resources\Potensis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PotensiForm
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
                Textarea::make('deskripsi_lengkap')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('gambar')
                    ->default(null),
            ]);
    }
}
