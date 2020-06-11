<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JabatanFungsional;
use App\Pegawai;

class riwayatJabatanFungsionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayat_jabatan_fungsional = JabatanFungsional::get();

        return view('riwayat_jabatan_fungsional', compact('riwayat_jabatan_fungsional'));
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
        $pegawai = Pegawai::max('id');

        $riwayat_jabatan_fungsional = JabatanFungsional::insert([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'eselon' => $request->eselon,
            'nama_jabatan' => $request->nama_jabatan,
            'tmt_kerja' => $request->tmt_kerja,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'penjabat_penandatangan_sk' => $request->penjabat_penandatangan_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat jabatan fungsional berhasil ditambahkan');

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
        $pegawai = Pegawai::max('id');

        $riwayat_jabatan_fungsional = JabatanFungsional::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id,
            'eselon' => $request->eselon,
            'nama_jabatan' => $request->nama_jabatan,
            'tmt_kerja' => $request->tmt_kerja,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'penjabat_penandatangan_sk' => $request->penjabat_penandatangan_sk,
            'active' => $request->input('active', 1),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Session::flash('Berhasil', 'Data riwayat jabatan fungsional berhasil diubah');

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
        $riwayat_jabatan_fungsional = JabatanFungsional::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data riwayat jabatan fungsional berhasil dihapus');

        return back();
    }
}
