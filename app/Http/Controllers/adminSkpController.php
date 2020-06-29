<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periode;
use App\Pegawai;
use App\Skp;
use App\FormSkp;
use App\PenilaianSkp;
use App\PengukuranSkp;
use App\PerilakuKerjaSkp;

class adminSkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['periode'] = Periode::orderBy('id','DESC')->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        if ($data['periode']->periode === 'Semester 1') {
            $semester = 'semester1';
        } else if ($data['periode']->periode === 'Semester 2'){
            $semester = 'semester2';
        } else {
            $semester = 'setahun';
        }
        // $skp = Skp::where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->get()->unique('pegawai_id');
        foreach ($pegawai as $key => $value_pegawai) {
            $skp = $value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $formSkp = $value_pegawai->formSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $pengukuranSkp = $value_pegawai->pengukuranSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $penilaianSkp = $value_pegawai->penilaianSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $perilakuKerjaSkp = $value_pegawai->perilakuKerjaSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            // dd(count($skp));
            if (count($skp) === 0 || count($formSkp) === 0 || count($pengukuranSkp) === 0 || count($penilaianSkp) === 0 || count($perilakuKerjaSkp) === 0) {
                $data['tidak_lengkap'][] = $value_pegawai;
            } else {
                    //do nothing
                    // dd($value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode));
            }
        }

        return view('admin/skp/index',$data);
    }

    public function filter_belum(Request $request)
    {
        //
        if ($request->kategori === 'semester1') {
            $periodeSemester = 'Semester 1';
        } else if ($request->kategori === 'semester2'){
            $periodeSemester = 'Semester 2';
        } else {
            $periodeSemester = 'Setahun';
        }
        $data['periode'] = Periode::where('tahun',$request->tahun)->where('periode',$periodeSemester)->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        if ($data['periode']->periode === 'Semester 1') {
            $semester = 'semester1';
        } else if ($data['periode']->periode === 'Semester 2'){
            $semester = 'semester2';
        } else {
            $semester = 'setahun';
        }
        foreach ($pegawai as $key => $value_pegawai) {
            $skp = $value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $formSkp = $value_pegawai->formSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $pengukuranSkp = $value_pegawai->pengukuranSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $penilaianSkp = $value_pegawai->penilaianSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $perilakuKerjaSkp = $value_pegawai->perilakuKerjaSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            // dd(count($skp));
            if (count($skp) === 0 || count($formSkp) === 0 || count($pengukuranSkp) === 0 || count($penilaianSkp) === 0 || count($perilakuKerjaSkp) === 0) {
                $data['tidak_lengkap'][] = $value_pegawai;
            } else {
                    //do nothing
                    // dd($value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode));
            }
        }

        return view('admin/skp/index',$data);
    }

    public function sudah()
    {
        //
        $data['periode'] = Periode::orderBy('id','DESC')->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        if ($data['periode']->periode === 'Semester 1') {
            $semester = 'semester1';
        } else if ($data['periode']->periode === 'Semester 2'){
            $semester = 'semester2';
        } else {
            $semester = 'setahun';
        }
        foreach ($pegawai as $key => $value_pegawai) {
            $skp = $value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $formSkp = $value_pegawai->formSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $pengukuranSkp = $value_pegawai->pengukuranSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $penilaianSkp = $value_pegawai->penilaianSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $perilakuKerjaSkp = $value_pegawai->perilakuKerjaSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            // dd(count($skp));
            if (count($skp) === 0 || count($formSkp) === 0 || count($pengukuranSkp) === 0 || count($penilaianSkp) === 0 || count($perilakuKerjaSkp) === 0) {
                // do nothing
            } else {
                $data['lengkap'][] = $value_pegawai;
            }
        }

        return view('admin/skp/sudah',$data);
    }

    public function filter_sudah(Request $request)
    {
        //
        if ($request->kategori === 'semester1') {
            $periodeSemester = 'Semester 1';
        } else if ($request->kategori === 'semester2'){
            $periodeSemester = 'Semester 2';
        } else {
            $periodeSemester = 'Setahun';
        }
        $data['periode'] = Periode::where('tahun',$request->tahun)->where('periode',$periodeSemester)->first();
        $data['tahun'] = Periode::pluck('tahun')->unique();
        $pegawai = Pegawai::where('active','1')->orderBy('id','DESC')->get();
        if ($data['periode']->periode === 'Semester 1') {
            $semester = 'semester1';
        } else if ($data['periode']->periode === 'Semester 2'){
            $semester = 'semester2';
        } else {
            $semester = 'setahun';
        }
        foreach ($pegawai as $key => $value_pegawai) {
            $skp = $value_pegawai->skp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $formSkp = $value_pegawai->formSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $pengukuranSkp = $value_pegawai->pengukuranSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $penilaianSkp = $value_pegawai->penilaianSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            $perilakuKerjaSkp = $value_pegawai->perilakuKerjaSkp->where('active','1')->where('tahun',$data['periode']->tahun)->where('kategori',$data['periode']->periode)->unique('pegawai_id');
            // dd(count($skp));
            if (count($skp) === 0 || count($formSkp) === 0 || count($pengukuranSkp) === 0 || count($penilaianSkp) === 0 || count($perilakuKerjaSkp) === 0) {
                // do nothing
            } else {
                $data['lengkap'][] = $value_pegawai;
            }
        }

        return view('admin/skp/sudah',$data);
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
}
