<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Anak;

class anakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai_id = Pegawai::where('user_id', Auth()->user()->id)->first();

        $anak = Anak::where('active', '1')->get();

        return view('anak', compact(['anak', 'pegawai_id']));
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

        $anak = Anak::create([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_anak' => $request->status_anak,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data anak berhasil ditambah');

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

        $anak = Anak::where('id', $id)->update([
            'tahun' => $request->input('tahun', 2020),
            'pegawai_id' => $pegawai_id->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_anak' => $request->status_anak,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'active' => $request->input('active', 1),
        ]);

        \Session::flash('Berhasil', 'Data anak berhasil diubah');

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
        $anak = Anak::where('id', $id)->delete();
        
        \Session::flash('Berhasil', 'Data anak berhasil dihapus');

        return back();

    }
}
