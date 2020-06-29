<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skp;
use App\FormSkp;
use App\PengukuranSkp;
use App\PerilakuKerjaSkp;
use App\PenilaianSkp;
use App\Pegawai;

class skpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSkp()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $skp = Skp::where('active', '1')->get();

        return view('skp', compact(['skp', 'pegawai_id']));
    }

    public function indexFormSkp()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $form_skp = FormSkp::where('active', '1')->get();

        return view('form_skp', compact(['form_skp', 'pegawai_id']));
    }


    public function indexPengukuranSkp()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $pengukuran_skp = PengukuranSkp::where('active', '1')->get();

        return view('pengukuran_skp', compact(['pengukuran_skp', 'pegawai_id']));
    }


    public function indexPerilakuKerjaSkp()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $perilaku_kerja_skp = PerilakuKerjaSkp::where('active', '1')->get();

        return view('perilaku_kerja_skp', compact(['perilaku_kerja_skp', 'pegawai_id']));
    }


    public function indexPenilaianSkp()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $penilaian_skp = PenilaianSkp::where('active', '1')->get();

        return view('penilaian_skp', compact(['penilaian_skp', 'pegawai_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSkp(Request $request)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $skp = Skp::create([
            'tahun' => $request->input('tahun', 2020),
            'kategori' => $request->kategori,
            'pegawai_id' => $pegawai_id->id,
            'nama_pejabat_penilai' => $request->nama_pejabat_penilai,
            'nip_pejabat_penilai' => $request->nip_pejabat_penilai,
            'pangkat_golongan_ruang_penilai' => $request->pangkat_golongan_ruang_penilai,
            'jabatan_penilai' => $request->jabatan_penilai,
            'unit_kerja_penilai' => $request->unit_kerja_penilai,
            'nama_atasan_pejabat_penilai' => $request->nama_atasan_pejabat_penilai,
            'nip_atasan_pejabat_penilai' => $request->nip_atasan_pejabat_penilai,
            'pangkat_golongan_ruang_atasan_penilai' => $request->pangkat_golongan_ruang_atasan_penilai,
            'jabatan_atasan_penilai' => $request->jabatan_atasan_penilai,
            'unit_kerja_atasan_penilai' => $request->unit_kerja_atasan_penilai,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data SKP berhasil ditambahkan');

        return back();
    }

    public function storeFormSkp(Request $request)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $form_skp = FormSkp::create([
            'tahun' => $request->input('tahun', 2020),
            'kategori' => $request->kategori,
            'pegawai_id' => $pegawai_id->id,
            'kegiatan_tugas_jabatan_1' => $request->kegiatan_tugas_jabatan_1,
            'kegiatan_tugas_jabatan_2' => $request->kegiatan_tugas_jabatan_2,
            'ak' => $request->ak,
            'kuant_output_1' => $request->kuant_output_1,
            'kuant_output_2' => $request->kuant_output_2,
            'kual_mutu' => $request->kual_mutu,
            'biaya' => $request->biaya,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Form SKP berhasil ditambahkan');

        return back();
    }

    public function storePengukuranSkp(Request $request)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();
        
        $pengukuran_skp = PengukuranSkp::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'kegiatan_tugas_tambahan' => $request->kegiatan_tugas_tambahan,
            'kategori' => $request->kategori,
            'ak_target' => $request->ak_target,
            'target_kuant_output_1' => $request->target_kuant_output_1,
            'target_kuant_output_2' => $request->target_kuant_output_2,
            'target_kual_mutu' => $request->target_kual_mutu,
            'target_biaya' => $request->target_biaya,
            'ak_realisasi' => $request->ak_realisasi,
            'realisasi_kuant_output_1' => $request->realisasi_kuant_output_1,
            'realisasi_kuant_output_2' => $request->realisasi_kuant_output_2,
            'realisasi_kual_mutu' => $request->realisasi_kual_mutu,
            'realisasi_biaya' => $request->realisasi_biaya,
            'penghitungan' => $request->penghitungan,
            'nilai_capaian_skp' => $request->nilai_capaian_skp,
            'total_ak_target' => $request->total_ak_target,
            'total_target_kuant_output_1' => $request->total_target_kuant_output_1,
            'total_target_kuant_output_2' => $request->total_target_kuant_output_2,
            'total_target_kual_mutu' => $request->total_target_kual_mutu,
            'total_target_biaya' => $request->total_target_biaya,
            'total_ak_realisasi' => $request->total_ak_realisasi,
            'total_realisasi_kuant_output_1' => $request->total_realisasi_kuant_output_1,
            'total_realisasi_kuant_output_2' => $request->total_realisasi_kuant_output_2,
            'total_realisasi_kual_mutu' => $request->total_realisasi_kual_mutu,
            'total_realisasi_biaya' => $request->total_realisasi_biaya,
            'total_penghitungan' => $request->total_penghitungan,
            'total_nilai_capaian_skp_1' => $request->total_nilai_capaian_skp_1,
            'total_nilai_capaian_skp_2' => $request->total_nilai_capaian_skp_2,
            'total_nilai_capaian_skp_3' => $request->total_nilai_capaian_skp_3,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Pengukuran SKP berhasil ditambahkan');

        return back();
    }


    public function storePerilakuKerjaSkp(Request $request)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $perilaku_kerja_skp = PerilakuKerjaSkp::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'orientasi_pelayanan' => $request->orientasi_pelayanan,
            'integritas' => $request->integritas,
            'komitmen' => $request->komitmen,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'kepemimpinan' => $request->kepemimpinan,
            'jumlah' => $request->jumlah,
            'rata_rata' => $request->rata_rata,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data PerilaKu Kerja SKP berhasil ditambahkan');

        return back();
    }


    public function storePenilaianSkp(Request $request)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $penilaian_skp = PenilaianSkp::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'sasaran_kerja_pegawai' => $request->sasaran_kerja_pegawai,
            'orientasi_pelayanan' => $request->orientasi_pelayanan,
            'integritas' => $request->integritas,
            'komitmen' => $request->komitmen,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'kepemimpinan' => $request->kepemimpinan,
            'jumlah' => $request->jumlah,
            'rata_rata' => $request->rata_rata,
            'nilai_perilaku_kerja' => $request->nilai_perilaku_kerja,
            'jumlah_sasaran_kerja_pegawai' => $request->jumlah_sasaran_kerja_pegawai,
            'jumlah_orientasi_pelayanan' => $request->jumlah_orientasi_pelayanan,
            'jumlah_integritas' => $request->jumlah_integritas,
            'jumlah_komitmen' => $request->jumlah_komitmen,
            'jumlah_disiplin' => $request->jumlah_disiplin,
            'jumlah_kerjasama' => $request->jumlah_kerjasama,
            'jumlah_kepemimpinan' => $request->jumlah_kepemimpinan,
            'jumlah_jumlah' => $request->jumlah_jumlah,
            'jumlah_rata_rata' => $request->jumlah_rata_rata,
            'jumlah_nilai_perilaku_kerja' => $request->jumlah_nilai_perilaku_kerja,
            'nilai_prestasi_kerja_1' => $request->nilai_prestasi_kerja_1,
            'nilai_prestasi_kerja_2' => $request->nilai_prestasi_kerja_2,
            'keberatan_pegawai' => $request->keberatan_pegawai,
            'tanggal_keberatan_pegawai' => $request->tanggal_keberatan_pegawai,
            'tanggapan_pejabat' => $request->tanggapan_pejabat,
            'tanggal_tanggapan_pejabat' => $request->tanggal_tanggapan_pejabat,
            'keputusan_atasan_pejabat' => $request->keputusan_atasan_pejabat,
            'tanggal_keputusan_atasan_pejabat' => $request->tanggal_keputusan_atasan_pejabat,
            'rekomendasi' => $request->rekomendasi,
            'dibuat_tanggal_pejabat_penilai' => $request->dibuat_tanggal_pejabat_penilai,
            'diterima_tanggal_pegawai' => $request->diterima_tanggal_pegawai,
            'diterima_tanggal_atasan_pejabat_penilai' => $request->diterima_tanggal_atasan_pejabat_penilai,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Penilaian SKP berhasil ditambahkan');

        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSkp(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $skp = Skp::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'kategori' => $request->kategori,
            'pegawai_id' => $pegawai_id->id,
            'nama_pejabat_penilai' => $request->nama_pejabat_penilai,
            'nip_pejabat_penilai' => $request->nip_pejabat_penilai,
            'pangkat_golongan_ruang_penilai' => $request->pangkat_golongan_ruang_penilai,
            'jabatan_penilai' => $request->jabatan_penilai,
            'unit_kerja_penilai' => $request->unit_kerja_penilai,
            'nama_atasan_pejabat_penilai' => $request->nama_atasan_pejabat_penilai,
            'nip_atasan_pejabat_penilai' => $request->nip_atasan_pejabat_penilai,
            'pangkat_golongan_ruang_atasan_penilai' => $request->pangkat_golongan_ruang_atasan_penilai,
            'jabatan_atasan_penilai' => $request->jabatan_atasan_penilai,
            'unit_kerja_atasan_penilai' => $request->unit_kerja_atasan_penilai,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data SKP berhasil diubah');

        return back();
    }


    public function updateFormSkp(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $form_skp = FormSkp::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'kategori' => $request->kategori,
            'pegawai_id' => $pegawai_id->id,
            'kegiatan_tugas_jabatan_1' => $request->kegiatan_tugas_jabatan_1,
            'kegiatan_tugas_jabatan_2' => $request->kegiatan_tugas_jabatan_2,
            'ak' => $request->ak,
            'kuant_output_1' => $request->kuant_output_1,
            'kuant_output_2' => $request->kuant_output_2,
            'kual_mutu' => $request->kual_mutu,
            'biaya' => $request->biaya,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Form SKP berhasil diubah');

        return back();
    }


    public function updatePengukuranSkp(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $pengukuran_skp = PengukuranSkp::where('id', $id)->update([
            'pegawai_id' => $pegawai_id->id,
            'kegiatan_tugas_tambahan' => $request->kegiatan_tugas_tambahan,
            'kategori' => $request->kategori,
            'ak_target' => $request->ak_target,
            'target_kuant_output_1' => $request->target_kuant_output_1,
            'target_kuant_output_2' => $request->target_kuant_output_2,
            'target_kual_mutu' => $request->target_kual_mutu,
            'target_biaya' => $request->target_biaya,
            'ak_realisasi' => $request->ak_realisasi,
            'realisasi_kuant_output_1' => $request->realisasi_kuant_output_1,
            'realisasi_kuant_output_2' => $request->realisasi_kuant_output_2,
            'realisasi_kual_mutu' => $request->realisasi_kual_mutu,
            'realisasi_biaya' => $request->realisasi_biaya,
            'penghitungan' => $request->penghitungan,
            'nilai_capaian_skp' => $request->nilai_capaian_skp,
            'total_ak_target' => $request->total_ak_target,
            'total_target_kuant_output_1' => $request->total_target_kuant_output_1,
            'total_target_kuant_output_2' => $request->total_target_kuant_output_2,
            'total_target_kual_mutu' => $request->total_target_kual_mutu,
            'total_target_biaya' => $request->total_target_biaya,
            'total_ak_realisasi' => $request->total_ak_realisasi,
            'total_realisasi_kuant_output_1' => $request->total_realisasi_kuant_output_1,
            'total_realisasi_kuant_output_2' => $request->total_realisasi_kuant_output_2,
            'total_realisasi_kual_mutu' => $request->total_realisasi_kual_mutu,
            'total_realisasi_biaya' => $request->total_realisasi_biaya,
            'total_penghitungan' => $request->total_penghitungan,
            'total_nilai_capaian_skp_1' => $request->total_nilai_capaian_skp_1,
            'total_nilai_capaian_skp_2' => $request->total_nilai_capaian_skp_2,
            'total_nilai_capaian_skp_3' => $request->total_nilai_capaian_skp_3,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Pengukuran SKP berhasil diubah');

        return back();
    }


    public function updatePerilakuKerjaSkp(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $perilaku_kerja_skp = PerilakuKerjaSkp::where('id', $id)->update([
            'pegawai_id' => $pegawai_id->id,
            'orientasi_pelayanan' => $request->orientasi_pelayanan,
            'integritas' => $request->integritas,
            'komitmen' => $request->komitmen,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'kepemimpinan' => $request->kepemimpinan,
            'jumlah' => $request->jumlah,
            'rata_rata' => $request->rata_rata,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Perilaju Kerja SKP berhasil diubah');

        return back();
    }


    public function updatePenilaianSkp(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $penilaian_skp = PenilaianSkp::where('id', $id)->update([
            'pegawai_id' => $pegawai_id->id,
            'sasaran_kerja_pegawai' => $request->sasaran_kerja_pegawai,
            'orientasi_pelayanan' => $request->orientasi_pelayanan,
            'integritas' => $request->integritas,
            'komitmen' => $request->komitmen,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'kepemimpinan' => $request->kepemimpinan,
            'jumlah' => $request->jumlah,
            'rata_rata' => $request->rata_rata,
            'nilai_perilaku_kerja' => $request->nilai_perilaku_kerja,
            'jumlah_sasaran_kerja_pegawai' => $request->jumlah_sasaran_kerja_pegawai,
            'jumlah_orientasi_pelayanan' => $request->jumlah_orientasi_pelayanan,
            'jumlah_integritas' => $request->jumlah_integritas,
            'jumlah_komitmen' => $request->jumlah_komitmen,
            'jumlah_disiplin' => $request->jumlah_disiplin,
            'jumlah_kerjasama' => $request->jumlah_kerjasama,
            'jumlah_kepemimpinan' => $request->jumlah_kepemimpinan,
            'jumlah_jumlah' => $request->jumlah_jumlah,
            'jumlah_rata_rata' => $request->jumlah_rata_rata,
            'jumlah_nilai_perilaku_kerja' => $request->jumlah_nilai_perilaku_kerja,
            'nilai_prestasi_kerja_1' => $request->nilai_prestasi_kerja_1,
            'nilai_prestasi_kerja_2' => $request->nilai_prestasi_kerja_2,
            'keberatan_pegawai' => $request->keberatan_pegawai,
            'tanggal_keberatan_pegawai' => $request->tanggal_keberatan_pegawai,
            'tanggapan_pejabat' => $request->tanggapan_pejabat,
            'tanggal_tanggapan_pejabat' => $request->tanggal_tanggapan_pejabat,
            'keputusan_atasan_pejabat' => $request->keputusan_atasan_pejabat,
            'tanggal_keputusan_atasan_pejabat' => $request->tanggal_keputusan_atasan_pejabat,
            'rekomendasi' => $request->rekomendasi,
            'dibuat_tanggal_pejabat_penilai' => $request->dibuat_tanggal_pejabat_penilai,
            'diterima_tanggal_pegawai' => $request->diterima_tanggal_pegawai,
            'diterima_tanggal_atasan_pejabat_penilai' => $request->diterima_tanggal_atasan_pejabat_penilai,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data Penilaian SKP berhasil diubah');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySkp($id)
    {
        $skp = Skp::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data SKP berhasil dihapus');

        return back(); 
    }

    public function destroyFormSkp($id)
    {
        $form_skp = FormSkp::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data SKP berhasil dihapus');

        return back(); 
    }

    public function destroyPengukuranSkp($id)
    {
        $pengukuran_spk = PengukuranSkp::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data Pengukuran SPK berhasil dihapus');

        return back(); 
    }


    public function destroyPerilakuKerjaSkp($id)
    {
        $perilaku_kerja_skp = PerilakuKerjaSkp::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data Perilaku Kerja SPK berhasil dihapus');

        return back(); 
    }


    public function destroyPenilaianSkp($id)
    {
        $penilaian_skp = PenilaianSkp::where('id', $id)->delete();
   
        \Session::flash('Berhasil', 'Data Penilaian SPK berhasil dihapus');

        return back(); 
    }
}
