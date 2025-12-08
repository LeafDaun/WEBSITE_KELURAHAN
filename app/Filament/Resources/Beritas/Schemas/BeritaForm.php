<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->columnSpanFull()
                    ->default(null)
                    ->required(),
                Textarea::make('isi_berita')
                    ->label('Isi Berita')
                    ->default(null)->rows(12)
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('gambar')
                            ->disk('public')
                            ->directory('berita')
                            ->label('Foto')
                            ->required(),
                 DatePicker::make('tgl_posting')
                    ->label('Tanggal Posting')
                    ->required(),
            ]);
    }
}
