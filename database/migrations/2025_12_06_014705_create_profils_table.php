<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('facebook')->nullable();
            $table->longText('sejarah')->nullable();
            $table->text('visimisi')->nullable();
            $table->string('struktur')->nullable();
            $table->text('lokasi_kantor')->nullable();
            $table->text('map')->nullable();
            $table->string('jumlah_penduduk')->nullable();
            $table->string('luas_wilayah')->nullable();
            $table->string('jumlah_umkm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
