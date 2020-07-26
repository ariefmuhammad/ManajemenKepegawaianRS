<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-tanda_jasa-penghargaan')
    
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($tanda_jasa_penghargaan as $tanda_jasa_penghargaans)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$tanda_jasa_penghargaans->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Tanda Jasa / Penghargaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA TANDA JASA/PENGHARGAAN</th>
                            <td><b>{{$tanda_jasa_penghargaans->nama_penghargaan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL PEROLEHAN</th>
                            <td><b>{{ \Carbon\Carbon::parse($tanda_jasa_penghargaans->tanggal_perolehan)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NOMOR</th>
                            <td><b>{{$tanda_jasa_penghargaans->nomor}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NEGARA/INSTANSI PEMBERI</th>
                            <td><b>{{$tanda_jasa_penghargaans->pemberi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN PEMBERI</th>
                            <td><b>{{$tanda_jasa_penghargaans->jabatan_pemberi}}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Tanda Jasa / Penghargaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('tanda_jasa_penghargaan_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Tanda Jasa / Penghargaan</b></label>
                                                <div class="col-sm-10"><input name="nama_penghargaan" id="exampleEmail" placeholder="Nama Tanda Jasa / Penghargaan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Perolehan</b></label>
                                                <div class="col-sm-10"><input name="tanggal_perolehan" id="exampleEmail" placeholder="Tanggal Perolehan" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor</b></label>
                                                <div class="col-sm-10"><input name="nomor" id="exampleEmail" placeholder="Nomor" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Negara / Instansi Pemberi</b></label>
                                                <div class="col-sm-10"><input name="pemberi" id="exampleEmail" placeholder="Negara / Instansi Pemberi" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Pemberi</b></label>
                                                <div class="col-sm-10"><input name="jabatan_pemberi" id="exampleEmail" placeholder="Jabatan Pemberi" type="text" class="form-control" value="" required></div>          
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



@foreach($tanda_jasa_penghargaan as $tanda_jasa_penghargaans)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$tanda_jasa_penghargaans->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Tanda Jasa / Penghargaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="tanda_jasa_penghargaan/update/{{$tanda_jasa_penghargaans->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Tanda Jasa / Penghargaan</b></label>
                                                <div class="col-sm-10"><input name="nama_penghargaan" id="exampleEmail" placeholder="Nama Tanda Jasa / Penghargaan" type="text" class="form-control" value="{{$tanda_jasa_penghargaans->nama_penghargaan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Perolehan</b></label>
                                                <div class="col-sm-10"><input name="tanggal_perolehan" id="exampleEmail" placeholder="Tanggal Perolehan" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($tanda_jasa_penghargaans->tanggal_perolehan)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor</b></label>
                                                <div class="col-sm-10"><input name="nomor" id="exampleEmail" placeholder="Nomor" type="number" class="form-control" value="{{$tanda_jasa_penghargaans->nomor}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Negara / Instansi Pemberi</b></label>
                                                <div class="col-sm-10"><input name="pemberi" id="exampleEmail" placeholder="Negara / Instansi Pemberi" type="text" class="form-control" value="{{$tanda_jasa_penghargaans->pemberi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Pemberi</b></label>
                                                <div class="col-sm-10"><input name="jabatan_pemberi" id="exampleEmail" placeholder="Jabatan Pemberi" type="text" class="form-control" value="{{$tanda_jasa_penghargaans->jabatan_pemberi}}" required></div>          
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


@foreach($tanda_jasa_penghargaan as $tanda_jasa_penghargaans)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$tanda_jasa_penghargaans->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Tanda Jasa / Penghargaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="tanda_jasa_penghargaan/delete/{{$tanda_jasa_penghargaans->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Tanda Jasa / Penghargaan" <b></b> </p></center></p>
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


