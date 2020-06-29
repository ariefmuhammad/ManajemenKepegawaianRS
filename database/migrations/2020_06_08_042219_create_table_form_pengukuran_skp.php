<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormPengukuranSkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengukuran_skp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->enum('kategori',['Semester 1','Semester 2','Setahun']);
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('kegiatan_tugas_tambahan')->nullable();
            $table->enum('kategori_pengukuran',['Kegiatan Tugas Tambahan','Tugas Tambahan','Kreativitas']);
            $table->string('ak_target')->nullable();
            $table->string('target_kuant_output_1')->nullable();
            $table->string('target_kuant_output_2')->nullable();
            $table->string('target_kual_mutu')->nullable();
            $table->string('target_waktu')->nullable();
            $table->string('target_biaya')->nullable();
            $table->string('ak_realisasi')->nullable();
            $table->string('realisasi_kuant_output_1')->nullable();
            $table->string('realisasi_kuant_output_2')->nullable();
            $table->string('realisasi_kual_mutu')->nullable();
            $table->string('realisas_waktu')->nullable();
            $table->string('realisasi_biaya')->nullable();
            $table->string('penghitungan')->nullable();
            $table->string('nilai_capaian_skp')->nullable();
            $table->string('total_ak_target')->nullable();
            $table->string('total_target_kuant_output_1')->nullable();
            $table->string('total_target_kuant_output_2')->nullable();
            $table->string('total_target_kual_mutu')->nullable();
            $table->string('total_target_biaya')->nullable();
            $table->string('total_ak_realisasi')->nullable();
            $table->string('total_realisasi_kuant_output_1')->nullable();
            $table->string('total_realisasi_kuant_output_2')->nullable();
            $table->string('total_realisasi_kual_mutu')->nullable();
            $table->string('total_realisasi_biaya')->nullable();
            $table->string('total_penghitungan')->nullable();
            $table->string('total_nilai_capaian_skp_1')->nullable();
            $table->string('total_nilai_capaian_skp_2')->nullable();
            $table->string('total_nilai_capaian_skp_3')->nullable();
            $table->enum('active',['1','0']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengukuran_skp');
    }
}
