<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-id-card icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Dasar Pegawai
                                        <div class="page-title-subheading">Isi data dasar pegawai anda disini.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                </div>    
                            </div>
                        </div>
                         
                        @include('pesan')
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
                                
                            </div>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                @if(empty($pegawai_id))
                                    <div class="card-body"><h5 class="card-title">Masukan Data Dasar Pegawai</h5>
                                @elseif(!empty($pegawai_id))
                                    <div class="card-body"><h5 class="card-title">Data Dasar Pegawai Anda</h5>
                                @endif

                                    @if(empty($pegawai_id))
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                        </button>
                                    @endif

                                        @foreach($pegawai as $key => $pegawais)
                                                @if(auth()->user()->id == $pegawais->user_id)
                                                <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$pegawais->id}}"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Update Data
                                                </button>
                                              
                                                <table class="mb-0 table table-striped">
        <tbody>
            <tr>
                <th scope="row" class="sidetable">ESELON I</th>
                <td><b>{{$pegawais->eselon_1}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON II</th>
                <td><b>{{$pegawais->eselon_2}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON III</th>
                <td><b>{{$pegawais->eselon_3}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ESELON IV</th>
                <td><b>{{$pegawais->eselon_4}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP BARU</th>
                <td><b>{{$pegawais->nip_baru}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NIP LAMA</th>
                <td><b>{{$pegawais->nip_lama}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA PEGAWAI</th>
                <td><b>{{$pegawais->nama_pegawai}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR DEPAN</th>
                <td><b>{{$pegawais->gelar_depan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GELAR BELAKANG</th>
                <td><b>{{$pegawais->gelar_belakang}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TEMPAT LAHIR</th>
                <td><b>{{$pegawais->tempat_lahir}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JENIS KELAMIN</th>
                <td><b>@if($pegawais->jenis_kelamin == "P")
                        Pria
                        @elseif($pegawais->jenis_kelamin == "W")
                        Wanita
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KELUARGA</th>
                <td><b>@if($pegawais->status_keluarga == "K")
                        Nikah
                       @elseif($pegawais->status_keluarga == "B")
                        Belum Menikah
                       @elseif($pegawais->status_keluarga == "D")
                        Duda
                       @elseif($pegawais->status_keluarga == "J")
                          Janda
                       @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">AGAMA</th>
                <td><b>@if($pegawais->agama == "1")
                        Islam
                        @elseif($pegawais->agama == "2")
                        Katholik
                        @elseif($pegawais->agama == "3")
                        Protestan
                        @elseif($pegawais->agama == "4")
                        Hindu
                        @elseif($pegawais->agama == "5")
                        Budha
                        @elseif($pegawais->agama == "6")
                        Kristen
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">PENDIDIKAN AKHIR</th>
                <td><b>@if($pegawais->pendidikan_akhir == "01")
                        S3 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "02")
                        S2 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "03")
                        S1 (Setara)
                        @elseif($pegawais->pendidikan_akhir == "04")
                        D4
                        @elseif($pegawais->pendidikan_akhir == "05")
                        SM
                        @elseif($pegawais->pendidikan_akhir == "06")
                        D3
                        @elseif($pegawais->pendidikan_akhir == "07")
                        D2
                        @elseif($pegawais->pendidikan_akhir == "08")
                        D1
                        @elseif($pegawais->pendidikan_akhir == "09")
                        SLTA
                        @elseif($pegawais->pendidikan_akhir == "10")
                        SLTP
                        @elseif($pegawais->pendidikan_akhir == "11")
                        SD
                        @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA SEKOLAH / TAHUN LULUS</th>
                <td><b>{{$pegawais->nama_sekolah}} / {{$pegawais->tahun_lulus}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">JURUSAN / PROGRAM STUDI</th>
                <td><b>{{$pegawais->jurusan_prodi}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">STATUS KEPEGAWAIAN</th>
                <td><b>@if($pegawais->status_kepegawaian == "01")
                       CPNS
                       @elseif($pegawais->status_kepegawaian == "02")
                       PNS
                       @elseif($pegawais->status_kepegawaian == "03")
                       PNS DPK DARI DEP.LAIN
                       @elseif($pegawais->status_kepegawaian == "04")
                       PNS DPK KE DEP.LAIN
                       @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">INSTANSI ASAL</th>
                <td><b>{{$pegawais->instansi_asal}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT CALON PEGAWAI NEGERI SIPIL</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tmt_cpns)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">GOLONGAN / RUANG TERAKHIR</th>
                <td><b>{{$pegawais->golongan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TMT GOLONGAN</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NAMA JABATAN</th>
                <td><b>{{$pegawais->nama_jabatan}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR KARPEG</th>
                <td><b>{{$pegawais->nomor_karpeg}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">TASPEN</th>
                <td><b>@if($pegawais->taspen == "1")
                                                Sudah
                                                @elseif($pegawais->taspen == "2")
                                                Belum
                                                @endif</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR NPWP</th>
                <td><b>{{$pegawais->nomor_npwp}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">ALAMAT RUMAH</th>
                <td><b>{{$pegawais->alamat_rumah}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KOTA</th>
                <td><b>{{$pegawais->kota}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">KODE POS</th>
                <td><b>{{$pegawais->kode_pos}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR TELEPON</th>
                <td>
                    @if ($pegawais->telepon->first())
                        <b>{{$pegawais->telepon->first()->telepon}}</b>
                    @else
                        <b></b>
                    @endif
                </td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR STR (SURAT TANDA REGISTRASI)</th>
                <td><b>{{$pegawais->str}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU STR</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SIKP (SURAT IZIN KERJA PERAWAT)</th>
                <td><b>{{$pegawais->sikp}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SIKP</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR SPK (SURAT PENUGASAAN KEWENANGAN KLINIS)</th>
                <td><b>{{$pegawais->spk}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU SPK</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">NOMOR RKK (RINCIAN KEWENANGAN KLINIS)</th>
                <td><b>{{$pegawais->rkk}}</b></td>
            </tr>
            <tr>
                <th scope="row" class="sidetable">MASA BERLAKU RKK</th>
                <td><b>{{ date('d/m/Y',strtotime($pegawais->masa_rkk)) }}</b></td>
            </tr>
        </tbody>
    </table>
                                        @endif
                                        @endforeach



                                         @if(empty($pegawai_id))
                                         <div class="card-body"><h5 class="card-title"><center>Data Dasar Pegawai Anda Kosong</center></h5></div>
                                    @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
