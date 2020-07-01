<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengukuranSkp extends Model
{
    //
    protected $table = 'pengukuran_skp';
    protected $fillable = [
        'tahun',
        'kategori',
        'pegawai_id',
        'kegiatan_tugas_tambahan',
        'kategori_pengukuran',
        'ak_target',
        'target_kuant_output_1',
        'target_kuant_output_2',
        'target_kual_mutu',
        'target_waktu',
        'target_biaya',
        'ak_realisasi',
        'realisasi_kuant_output_1',
        'realisasi_kuant_output_2',
        'realisasi_kual_mutu',
        'realisasi_waktu',
        'realisasi_biaya',
        'penghitungan',
        'nilai_capaian_skp',
        'total_ak_target',
        'total_target_kuant_output_1',
        'total_target_kuant_output_2',
        'total_target_kual_mutu',
        'total_target_biaya',
        'total_ak_realisasi',
        'total_realisasi_kuant_output_1',
        'total_realisasi_kuant_output_2',
        'total_realisasi_kual_mutu',
        'total_realisasi_biaya',
        'total_penghitungan',
        'total_nilai_capaian_skp_1',
        'total_nilai_capaian_skp_2',
        'total_nilai_capaian_skp_3',
        'active',
        'created_at',
        'updated_at'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
