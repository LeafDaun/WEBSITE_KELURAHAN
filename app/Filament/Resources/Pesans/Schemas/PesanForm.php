<?php

namespace App\Filament\Resources\Pesans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PesanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('hp')
                    ->required(),
                Textarea::make('pesan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
