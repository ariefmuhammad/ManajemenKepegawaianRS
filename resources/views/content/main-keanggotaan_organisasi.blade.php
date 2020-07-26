<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-keanggotaan_organisasi')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($keanggotaan_organisasi as $keanggotaan_organisasis)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$keanggotaan_organisasis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Kanggotan Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">TAHUN ORGANISASI</th>
                            <td><b>{{$keanggotaan_organisasis->tahun_organisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NAMA ORGANISASI</th>
                            <td><b>{{$keanggotaan_organisasis->nama_organisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEDUDUKAN DALAM ORGANISASI</th>
                            <td><b>{{$keanggotaan_organisasis->kedudukan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL MULAI</th>
                            <td><b>{{ \Carbon\Carbon::parse($keanggotaan_organisasis->tanggal_mulai)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL SELESAI</th>
                            <td><b>{{ \Carbon\Carbon::parse($keanggotaan_organisasis->tanggal_selesai)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NOMOR SK</th>
                            <td><b>{{$keanggotaan_organisasis->nomor_sk}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PEJABAT PEMBUAT SK</th>
                            <td><b>{{$keanggotaan_organisasis->jabatan_pembuat_sk}}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Keanggotaan Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('keanggotaan_organisasi_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Organisasi</b></label>
                                                <div class="col-sm-10"><input name="tahun_organisasi" id="exampleEmail" placeholder="Tahun" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Organisasi</b></label>
                                                <div class="col-sm-10"><input name="nama_organisasi" id="exampleEmail" placeholder="Nama Organisasi" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kedudukan Organisasi</b></label>
                                                <div class="col-sm-10"><input name="kedudukan" id="exampleEmail" placeholder="Kedudukan Organisasi" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="nomor_sk" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Pembuat SK</b></label>
                                                <div class="col-sm-10"><input name="jabatan_pembuat_sk" id="exampleEmail" placeholder="Jabatan Pembuat SK" type="text" class="form-control" value="" required></div>          
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



@foreach($keanggotaan_organisasi as $keanggotaan_organisasis)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$keanggotaan_organisasis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data keanggotaan Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="keanggotaan_organisasi/update/{{$keanggotaan_organisasis->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tahun Organisasi</b></label>
                                                <div class="col-sm-10"><input name="tahun_organisasi" id="exampleEmail" placeholder="Tahun" type="number" class="form-control" value="{{$keanggotaan_organisasis->tahun_organisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Organisasi</b></label>
                                                <div class="col-sm-10"><input name="nama_organisasi" id="exampleEmail" placeholder="Nama Organisasi" type="text" class="form-control" value="{{$keanggotaan_organisasis->nama_organisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kedudukan Organisasi</b></label>
                                                <div class="col-sm-10"><input name="kedudukan" id="exampleEmail" placeholder="Kedudukan Organisasi" type="text" class="form-control" value="{{$keanggotaan_organisasis->kedudukan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($keanggotaan_organisasis->tanggal_mulai)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($keanggotaan_organisasis->tanggal_selesai)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="nomor_sk" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="{{$keanggotaan_organisasis->nomor_sk}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Pembuat SK</b></label>
                                                <div class="col-sm-10"><input name="jabatan_pembuat_sk" id="exampleEmail" placeholder="Jabatan Pembuat SK" type="text" class="form-control" value="{{$keanggotaan_organisasis->jabatan_pembuat_sk}}" required></div>          
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


@foreach($keanggotaan_organisasi as $keanggotaan_organisasis)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$keanggotaan_organisasis->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Keanggotaan Organisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="keanggotaan_organisasi/delete/{{$keanggotaan_organisasis->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Keanggotaan Organisasi" <b></b> </p></center></p>
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


