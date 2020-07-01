<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSkp extends Model
{
    //
    protected $table = 'form_skp';
    protected $fillable = [
        'tahun',
        'kategori',
        'pegawai_id',
        'kegiatan_tugas_jabatan_1',
        'kegiatan_tugas_jabatan_2',
        'ak',
        'kuant_output_1',
        'kuant_output_2',
        'kual_mutu',
        'waktu',
        'biaya',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
