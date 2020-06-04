<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJabatanTeknis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_teknis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama_jabatan')->nullable();
            $table->datetime('tmt_jabatan')->nullable();
            $table->datetime('tahun_mulai')->nullable();
            $table->datetime('tahun_selesai')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->datetime('tanggal_sk')->nullable();
            $table->string('nip_penjabat_penandatangan_sk')->nullable();
            $table->string('nip_lama_penjabat_penandatangan_sk')->nullable();
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
        Schema::dropIfExists('jabatan_teknis');
    }
}