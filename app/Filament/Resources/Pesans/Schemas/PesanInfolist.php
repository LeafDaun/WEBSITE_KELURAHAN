<?php

namespace App\Filament\Resources\Pesans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PesanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('hp'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('pesan')
                    ->label('Pesan'),
            ]);
    }
}
