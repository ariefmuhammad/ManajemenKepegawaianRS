<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\JabatanStruktural;

class riwayatJabatanStrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $riwayat_jabatan_struktural = JabatanStruktural::where('active', '1')->get();

        return view('riwayat_jabatan_struktural', compact(['riwayat_jabatan_struktural', 'pegawai_id']));
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
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $riwayat_jabatan_struktural = JabatanStruktural::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'eselon' => $request->eselon,
            'nama_jabatan' => $request->nama_jabatan,
            'unit_kerja' => $request->unit_kerja,
            'tmt_jabatan' => $request->tmt_jabatan,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data riwayat jabatan struktural berhasil ditambahkan');

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
    public function update(Request $request, $id)
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $riwayat_jabatan_struktural = JabatanStruktural::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'eselon' => $request->eselon,
            'nama_jabatan' => $request->nama_jabatan,
            'unit_kerja' => $request->unit_kerja,
            'tmt_jabatan' => $request->tmt_jabatan,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'pejabat_penandatangan_sk' => $request->pejabat_penandatangan_sk,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data riwayat jabatan struktural berhasil diubah');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riwayat_jabatan_struktural = JabatanStruktural::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data riwayat jabatan struktural berhasil dihapus');

        return back();
    }
}
