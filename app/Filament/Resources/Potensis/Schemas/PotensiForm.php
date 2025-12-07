<?php

namespace App\Filament\Resources\Potensis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;

class PotensiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')->label('Nama Potensi')
                    ->default(null),
                Textarea::make('deskripsi')->label('Deskripsi')
                    ->default(null)
                    ->columnSpanFull(),

                 MarkdownEditor::make('deskripsi_lengkap')           
                    ->label('Konten Narasi (gunakan tag HTML jika memungkinkan)')
                    ->columnSpanFull(),
                
                    FileUpload::make('gambar')
                            ->disk('public')
                            ->directory('potensi')
                            ->label('Foto')
                            ->nullable(),
            ]);
    }
}
