<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-dasar_pegawai')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>


@foreach($pegawai as $pegawais)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$pegawais->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon I :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_1}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon II :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_2}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon III :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_3}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon IV :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_4}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>NIP Baru :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nip_baru}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>NIP Lama :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nip_lama}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Pegawai :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_pegawai}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Gelar Depan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->gelar_depan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Gelar Belakang :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->gelar_belakang}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tempat Lahir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->tempat_lahir}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Lahir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Jenis Kelamin :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->jenis_kelamin == "P")
                                                                                    Pria
                                                                                    @elseif($pegawais->jenis_kelamin == "W")
                                                                                    Wanita
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Status Keluarga :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->status_keluarga == "K")
                                                                                    Nikah
                                                                                    @elseif($pegawais->status_keluarga == "B")
                                                                                    Belum Menikah
                                                                                    @elseif($pegawais->status_keluarga == "D")
                                                                                    Duda
                                                                                    @elseif($pegawais->status_keluarga == "J")
                                                                                    Janda
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Agama :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->agama == "1")
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
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Pendidikan Akhir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->pendidikan_akhir == "01")
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
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Sekolah / :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_sekolah}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>/ Tahun Lulus :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->tahun_lulus}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jurusan Program Studi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->jurusan_prodi}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Status Kepegawaian :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->status_kepegawaian == "01")
                                                CPNS
                                                @elseif($pegawais->status_kepegawaian == "02")
                                                PNS
                                                @elseif($pegawais->status_kepegawaian == "03")
                                                PNS DPK DARI DEP.LAIN
                                                @elseif($pegawais->status_kepegawaian == "04")
                                                PNS DPK KE DEP.LAIN
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Instansi Asal :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->instansi_asal}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Calon Pegawai Negeri Sipil :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tmt_cpns)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Golongan / Ruang Terakhir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->golongan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Jabatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_jabatan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor KARPEG :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nomor_karpeg}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Taspen :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->taspen == "1")
                                                Sudah
                                                @elseif($pegawais->taspen == "2")
                                                Belum
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor NPWP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nomor_npwp}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label"><b>Alamat Rumah :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->alamat_rumah}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kota :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->kota}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kode Pos :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->kode_pos}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor Telepon :</b></label>
                                                @if ($pegawais->telepon->first())
                                                    <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->telepon->first()->telepon}}</b></h6></div>
                                                @else
                                                    <div class="col-sm-8 col-form-label col-form-text"><h6><b></b></h6></div>
                                                @endif
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor STR :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->str}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA STR :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SIKP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->sikp}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA SIKP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SPK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->spk}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA SPK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor RKK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->rkk}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA RKK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->rkk)) }}</b></h6></div>
                                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                <!-- <button type="button" class="btn btn-info"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use check"></i> Done</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal Lihat -->
@endforeach



<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('dasar_pegawai_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon I</b></label>
                                                <div class="col-sm-10"><input name="eselon_1" id="exampleEmail" placeholder="Unit Eselon I" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon II</b></label>
                                                <div class="col-sm-10"><input name="eselon_2" id="exampleEmail" placeholder="Unit Eselon II" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon III</b></label>
                                                <div class="col-sm-10"><input name="eselon_3" id="exampleEmail" placeholder="Unit Eselon III" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon IV</b></label>
                                                <div class="col-sm-10"><input name="eselon_4" id="exampleEmail" placeholder="Unit Eselon IV" type="text" class="form-control" value=""></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Baru</b></label>
                                                <div class="col-sm-10"><input name="nip_baru" id="exampleEmail" placeholder="Nomor Induk Pegawai Baru" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama</b></label>
                                                <div class="col-sm-10"><input name="nip_lama" id="exampleEmail" placeholder="Nomor Induk Pegawai Lama" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                                <div class="col-sm-10"><input name="nama_pegawai" id="exampleEmail" placeholder="Nama Pegawai" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Depan</b></label>
                                                <div class="col-sm-10"><input name="gelar_depan" id="exampleEmail" placeholder="Contoh : Dr. Ir." type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Belakang</b></label>
                                                <div class="col-sm-10"><input name="gelar_belakang" id="exampleEmail" placeholder="Contoh : M.Sc, S.H S.sos." type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="exampleEmail" placeholder="Tempat Lahir" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="P">Pria</option>
                                                <option value="W">Wanita</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Keluarga</b></label>
                                                <div class="col-sm-10"><select name="status_keluarga" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Status Keluarga-</option>
                                                <option value="K">Nikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="D">Duda</option>
                                                <option value="J">Janda</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Agama</b></label>
                                                <div class="col-sm-10"><select name="agama" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Agama-</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Pendidikan Akhir</b></label>
                                                <div class="col-sm-10"><select name="pendidikan_akhir" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Pendidikan Akhir-</option>
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Sekolah /</b></label>
                                                <div class="col-sm-10"><input name="nama_sekolah" id="exampleEmail" placeholder="Nama Sekolah /" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Lulus</b></label>
                                                <div class="col-sm-10"><input name="tahun_lulus" id="exampleEmail" placeholder="/ Tahun Lulus" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jurusan / Program Studi</b></label>
                                                <div class="col-sm-10"><input name="jurusan_prodi" id="exampleEmail" placeholder="Jurusan / Program Studi" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Kepegawaian</b></label>
                                                <div class="col-sm-10"><select name="status_kepegawaian" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Status Kepegawaian-</option>
                                                <option value="01">CPNS</option>
                                                <option value="02">PNS</option>
                                                <option value="03">PNS DPK DARI DEP.LAIN</option>
                                                <option value="04">PNS DPK KE DEP.LAIN</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Instansi Asal</b></label>
                                                <div class="col-sm-10"><input name="instansi_asal" id="exampleEmail" placeholder="Instansi Asal" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Calon Pegawai Negeri Sipil</b></label>
                                                <div class="col-sm-10"><input name="tmt_cpns" id="exampleEmail" placeholder="TMT Calon Pegawai Negeri Sipil" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Golongan / Ruang Terakhir</b></label>
                                                <div class="col-sm-10"><input name="golongan" id="exampleEmail" placeholder="Contoh : Gol/ruang II/a ditulis 2a" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Golongan</b></label>
                                                <div class="col-sm-10"><input name="tmt_golongan" id="exampleEmail" placeholder="TMT Golongan" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="nama_jabatan" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor KARPEG</b></label>
                                                <div class="col-sm-10"><input name="nomor_karpeg" id="exampleEmail" placeholder="Nomor KARPEG" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Taspen</b></label>
                                                <div class="col-sm-10"><select name="taspen" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Taspen-</option>
                                                <option value="1">Sudah</option>
                                                <option value="2">Belum</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor NPWP</b></label>
                                                <div class="col-sm-10"><input name="nomor_npwp" id="exampleEmail" placeholder="Nomor NPWP" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label"><b>Alamat Rumah</b></label>
                                                <div class="col-sm-10"><textarea name="alamat_rumah" id="exampleText" placeholder="Alamat Rumah" class="form-control" required></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kota</b></label>
                                                <div class="col-sm-10"><input name="kota" id="exampleEmail" placeholder="Kota" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kode Pos</b></label>
                                                <div class="col-sm-10"><input name="kode_pos" id="exampleEmail" placeholder="Kode Pos" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Telepon</b></label>
                                                <div class="col-sm-10"><input name="telepon" id="exampleEmail" placeholder="Nomor Telepon" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor STR</b></label>
                                                <div class="col-sm-10"><input name="str" id="exampleEmail" placeholder="Nomor Surat Tanda Registrasi" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA STR</b></label>
                                                <div class="col-sm-10"><input name="masa_str" id="exampleEmail" placeholder="MASA Surat Tanda Registrasi" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SIKP</b></label>
                                                <div class="col-sm-10"><input name="sikp" id="exampleEmail" placeholder="Nomor Surat Izin Kerja Perawat" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SIKP</b></label>
                                                <div class="col-sm-10"><input name="masa_sikp" id="exampleEmail" placeholder="MASA Surat Izin Kerja Perawat" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SPK</b></label>
                                                <div class="col-sm-10"><input name="spk" id="exampleEmail" placeholder="Nomor Surat Penugasan Kewenangan Klinis" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SPK</b></label>
                                                <div class="col-sm-10"><input name="masa_spk" id="exampleEmail" placeholder="MASA Surat Penugasan Kewenangan Klinis" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor RKK</b></label>
                                                <div class="col-sm-10"><input name="rkk" id="exampleEmail" placeholder="Nomor Rinician Kewenangan Klinis" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA RKK</b></label>
                                                <div class="col-sm-10"><input name="masa_rkk" id="exampleEmail" placeholder="MASA Rincian Kewenangan Klinis" type="date" class="form-control" value="" required></div>
                                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-dark"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tambah -->



@foreach($pegawai as $pegawais)
<!-- Modal Update -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$pegawais->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="dasar_pegawai/update/{{$pegawais->id}}" method="post">
                                             @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon I</b></label>
                                                <div class="col-sm-10"><input name="eselon_1" id="exampleEmail" placeholder="Unit Eselon I" type="text" class="form-control" value="{{$pegawais->eselon_1}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon II</b></label>
                                                <div class="col-sm-10"><input name="eselon_2" id="exampleEmail" placeholder="Unit Eselon II" type="text" class="form-control" value="{{$pegawais->eselon_2}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon III</b></label>
                                                <div class="col-sm-10"><input name="eselon_3" id="exampleEmail" placeholder="Unit Eselon III" type="text" class="form-control" value="{{$pegawais->eselon_3}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Eselon IV</b></label>
                                                <div class="col-sm-10"><input name="eselon_4" id="exampleEmail" placeholder="Unit Eselon IV" type="text" class="form-control" value="{{$pegawais->eselon_4}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Baru</b></label>
                                                <div class="col-sm-10"><input name="nip_baru" id="exampleEmail" placeholder="Nomor Induk Pegawai Baru" type="number" class="form-control" value="{{$pegawais->nip_baru}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama</b></label>
                                                <div class="col-sm-10"><input name="nip_lama" id="exampleEmail" placeholder="Nomor Induk Pegawai Lama" type="number" class="form-control" value="{{$pegawais->nip_lama}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                                <div class="col-sm-10"><input name="nama_pegawai" id="exampleEmail" placeholder="Nama Pegawai" type="text" class="form-control" value="{{$pegawais->nama_pegawai}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Depan</b></label>
                                                <div class="col-sm-10"><input name="gelar_depan" id="exampleEmail" placeholder="Contoh : Dr. Ir." type="text" class="form-control" value="{{$pegawais->gelar_depan}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Gelar Belakang</b></label>
                                                <div class="col-sm-10"><input name="gelar_belakang" id="exampleEmail" placeholder="Contoh : M.Sc, S.H S.sos." type="text" class="form-control" value="{{$pegawais->gelar_belakang}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="exampleEmail" placeholder="Tempat Lahir" type="text" class="form-control" value="{{$pegawais->tempat_lahir}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->tanggal_lahir)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" value="{{$pegawais->jenis_kelamin}}" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                @if($pegawais->jenis_kelamin == "P")
                                                <option value="P" selected>Pria</option>
                                                <option value="W">Wanita</option>
                                                @elseif($pegawais->jenis_kelamin == "W")
                                                <option value="P">Pria</option>
                                                <option value="W" selected>Wanita</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Keluarga</b></label>
                                                <div class="col-sm-10"><select name="status_keluarga" id="exampleSelect" class="form-control" value="{{$pegawais->status_keluarga}}" required>
                                                <option value="" disabled selected>-Pilih Status Keluarga-</option>
                                                @if($pegawais->status_keluarga == "K")
                                                <option value="K" selected>Nikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="D">Duda</option>
                                                <option value="J">Janda</option>
                                                @elseif($pegawais->status_keluarga == "B")
                                                <option value="K">Nikah</option>
                                                <option value="B" selected>Belum Menikah</option>
                                                <option value="D">Duda</option>
                                                <option value="J">Janda</option>
                                                @elseif($pegawais->status_keluarga == "D")
                                                <option value="K">Nikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="D" selected>Duda</option>
                                                <option value="J">Janda</option>
                                                @elseif($pegawais->status_keluarga == "J")
                                                <option value="K">Nikah</option>
                                                <option value="B">Belum Menikah</option>
                                                <option value="D">Duda</option>
                                                <option value="J" selected>Janda</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Agama</b></label>
                                                <div class="col-sm-10"><select name="agama" id="exampleSelect" class="form-control" value="{{$pegawais->agama}}" required>
                                                <option value="" disabled selected>-Pilih Agama-</option>
                                                @if($pegawais->agama == "1")
                                                <option value="1" selected>Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                @elseif($pegawais->agama == "2")
                                                <option value="1">Islam</option>
                                                <option value="2" selected>Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                @elseif($pegawais->agama == "3")
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3" selected>Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                @elseif($pegawais->agama == "4")
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4" selected>Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Kristen</option>
                                                @elseif($pegawais->agama == "5")
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5" selected>Budha</option>
                                                <option value="6">Kristen</option>
                                                @elseif($pegawais->agama == "6")
                                                <option value="1">Islam</option>
                                                <option value="2">Katholik</option>
                                                <option value="3">Protestan</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6" selected>Kristen</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Pendidikan Akhir</b></label>
                                                <div class="col-sm-10"><select name="pendidikan_akhir" id="exampleSelect" class="form-control" value="{{$pegawais->pendidikan_akhir}}" required>
                                                <option value="" disabled selected>-Pilih Pendidikan Akhir-</option>
                                                @if($pegawais->pendidikan_akhir == "01")
                                                <option value="01" selected>S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "02")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02" selected>S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "03")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03" selected>S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "04")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04" selected>D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "05")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05" selected>SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "06")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06" selected>D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "07")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07" selected>D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "08")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08" selected>D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "09")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09" selected>SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "10")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10" selected>SLTP</option>
                                                <option value="11">SD</option>
                                                @elseif($pegawais->pendidikan_akhir == "11")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02">S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09">SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11" selected>SD</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Sekolah /</b></label>
                                                <div class="col-sm-10"><input name="nama_sekolah" id="exampleEmail" placeholder="Nama Sekolah" type="text" class="form-control" value="{{$pegawais->nama_sekolah}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Lulus</b></label>
                                                <div class="col-sm-10"><input name="tahun_lulus" id="exampleEmail" placeholder="Tahun Lulus" type="number" class="form-control" value="{{$pegawais->tahun_lulus}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jurusan / Program Studi</b></label>
                                                <div class="col-sm-10"><input name="jurusan_prodi" id="exampleEmail" placeholder="Jurusan / Program Studi" type="text" class="form-control" value="{{$pegawais->jurusan_prodi}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Kepegawaian</b></label>
                                                <div class="col-sm-10"><select name="status_kepegawaian" id="exampleSelect" class="form-control" value="{{$pegawais->status_kepegawaian}}" required>
                                                <option value="" disabled selected>-Pilih Status Kepegawaian-</option>
                                                @if($pegawais->status_kepegawaian == "01")
                                                <option value="01" selected>CPNS</option>
                                                <option value="02">PNS</option>
                                                <option value="03">PNS DPK DARI DEP.LAIN</option>
                                                <option value="04">PNS DPK KE DEP.LAIN</option>
                                                @elseif($pegawais->status_kepegawaian == "02")
                                                <option value="01">CPNS</option>
                                                <option value="02" selected>PNS</option>
                                                <option value="03">PNS DPK DARI DEP.LAIN</option>
                                                <option value="04">PNS DPK KE DEP.LAIN</option>
                                                @elseif($pegawais->status_kepegawaian == "03")
                                                <option value="01">CPNS</option>
                                                <option value="02">PNS</option>
                                                <option value="03" selected>PNS DPK DARI DEP.LAIN</option>
                                                <option value="04">PNS DPK KE DEP.LAIN</option>
                                                @elseif($pegawais->status_kepegawaian == "04")
                                                <option value="01">CPNS</option>
                                                <option value="02">PNS</option>
                                                <option value="03">PNS DPK DARI DEP.LAIN</option>
                                                <option value="04" selected>PNS DPK KE DEP.LAIN</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Instansi Asal</b></label>
                                                <div class="col-sm-10"><input name="instansi_asal" id="exampleEmail" placeholder="Instansi Asal" type="text" class="form-control" value="{{$pegawais->instansi_asal}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Calon Pegawai Negeri Sipil</b></label>
                                                <div class="col-sm-10"><input name="tmt_cpns" id="exampleEmail" placeholder="TMT Calon Pegawai Negeri Sipil" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->tmt_cpns)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Golongan / Ruang Terakhir</b></label>
                                                <div class="col-sm-10"><input name="golongan" id="exampleEmail" placeholder="Contoh : Gol/ruang II/a ditulis 2a" type="text" class="form-control" value="{{$pegawais->golongan}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Golongan</b></label>
                                                <div class="col-sm-10"><input name="tmt_golongan" id="exampleEmail" placeholder="TMT Golongan" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->tmt_golongan)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="nama_jabatan" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value="{{$pegawais->nama_jabatan}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor KARPEG</b></label>
                                                <div class="col-sm-10"><input name="nomor_karpeg" id="exampleEmail" placeholder="Nomor KARPEG" type="number" class="form-control" value="{{$pegawais->nomor_karpeg}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Taspen</b></label>
                                                <div class="col-sm-10"><select name="taspen" id="exampleSelect" class="form-control" value="{{$pegawais->taspen}}" required>
                                                <option value="" disabled selected>-Pilih Taspen-</option>
                                                @if($pegawais->taspen == "1")
                                                <option value="1" selected>Sudah</option>
                                                <option value="2">Belum</option>
                                                @elseif($pegawais->taspen == "2")
                                                <option value="1">Sudah</option>
                                                <option value="2" selected>Belum</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor NPWP</b></label>
                                                <div class="col-sm-10"><input name="nomor_npwp" id="exampleEmail" placeholder="Nomor NPWP" type="number" class="form-control" value="{{$pegawais->nomor_npwp}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label"><b>Alamat Rumah</b></label>
                                                <div class="col-sm-10"><textarea name="alamat_rumah" id="exampleText" placeholder="Alamat Rumah" class="form-control" value='{{$pegawais->alamat_rumah}}' required>{{$pegawais->alamat_rumah}}</textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kota</b></label>
                                                <div class="col-sm-10"><input name="kota" id="exampleEmail" placeholder="Kota" type="text" class="form-control" value="{{$pegawais->kota}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kode Pos</b></label>
                                                <div class="col-sm-10"><input name="kode_pos" id="exampleEmail" placeholder="Kode Pos" type="number" class="form-control" value="{{$pegawais->kode_pos}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Telepon</b></label>
                                                @if ($pegawais->telepon->first())
                                                    <div class="col-sm-10"><input name="telepon" id="exampleEmail" placeholder="Nomor Telepon" type="number" class="form-control" value="{{$pegawais->telepon->first()->telepon}}" required></div>
                                                @else
                                                <div class="col-sm-10"><input name="telepon" id="exampleEmail" placeholder="Nomor Telepon" type="number" class="form-control" value="" required></div>
                                                @endif
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor STR</b></label>
                                                <div class="col-sm-10"><input name="str" id="exampleEmail" placeholder="Nomor Surat Tanda Registrasi" type="number" class="form-control" value="{{$pegawais->str}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA STR</b></label>
                                                <div class="col-sm-10"><input name="masa_str" id="exampleEmail" placeholder="MASA Surat Tanda Registrasi" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->masa_str)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SIKP</b></label>
                                                <div class="col-sm-10"><input name="sikp" id="exampleEmail" placeholder="Nomor Surat Izin Kerja Perawat" type="number" class="form-control" value="{{$pegawais->sikp}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SIKP</b></label>
                                                <div class="col-sm-10"><input name="masa_sikp" id="exampleEmail" placeholder="MASA Surat Izin Kerja Perawat" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->masa_sikp)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SPK</b></label>
                                                <div class="col-sm-10"><input name="spk" id="exampleEmail" placeholder="Nomor Surat Penugasan Kewenangan Klinis" type="number" class="form-control" value="{{$pegawais->spk}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA SPK</b></label>
                                                <div class="col-sm-10"><input name="masa_spk" id="exampleEmail" placeholder="MASA Surat Penugasan Kewenangan Klinis" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->masa_spk)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor RKK</b></label>
                                                <div class="col-sm-10"><input name="rkk" id="exampleEmail" placeholder="Nomor Rinician Kewenangan Klinis" type="number" class="form-control" value="{{$pegawais->rkk}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>MASA RKK</b></label>
                                                <div class="col-sm-10"><input name="masa_rkk" id="exampleEmail" placeholder="MASA Rincian Kewenangan Klinis" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($pegawais->masa_rkk)) }}" required></div>
                                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-dark"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Update -->
@endforeach


@foreach($pegawai as $pegawais)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$pegawais->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="dasar_pegawai/delete/{{$pegawais->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Dasar Pegawai" <b></b> </p></center></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-danger"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Small modal Delete -->
@endforeach


@foreach($pegawai as $pegawais)
<!-- Modal History -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeHistory-{{$pegawais->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">History Data Dasar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon I :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_1}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon II :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_2}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon III :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_3}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Unit Eselon IV :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->eselon_4}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>NIP Baru :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nip_baru}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>NIP Lama :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nip_lama}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Pegawai :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_pegawai}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Gelar Depan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->gelar_depan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Gelar Belakang :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->gelar_belakang}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tempat Lahir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->tempat_lahir}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Lahir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tanggal_lahir)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Jenis Kelamin :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->jenis_kelamin == "P")
                                                                                    Pria
                                                                                    @elseif($pegawais->jenis_kelamin == "W")
                                                                                    Wanita
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Status Keluarga :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->status_keluarga == "K")
                                                                                    Nikah
                                                                                    @elseif($pegawais->status_keluarga == "B")
                                                                                    Belum Menikah
                                                                                    @elseif($pegawais->status_keluarga == "D")
                                                                                    Duda
                                                                                    @elseif($pegawais->status_keluarga == "J")
                                                                                    Janda
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Agama :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->agama == "1")
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
                                                                                    @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Pendidikan Akhir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->pendidikan_akhir == "01")
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
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Sekolah / :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_sekolah}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>/ Tahun Lulus :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->tahun_lulus}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jurusan Program Studi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->jurusan_prodi}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Status Kepegawaian :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->status_kepegawaian == "01")
                                                CPNS
                                                @elseif($pegawais->status_kepegawaian == "02")
                                                PNS
                                                @elseif($pegawais->status_kepegawaian == "03")
                                                PNS DPK DARI DEP.LAIN
                                                @elseif($pegawais->status_kepegawaian == "04")
                                                PNS DPK KE DEP.LAIN
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Instansi Asal :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->instansi_asal}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Calon Pegawai Negeri Sipil :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tmt_cpns)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Golongan / Ruang Terakhir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->golongan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->tmt_golongan)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Jabatan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nama_jabatan}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor KARPEG :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nomor_karpeg}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-4 col-form-label"><b>Taspen :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($pegawais->taspen == "1")
                                                Sudah
                                                @elseif($pegawais->taspen == "2")
                                                Belum
                                                @endif</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor NPWP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->nomor_npwp}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-4 col-form-label"><b>Alamat Rumah :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->alamat_rumah}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kota :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->kota}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kode Pos :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->kode_pos}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor Telepon :</b></label>
                                                @if ($pegawais->telepon->first())
                                                    <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->telepon->first()->telepon}}</b></h6></div>
                                                @else
                                                    <div class="col-sm-8 col-form-label col-form-text"><h6><b></b></h6></div>
                                                @endif
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor STR :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->str}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA STR :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_str)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SIKP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->sikp}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA SIKP :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_sikp)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SPK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->spk}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA SPK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->masa_spk)) }}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor RKK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$pegawais->rkk}}</b></h6></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>MASA RKK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($pegawais->rkk)) }}</b></h6></div>
                                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                
            </div>
        </div>
    </div>
</div>
<!-- Modal History -->
@endforeach


