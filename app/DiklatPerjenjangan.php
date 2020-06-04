<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiklatPerjenjangan extends Model
{
    //
    protected $table = 'diklat_perjenjangan';
    protected $fillable = [
        'tahun',
        'pegawai_id',
        'jenis_diklat',
        'angkatan',
        'lokasi',
        'tanggal_mulai',
        'tanggal_selesai',
        'jumlah_jam',
        'penyelenggara',
        'predikat',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id',);
    }
}