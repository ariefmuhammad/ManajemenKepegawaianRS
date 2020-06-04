<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    protected $fillable = [
        'eselon_1',
        'eselon_2',
        'eselon_3',
        'eselon_4',
        'nip_baru',
        'nip_lama',
        'nama_pegawai',
        'gelar_depan',
        'gelar_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_keluarga',
        'agama',
        'pendidikan_akhir',
        'nama_sekolah',
        'tahun_lulus',
        'jurusan_prodi',
        'status_kepegawaian',
        'instansi_asal',
        'tmt_cpns',
        'nama_jabatan',
        'nomor_karpeg',
        'taspen',
        'nomor_npwp',
        'alamat_rumah',
        'kota',
        'kode_pos',
        'str',
        'masa_str',
        'sikp',
        'masa_sikp',
        'spk',
        'masa_spk',
        'rkk',
        'masa_rkk',
        'ruangan_id',
        'created_at',
        'updated_at'
    ];

    public function telepon()
    {
        return $this->hasMany('App\Telepon', 'pegawai_id',);
    }

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'ruangan_id');
    }

    public function anak()
    {
        return $this->hasMany('App\Anak', 'pegawai_id',);
    }

    public function dasar()
    {
        return $this->hasMany('App\Dasar', 'pegawai_id',);
    }

    public function diklatFungsional()
    {
        return $this->hasMany('App\DiklatFungsional', 'pegawai_id',);
    }

    public function diklatTeknis()
    {
        return $this->hasMany('App\DiklatTeknis', 'pegawai_id',);
    }

    public function diklatPerjenjangan()
    {
        return $this->hasMany('App\DiklatPerjenjangan', 'pegawai_id',);
    }

    public function hukuman()
    {
        return $this->hasMany('App\hukuman', 'pegawai_id',);
    }

    public function istriSuami()
    {
        return $this->hasMany('App\IstriSuami', 'pegawai_id',);
    }

    public function jabatanFungsional()
    {
        return $this->hasMany('App\JabatanFungsional', 'pegawai_id',);
    }

    public function jabatanStruktural()
    {
        return $this->hasMany('App\JabatanStruktural', 'pegawai_id',);
    }

    public function jabatanTeknis()
    {
        return $this->hasMany('App\JabatanTeknis', 'pegawai_id',);
    }

    public function keluargaIstriSuami()
    {
        return $this->hasMany('App\KeluargaIstriSuami', 'pegawai_id',);
    }

    public function keluargaKandung()
    {
        return $this->hasMany('App\KeluargaKandung', 'pegawai_id',);
    }

    public function kepangkatan()
    {
        return $this->hasMany('App\Kepangkatan', 'pegawai_id',);
    }

    public function organisasi()
    {
        return $this->hasMany('App\Organisasi', 'pegawai_id',);
    }

    public function pendidikanFormal()
    {
        return $this->hasMany('App\PendidikanFormal', 'pegawai_id',);
    }

    public function penghargaan()
    {
        return $this->hasMany('App\Penghargaan', 'pegawai_id',);
    }

    public function seminar()
    {
        return $this->hasMany('App\Seminar', 'pegawai_id',);
    }
}
