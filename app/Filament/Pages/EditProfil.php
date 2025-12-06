<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms;
use App\Models\Profil;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;


class EditProfil extends Page
{
   
    use InteractsWithForms;   

    protected static ?int $navigationSort = 25;
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Edit Profil';
    protected string $view = 'filament.pages.edit-profil';

    // simpan state form di array 'data'
    public ?array $data = [];

    public function mount(): void
    {
        $profil = Profil::findOrFail(1);
        // isi form dengan data model (jika ada)
        $this->form->fill($profil?->toArray() ?? []);
    }

    // --- INI YANG PENTING: definisikan schema lewat getFormSchema() ---
    protected function getFormSchema(): array
    {
       return [

            // 🏢 SECTION 1: Informasi Kantor
            Section::make('Informasi Kantor')
                ->description('Data umum kantor Anda.')
                ->schema([
                    Grid::make(2)->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Kantor')
                            ->required(),
                        Forms\Components\TextInput::make('alamat')
                            ->label('Alamat'),
                        Forms\Components\TextInput::make('lokasi_kantor')
                            ->label('Lokasi Kantor (url google map)')
                            ->columnSpanFull(),
                          Forms\Components\Textarea::make('map')
                            ->label('MAP (embaded a map) - iframe')
                            ->columnSpanFull(),
                    ]),
                ]),

            // ☎️ SECTION 2: Kontak 
            Section::make('Kontak')
                ->description('Informasi kontak resmi')
                ->schema([
                    Grid::make(2)->schema([
                        Forms\Components\TextInput::make('telp')
                            ->label('Telepon Kantor'),
                        Forms\Components\TextInput::make('email')
                            ->label('Email Kantor')
                            ->email(),
                        Forms\Components\TextInput::make('facebook')
                            ->label('Alamat Facebook'),
                    ]),
                ]),

            // 🌐 SECTION 3: Sejarah & VisiMisi
            Section::make('Informasi Kantor')
                ->description('Riwayat Kelurahan/Desa.')
                ->schema([
                    Grid::make(1)->schema([
                        MarkdownEditor::make('sejarah')           
                            ->label('Deskripsi Sejarah (gunakan tag HTML)')
                            ->required(),
                        MarkdownEditor::make('visimisi')           
                            ->label('Deskripsi Visi & Misi (gunakan tag HTML)')
                            ->required(),
                           
                    ]),
                      Grid::make(2)->schema([
                        
                            FileUpload::make('struktur')
                            ->disk('public')
                            ->directory('profil')
                            ->label('Gambar Struktur Organisasi')
                            ->nullable(),
                    ]),
                ]),

                // 🌐 SECTION 4: Data Kelurahan
            Section::make('Informasi Lainnya')
                ->description('Informasi Kelurahan/Desa.')
                ->schema([
                    Grid::make(1)->schema([
                        TextInput::make('jumlah_penduduk')          
                            ->label('Jumlah Penduduk')
                            ->required(),
                        TextInput::make('jumlah_umkm')          
                            ->label('Jumlah UMKM')
                            ->required(),
                        TextInput::make('luas_wilayah')          
                            ->label('Luas Wilayah (Hektar)')
                            ->required(),
                           
                    ]),
                     
                ]),
        ];
    }

    // Opsional: jika kamu ingin form menyimpan state pada key selain default, override ini
    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function simpan(): void
    {
        $profil = Profil::find(1);

        // ambil state form sebagai array
        $state = $this->form->getState();

        // update model (pastikan $fillable sudah diset di model)
        $profil->update($state);

        Notification::make()
            ->title('Profil berhasil diperbarui!')
            ->success()
            ->send();

        // refresh form dengan data terbaru jika perlu
        $this->form->fill($profil->toArray());
    }
}
