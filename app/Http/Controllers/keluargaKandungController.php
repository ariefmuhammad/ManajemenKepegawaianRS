<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\KeluargaKandung;

class keluargaKandungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $keluarga_kandung = KeluargaKandung::where('active', '1')->get();

        return view('keluarga_kandung', compact('keluarga_kandung', 'pegawai_id'));
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

        $keluarga_kandung = KeluargaKandung::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kondisi' => $request->kondisi,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data keluarga kandung berhasil ditambahkan');

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

        $keluarga_kandung = KeluargaKandung::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'pekerjaan' => $request->pekerjaan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kondisi' => $request->kondisi,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data keluarga kandung berhasil diubah');

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
        $keluarga_kandung = KeluargaKandung::where('id', $id)->delete();

        \Session::flash('Berhasil', 'Data keluarga kandung berhasil dihapus');

        return back();
    }
}
