<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->default(null),
                Textarea::make('deskripsi')           
                    ->label('Deskripsi'),

                MarkdownEditor::make('deskripsi_lengkap')           
                    ->label('Daftar Deskripsi Layanan (gunakan tag HTML jika memungkinkan)')
                    ->columnSpanFull(),  
                MarkdownEditor::make('persyaratan')           
                    ->label('Persyaratan (gunakan tag HTML jika memungkinkan)')
                    ->columnSpanFull(),
               
                FileUpload::make('gambar')
                            ->disk('public')
                            ->directory('layanan')
                            ->label('Gambar Layanan')
                            ->nullable(),
            ]);
    }
}
