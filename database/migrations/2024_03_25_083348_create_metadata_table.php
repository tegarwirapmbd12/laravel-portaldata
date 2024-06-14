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
        Schema::create('metadata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indikator')->nullable();
            $table->text('konsep_indikator')->nullable();
            $table->text('definisi_indikator')->nullable();
            $table->text('interpretasi')->nullable();
            $table->text('rumus_perhitungan')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('satuan')->nullable();
            $table->text('klasifikasi_penyajian')->nullable();
            $table->string('indikator_komposit')->nullable();
            $table->text('publikasi_ketersediaan')->nullable();
            $table->text('nama_indpembangun')->nullable();
            $table->text('kegiatan_penghasil')->nullable();
            $table->string('kode_kegiatan')->nullable();
            $table->text('nama_varpembangun')->nullable();
            $table->string('level_estimasi')->nullable();
            $table->string('dapat_diakses_umum_indikator')->nullable();
            $table->string('nama_variabel')->nullable();
            $table->string('alias')->nullable();
            $table->text('konsep_variabel')->nullable();
            $table->text('definisi_variabel')->nullable();
            $table->text('referensi_pemilihan')->nullable();
            $table->string('referensi_waktu')->nullable();
            $table->string('tipe_data')->nullable();
            $table->text('klasifikasi_isian')->nullable();
            $table->string('aturan_validasi')->nullable();
            $table->text('kalimat_pertanyaan')->nullable();
            $table->string('dapat_diakses_umum_variabel')->nullable();
            $table->foreignId('opd_id')->required();
            $table->foreignId('metadata_role_id')->required();
            $table->foreignId('dataset_id')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadata');
    }
};
