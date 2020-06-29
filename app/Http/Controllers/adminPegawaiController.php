<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\User;
use App\PendidikanFormal;
use App\DiklatFungsional;
use App\DiklatPenjenjangan;
use App\DiklatTeknis;
use App\Kepangkatan;
use App\JabatanStruktural;
use App\JabatanFungsional;
use App\PekerjaanJabatan;
use App\IstriSuami;
use App\Anak;
use App\Seminar;
use App\Penghargaan;
Use App\Hukuman;
use App\Organisasi;
use App\KeluargaKandung;
use App\KeluargaIstriSuami;
use App\Ruangan;
use App\Periode;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class adminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['ruangan'] = Ruangan::where('active','1')->get();
        $data['pegawai'] = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        return view('admin/pegawai/index',$data);
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
    public function store(Request $request)
    {
        //
        $spasi = '';
        $spasi2 = '';
        if ($request->gelar_depan != null) {
            $spasi = '. ';
        }
        if($request->gelar_belakang !=null) {
            $spasi2 = ', ';
        }
        $nama = $request->gelar_depan.$spasi.$request->nama.$spasi2.$request->gelar_belakang;
        $lahir = explode("-",$request->tanggal_lahir);
        $lahir = $lahir[2].$lahir[1].$lahir[0];
        $password = Hash::make($lahir);
        User::create([
            'name' => $nama,
            'email' => $request->email,
            'password' => $password
        ]);
        $newuser = User::where('email',$request->email)->first();
        Pegawai::create([
            'nama_pegawai' => $request->nama,
            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang'=> $request->gelar_belakang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'user_id' => $newuser->id,
            'ruangan_id' => $request->ruangan
        ]);

        $pesan = 'User baru telah dibuat. Silahkan memberitahu pegawai untuk login dengan email <b>'.$newuser->email.'</b> dan dengan password tanggal lahir(<b>'.$lahir.'</b>) untuk melengkapi data dasar.';

        Session::flash('Berhasil', $pesan);

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
        //dasar
        $data['ruangan'] = Ruangan::where('active','1')->get();
        $data['pegawai'] = Pegawai::findOrFail($id);
        $data['pegawai']['masa_rkk'] = date("d F Y", strtotime($data['pegawai']['masa_rkk']));
        $data['pegawai']['masa_spk'] = date("d F Y", strtotime($data['pegawai']['masa_spk']));
        $data['pegawai']['masa_sikp'] = date("d F Y", strtotime($data['pegawai']['masa_sikp']));
        $data['pegawai']['masa_str'] = date("d F Y", strtotime($data['pegawai']['masa_str']));
        $data['pegawai']['tmt_golongan'] = date("d F Y", strtotime($data['pegawai']['tmt_golongan']));
        $data['pegawai']['tmt_cpns'] = date("d F Y", strtotime($data['pegawai']['tmt_cpns']));
        $data['pegawai']['tanggal_lahir'] = date("d F Y", strtotime($data['pegawai']['tanggal_lahir']));
        if ($data['pegawai']['jenis_kelamin'] === "W") {
            $data['pegawai']['jenis_kelamin'] = "Perempuan";
        } else {
            $data['pegawai']['jenis_kelamin'] = "Laki-Laki";
        }
        if ($data['pegawai']['status_keluarga'] === "K"){
            $data['pegawai']['status_keluarga'] = "Sudah Menikah";
        } else if ($data['pegawai']['status_keluarga'] === "B"){
            $data['pegawai']['status_keluarga'] = "Belum Menikah";
        } else if ($data['pegawai']['status_keluarga'] === "D"){
            $data['pegawai']['status_keluarga'] = "Duda";
        } else {
            $data['pegawai']['status_keluarga'] = "Janda";
        }
        if ($data['pegawai']['agama'] === "1"){
            $data['pegawai']['agama'] = "Islam";
        } else if ($data['pegawai']['agama'] === "2"){
            $data['pegawai']['agama'] = "Katholik";
        } else if ($data['pegawai']['agama'] === "3"){
            $data['pegawai']['agama'] = "Protestan";
        } else if ($data['pegawai']['agama'] === "4"){
            $data['pegawai']['agama'] = "Hindu";
        } else if ($data['pegawai']['agama'] === "5"){
            $data['pegawai']['agama'] = "Budha";
        } else {
            $data['pegawai']['agama'] = "Protestan";
        }
        if ($data['pegawai']['status_kepegawaian'] === "1"){
            $data['pegawai']['status_kepegawaian'] = "CPNS";
        } else if ($data['pegawai']['status_kepegawaian'] === "2"){
            $data['pegawai']['status_kepegawaian'] = "PNS";
        } else if ($data['pegawai']['status_kepegawaian'] === "3"){
            $data['pegawai']['status_kepegawaian'] = "PNS DPK dari DEP.LAIN";
        } else {
            $data['pegawai']['status_kepegawaian'] = "PNS DPK ke DEP.LAIN";
        }
        if ($data['pegawai']['taspen'] === "1"){
            $data['pegawai']['taspen'] = "Sudah";
        }else {
            $data['pegawai']['taspen'] = "Belum";
        }

        //riwayat pendidikan formal
        $data['pendidikan_formal'] = PendidikanFormal::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['pendidikan_formal'] as $key => $value) {
            if ($value['tingkat_pendidikan'] === "01") {
                $value['tingkat_pendidikan'] = "S3 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "02") {
                $value['tingkat_pendidikan'] = "S2 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "03") {
                $value['tingkat_pendidikan'] = "S1 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "04") {
                $value['tingkat_pendidikan'] = "D4";
            } else if ($value['tingkat_pendidikan'] === "05") {
                $value['tingkat_pendidikan'] = "SM";
            } else if ($value['tingkat_pendidikan'] === "06") {
                $value['tingkat_pendidikan'] = "D3";
            } else if ($value['tingkat_pendidikan'] === "07") {
                $value['tingkat_pendidikan'] = "D2";
            } else if ($value['tingkat_pendidikan'] === "08") {
                $value['tingkat_pendidikan'] = "D1";
            } else if ($value['tingkat_pendidikan'] === "09") {
                $value['tingkat_pendidikan'] = "SLTA";
            } else if ($value['tingkat_pendidikan'] === "10") {
                $value['tingkat_pendidikan'] = "SLTP";
            } else {
                $value['tingkat_pendidikan'] = "SD";
            }
            if ($value['tempat_belajar'] === "1") {
                $value['tempat_belajar'] = "Dalam Negeri";
            } else {
                $value['tempat_belajar'] = "Luar Negeri";
            }
        }


        //riwayat diklat fungsional
        $data['diklat_fungsional'] = DiklatFungsional::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['diklat_fungsional'] as $key => $value) {
            if ($value['tempat_belajar'] === "1") {
                $value['tempat_belajar'] = "Dalam Negeri";
            } else {
                $value['tempat_belajar'] = "Luar Negeri";
            }
            $value['tanggal_mulai'] = date("d F Y", strtotime($value['tanggal_mulai']));
            $value['tanggal_selesai'] = date("d F Y", strtotime($value['tanggal_selesai']));
        }

        //riwayat diklat perjenjangan
        $data['diklat_penjenjangan'] = DiklatPenjenjangan::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['diklat_penjenjangan'] as $key => $value) {
            if ($value['jenis_diklat'] === "1") {
                $value['jenis_diklat'] = "Diklatpim Tk I";
            } else if ($value['jenis_diklat'] === "2"){
                $value['jenis_diklat'] = "Diklatpim Tk II";
            } else if ($value['jenis_diklat'] === "3"){
                $value['jenis_diklat'] = "Diklatpim Tk III";
            } else if ($value['jenis_diklat'] === "4"){
                $value['jenis_diklat'] = "Diklatpim Tk IV";
            } else {
                $value['jenis_diklat'] = "Diklat Lain Yang Setara";
            }
            $value['tanggal_mulai'] = date("d F Y", strtotime($value['tanggal_mulai']));
            $value['tanggal_selesai'] = date("d F Y", strtotime($value['tanggal_selesai']));
        }

        //riwayat diklat teknis
        $data['diklat_teknis'] = DiklatTeknis::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['diklat_teknis'] as $key => $value) {
            if ($value['tempat_belajar'] === "1") {
                $value['tempat_belajar'] = "Dalam Negeri";
            } else {
                $value['tempat_belajar'] = "Luar Negeri";
            }
            $value['tanggal_mulai'] = date("d F Y", strtotime($value['tanggal_mulai']));
            $value['tanggal_selesai'] = date("d F Y", strtotime($value['tanggal_selesai']));
        }

        //riwayat kepangkatan
        $data['kepangkatan'] = Kepangkatan::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['kepangkatan'] as $key => $value) {
            $value['tmt_golongan'] = date("d F Y", strtotime($value['tmt_golongan']));
            $value['tanggal_sk'] = date("d F Y", strtotime($value['tanggal_sk']));
        }

        //riwayat jabatan struktural
        $data['jabatan_struktural'] = JabatanStruktural::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['jabatan_struktural'] as $key => $value) {
            $value['tmt_jabatan'] = date("d F Y", strtotime($value['tmt_jabatan']));
            $value['tanggal_sk'] = date("d F Y", strtotime($value['tanggal_sk']));
        }

        //riwayat jabatan fungsional
        $data['jabatan_fungsional'] = JabatanFungsional::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['jabatan_fungsional'] as $key => $value) {
            $value['tmt_jabatan'] = date("d F Y", strtotime($value['tmt_jabatan']));
            $value['tanggal_sk'] = date("d F Y", strtotime($value['tanggal_sk']));
        }

        //pekerjaan jabatan
        $data['pekerjaan_jabatan'] = PekerjaanJabatan::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['pekerjaan_jabatan'] as $key => $value) {
            $value['tmt_jabatan'] = date("d F Y", strtotime($value['tmt_jabatan']));
            $value['tanggal_sk'] = date("d F Y", strtotime($value['tanggal_sk']));
        }

        //istri suami
        $data['istri_suami'] = IstriSuami::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['istri_suami'] as $key => $value) {
            $value['tanggal_lahir'] = date("d F Y", strtotime($value['tanggal_lahir']));
            $value['tanggal_nikah'] = date("d F Y", strtotime($value['tanggal_nikah']));
            if ($value['tingkat_pendidikan'] === "01") {
                $value['tingkat_pendidikan'] = "S3 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "02") {
                $value['tingkat_pendidikan'] = "S2 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "03") {
                $value['tingkat_pendidikan'] = "S1 (Setara)";
            } else if ($value['tingkat_pendidikan'] === "04") {
                $value['tingkat_pendidikan'] = "D4";
            } else if ($value['tingkat_pendidikan'] === "05") {
                $value['tingkat_pendidikan'] = "SM";
            } else if ($value['tingkat_pendidikan'] === "06") {
                $value['tingkat_pendidikan'] = "D3";
            } else if ($value['tingkat_pendidikan'] === "07") {
                $value['tingkat_pendidikan'] = "D2";
            } else if ($value['tingkat_pendidikan'] === "08") {
                $value['tingkat_pendidikan'] = "D1";
            } else if ($value['tingkat_pendidikan'] === "09") {
                $value['tingkat_pendidikan'] = "SLTA";
            } else if ($value['tingkat_pendidikan'] === "10") {
                $value['tingkat_pendidikan'] = "SLTP";
            } else {
                $value['tingkat_pendidikan'] = "SD";
            }
            if ($value['status_suami_istri'] === "1") {
                if ($data['pegawai']['jenis_kelamin'] === "Perempuan") {
                    $value['status_suami_istri'] = "Suami Saat ini";
                } else {
                    $value['status_suami_istri'] = "Istri Saat ini";
                }
            } else if ($value['status_suami_istri'] === "2") {
                $value['status_suami_istri'] = "Telah Meninggal Dunia";
            } else {
                $value['status_suami_istri'] = "Cerai";
            }
        }

        //anak
        $data['anak'] = Anak::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['anak'] as $key => $value) {
            if ($value['jenis_kelamin'] === "W") {
                $value['jenis_kelamin'] = "Perempuan";
            } else {
                $value['jenis_kelamin'] = "Laki-Laki";
            }
            $value['tanggal_lahir'] = date("d F Y", strtotime($value['tanggal_lahir']));
            if ($value['anak'] === "1") {
                $value['anak'] = "Anak Kandung";
            } else if ($value['anak'] === "2") {
                $value['anak'] = "Anak Tiri";
            } else {
                $value['anak'] = "Anak Angkat";
            }
            if ($value['pendidikan'] === "01") {
                $value['pendidikan'] = "S3 (Setara)";
            } else if ($value['pendidikan'] === "02") {
                $value['pendidikan'] = "S2 (Setara)";
            } else if ($value['pendidikan'] === "03") {
                $value['pendidikan'] = "S1 (Setara)";
            } else if ($value['pendidikan'] === "04") {
                $value['pendidikan'] = "D4";
            } else if ($value['pendidikan'] === "05") {
                $value['pendidikan'] = "SM";
            } else if ($value['pendidikan'] === "06") {
                $value['pendidikan'] = "D3";
            } else if ($value['pendidikan'] === "07") {
                $value['pendidikan'] = "D2";
            } else if ($value['pendidikan'] === "08") {
                $value['pendidikan'] = "D1";
            } else if ($value['pendidikan'] === "09") {
                $value['pendidikan'] = "SLTA";
            } else if ($value['pendidikan'] === "10") {
                $value['pendidikan'] = "SLTP";
            } else if ($value['pendidikan'] === "11") {
                $value['pendidikan'] = "SD";
            } else {
                $value['pendidikan'] = "Belum Sekolah";
            }
        }

        //seminar
        $data['seminar'] = Seminar::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['seminar'] as $key => $value) {
            if ($value['tempat_kegiatan'] === "1") {
                $value['tempat_kegiatan'] = "Dalam Negeri";
            } else {
                $value['tempat_kegiatan'] = "Luar Negeri";
            }
            if ($value['kedudukan_dalam_seminar'] === "1") {
                $value['kedudukan_dalam_seminar'] = "Peserta";
            } else if ($value['kedudukan_dalam_seminar'] === "2") {
                $value['kedudukan_dalam_seminar'] = "Moderator";
            } else if ($value['kedudukan_dalam_seminar'] === "3") {
                $value['kedudukan_dalam_seminar'] = "Pembahas";
            } else if ($value['kedudukan_dalam_seminar'] === "4") {
                $value['kedudukan_dalam_seminar'] = "Pembawa Makalah";
            } else {
                $value['kedudukan_dalam_seminar'] = "Panitia";
            }
        }

        //penghargaan
        $data['penghargaan'] = Penghargaan::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['penghargaan'] as $key => $value) {
            $value['tanggal_perolehan'] = date("d F Y", strtotime($value['tanggal_perolehan']));
        }

        //hukuman
        $data['hukuman'] = Hukuman::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['hukuman'] as $key => $value) {
            if ($value['kode_hukuman'] === "11") {
                $value['kode_hukuman'] = "11 (Hukuman Ringan Teguran Lisan)";
            } else if ($value['kode_hukuman'] === "12") {
                $value['kode_hukuman'] = "12 (Hukuman Ringan Teguran Tertulis)";
            } else if ($value['kode_hukuman'] === "13") {
                $value['kode_hukuman'] = "13 (Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis)";
            } else if ($value['kode_hukuman'] === "21") {
                $value['kode_hukuman'] = "21 (Hukuman Sedang Penundaan Kenaikan Gaji Berkala Paling Lama 1 Tahun)";
            } else if ($value['kode_hukuman'] === "22") {
                $value['kode_hukuman'] = "22 (Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun)";
            } else if ($value['kode_hukuman'] === "23") {
                $value['kode_hukuman'] = "23 (Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun)";
            } else if ($value['kode_hukuman'] === "31") {
                $value['kode_hukuman'] = "31 (Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun)";
            } else {
                $value['kode_hukuman'] = "32 (Hukuman Berat Pembebasan Dari Jabatan)";
            }
            $value['tanggal_sk'] = date("d F Y", strtotime($value['tanggal_sk']));
            $value['tmt_berlaku'] = date("d F Y", strtotime($value['tmt_berlaku']));
        }

        //organisasi
        $data['organisasi'] = Organisasi::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['organisasi'] as $key => $value) {
            $value['tanggal_mulai'] = date("d F Y", strtotime($value['tanggal_mulai']));
            $value['tanggal_selesai'] = date("d F Y", strtotime($value['tanggal_selesai']));
        }

        //keluarga kandung
        $data['keluarga_kandung'] = KeluargaKandung::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['keluarga_kandung'] as $key => $value) {
            if ($value['hubungan'] === "1") {
                $value['hubungan'] = "Ayah";
            } else if ($value['hubungan'] === "2") {
                $value['hubungan'] = "Ibu";
            } else if ($value['hubungan'] === "3") {
                $value['hubungan'] = "Kakak";
            } else {
                $value['hubungan'] = "Adik";
            }
            if ($value['jenis_kelamin'] === "P") {
                $value['jenis_kelamin'] = "Perempuan";
            } else {
                $value['jenis_kelamin'] = "Laki-Laki";
            }
            $value['tanggal_lahir'] = date("d F Y", strtotime($value['tanggal_lahir']));
            if ($value['kondisi'] === "1") {
                $value['kondisi'] = "Masih Hidup";
            } else {
                $value['kondisi'] = "Almarhum";
            }
        }

        //keluarga istri suami
        $data['keluarga_istri_suami'] = KeluargaIstriSuami::where('pegawai_id',$id)->where('active','1')->orderBy('id','DESC')->get();
        foreach ($data['keluarga_istri_suami'] as $key => $value) {
            if ($value['hubungan'] === "1") {
                $value['hubungan'] = "Ayah";
            } else if ($value['hubungan'] === "2") {
                $value['hubungan'] = "Ibu";
            } else if ($value['hubungan'] === "3") {
                $value['hubungan'] = "Kakak";
            } else {
                $value['hubungan'] = "Adik";
            }
            if ($value['jenis_kelamin'] === "P") {
                $value['jenis_kelamin'] = "Perempuan";
            } else {
                $value['jenis_kelamin'] = "Laki-Laki";
            }
            $value['tanggal_lahir'] = date("d F Y", strtotime($value['tanggal_lahir']));
            if ($value['kondisi'] === "1") {
                $value['kondisi'] = "Masih Hidup";
            } else {
                $value['kondisi'] = "Almarhum";
            }
        }

        return view('admin/pegawai/show',$data);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function skp($id){
        $data['ruangan'] = Ruangan::where('active','1')->get();
        $data['pegawai'] = Pegawai::findOrFail($id);
        $data['periode'] = Periode::orderBy('id','DESC')->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $data['noFormSkp'] = 0;
        $data['noPengukuranSkp'] = 0;
        $data['skp'] = $data['pegawai']
                        ->skp
                        ->where('active','1')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode)
                        ->first();
        $data['formSkp'] = $data['pegawai']
                        ->formSkp
                        ->where('active','1')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['pengukuranSkp'] = $data['pegawai']
                        ->pengukuranSkp
                        ->where('active','1')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['pengukuranSkp_kegiatan_tugas_tambahan'] = $data['pegawai']
                        ->pengukuranSkp
                        ->where('active','1')
                        ->where('kategori_pengukuran','Kegiatan Tugas Tambahan')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['pengukuranSkp_kreativitas'] = $data['pegawai']
                        ->pengukuranSkp
                        ->where('active','1')
                        ->where('kategori_pengukuran','Kreativitas')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['pengukuranSkp_tugas_tambahan'] = $data['pegawai']
                        ->pengukuranSkp
                        ->where('active','1')
                        ->where('kategori_pengukuran','Tugas Tambahan')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['penilaianSkp'] = $data['pegawai']
                        ->penilaianSkp
                        ->where('active','1')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['perilakuKerjaSkp'] = $data['pegawai']
                        ->perilakuKerjaSkp
                        ->where('active','1')
                        ->where('tahun',$data['periode']->tahun)
                        ->where('kategori',$data['periode']->periode);
        $data['countFormSkp'] = count($data['formSkp']);
        $data['countPengukuranSkp'] = count($data['pengukuranSkp']);
        $data['countPengukuranSkp_kegiatan_tugas_tambahannSkp'] = count($data['pengukuranSkp_kegiatan_tugas_tambahan']);
        $data['countPengukuranSkp_kreativitas'] = count($data['pengukuranSkp_kreativitas']);
        $data['countPengukuranSkp_tugas_tambahan'] = count($data['pengukuranSkp_tugas_tambahan']);
        $data['countPenilaianSkp'] = count($data['penilaianSkp']);
        $data['countPerilakuKerjaSkp'] = count($data['perilakuKerjaSkp']);
        foreach ($data['pengukuranSkp'] as $key => $value) {
            $value['penghitungan'] = ;
            // $value['capaianSkp'] = ;
            // $data['totalKegiatan'] = ;
            // $data['totalAkTarget'] = ;
            // $data['totalKuantTarget1'] = ;
            // $data['totalKuantTarget2'] = ;
            // $data['totalKualTarget'] = ;
            // $data['totalBiayaTarget'] = ;
            // $data['totalAkRealisasi'] = ;
            // $data['totalKuantRealisasi1'] = ;
            // $data['totalKuantRealisasi2'] = ;
            // $data['totalKualRealisasi'] = ;
            // $data['totalBiayaRealisasi'] = ;
            // $data['totalPenghitungan'] = ;
            // $data['totalSkp'] = ;
        }
        // dd($data['formSkp']);
        return view('admin/pegawai/skp',$data);
    }
}
