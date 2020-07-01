<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-riwayat_pekerjaan-jabatan')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($riwayat_pekerjaan_jabatan as $riwayat_pekerjaan_jabatans)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$riwayat_pekerjaan_jabatans->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Riwayat Pekerjaan / Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA JABATAN</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->nama_jabatan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TMT JABATAN</th>
                            <td><b>{{ date('d/m/Y',strtotime($riwayat_pekerjaan_jabatans->tmt_jabatan)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NOMOR SK</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->nomor_sk}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL SK /</th>
                            <td><b>{{ date('d/m/Y',strtotime($riwayat_pekerjaan_jabatans->tanggal_sk)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">/ s.d TAHUN MULAI /</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->tahun_mulai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">/ TAHUN SELESAI</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->tahun_selesai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP PEJABAT PENANDATANGAN SK</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->nip_pejabat_penandatangan_sk}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP LAMA PEJABAT PENANDATANGAN SK</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->nip_lama_pejabat_penandatangan_sk}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PEJABAT PENANDATANGAN SK</th>
                            <td><b>{{$riwayat_pekerjaan_jabatans->pejabat_penandatangan_sk}}</b></td>
                        </tr>
                    </tbody>
                </table>

 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alternate" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Lihat Data Riwayat Pekerjaan / Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('riwayat_pekerjaan_jabatan_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="nama_jabatan" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Jabatan</b></label>
                                                <div class="col-sm-10"><input name="tmt_jabatan" id="exampleEmail" placeholder="TMT Jabatan" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="nomor_sk" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal SK /</b></label>
                                                <div class="col-sm-10"><input name="tanggal_sk" id="exampleEmail" placeholder="Tanggal SK" type="date" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Mulai /</b></label>
                                                <div class="col-sm-10"><input name="tahun_mulai" id="exampleEmail" placeholder="/ Tahun Mulai /" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ s.d Tahun Selesai</b></label>
                                                <div class="col-sm-10"><input name="tahun_selesai" id="exampleEmail" placeholder="/ s.d Tahun Selesai" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="nip_pejabat_penandatangan_sk" id="exampleEmail" placeholder="NIP Pejabat Penandatangan SK" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="nip_lama_pejabat_penandatangan_sk" id="exampleEmail" placeholder="NIP Lama Pejabat Penandatangan SK" type="number" class="form-control" value="" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="pejabat_penandatangan_sk" id="exampleEmail" placeholder="Pejabat Penandatangan SK" type="text" class="form-control" value="" required></div>
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



@foreach($riwayat_pekerjaan_jabatan as $riwayat_pekerjaan_jabatans)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$riwayat_pekerjaan_jabatans->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Riwayat Pekerjaan / Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="riwayat_pekerjaan_jabatan/update/{{$riwayat_pekerjaan_jabatans->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Jabatan</b></label>
                                                <div class="col-sm-10"><input name="nama_jabatan" id="exampleEmail" placeholder="Nama Jabatan" type="text" class="form-control" value="{{$riwayat_pekerjaan_jabatans->nama_jabatan}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT Jabatan</b></label>
                                                <div class="col-sm-10"><input name="tmt_jabatan" id="exampleEmail" placeholder="TMT Jabatan" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($riwayat_pekerjaan_jabatans->tmt_jabatan)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="nomor_sk" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="{{$riwayat_pekerjaan_jabatans->nomor_sk}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal SK /</b></label>
                                                <div class="col-sm-10"><input name="tangal_sk" id="exampleEmail" placeholder="Tanggal SK" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($riwayat_pekerjaan_jabatans->tanggal_sk)) }}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ Tahun Mulai /</b></label>
                                                <div class="col-sm-10"><input name="tahun_mulai" id="exampleEmail" placeholder="/ Tahun Mulai /" type="number" class="form-control" value="{{$riwayat_pekerjaan_jabatans->tahun_mulai}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>/ s.d Tahun Selesai</b></label>
                                                <div class="col-sm-10"><input name="tahun_selesai" id="exampleEmail" placeholder="/ s.d Tahun Selesai" type="number" class="form-control" value="{{$riwayat_pekerjaan_jabatans->tahun_selesai}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="nip_pejabat_penandatangan_sk" id="exampleEmail" placeholder="NIP Pejabat Penandatangan SK" type="number" class="form-control" value="{{$riwayat_pekerjaan_jabatans->nip_pejabat_penandatangan_sk}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Lama Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="nip_lama_pejabat_penandatangan_sk" id="exampleEmail" placeholder="NIP Lama Pejabat Penandatangan SK" type="number" class="form-control" value="{{$riwayat_pekerjaan_jabatans->nip_lama_pejabat_penandatangan_sk}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pejabat Penandatangan SK</b></label>
                                                <div class="col-sm-10"><input name="pejabat_penandatangan_sk" id="exampleEmail" placeholder="Pejabat Penandatangan SK" type="text" class="form-control" value="{{$riwayat_pekerjaan_jabatans->pejabat_penandatangan_sk}}" required></div>
                                            </div>   
                                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-success"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
@endforeach


@foreach($riwayat_pekerjaan_jabatan as $riwayat_pekerjaan_jabatans)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$riwayat_pekerjaan_jabatans->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Riwayat Pekerjaan / Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="riwayat_pekerjaan_jabatan/delete/{{$riwayat_pekerjaan_jabatans->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Riwayat Pekerjaan / Jabatan" <b></b> </p></center></p>
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


