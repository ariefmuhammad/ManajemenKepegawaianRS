<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-perilaku_kerja_skp')
    @push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
    <style>
        .width100{
            width: 100%;
        }
        .width100px{
            width: 100px;
        }
        .width40{
            width: 40px;
        }
        .width200{
            width: 200px;
        }
        .margintop20 {
            margin-top: 20px;
        }
        .margintop50 {
            margin-top: 50px;
        }
        .sidetable{
            background-image: url(/lojin/sidebarx.png);
            background-repeat: no-repeat;
            width: 500px;
            height: 41px;
            color: #ffffff;
        }
        .titlepertab {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 40px;
            letter-spacing: 0px;
            word-spacing: 0px;
            color: #000000;
            font-weight: 700;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: small-caps;
            text-transform: capitalize;
            margin-top: 40px;
            margin-bottom: 40px;
        }
    </style>
@endpush
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($perilaku_kerja_skp as $perilaku_kerja_skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$perilaku_kerja_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Perilaku Kerja SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$perilaku_kerja_skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">ORIENTASI PELAYANAN</th>
                            <td><b>{{$perilaku_kerja_skps->orientasi_pelayanan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">INTEGRITAS</th>
                            <td><b>{{$perilaku_kerja_skps->integritas}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KOMITMEN</th>
                            <td><b>{{$perilaku_kerja_skps->komitmen}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">DISIPLIN</th>
                            <td><b>{{$perilaku_kerja_skps->disiplin}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KERJASAMA</th>
                            <td><b>{{$perilaku_kerja_skps->kerjasama}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEPEMIMPINAN</th>
                            <td><b>{{$perilaku_kerja_skps->kepemimpinan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH</th>
                            <td><b>{{$perilaku_kerja_skps->jumlah}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">RATA-RATA</th>
                            <td><b>{{$perilaku_kerja_skps->rata_rata}}</b></td>
                        </tr>                  
                    </tbody>
                </table>
 
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Perilaku Kerja SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('perilaku_kerja_skp_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Orientasi Pelayanana</b></label>
                                                <div class="col-sm-10"><input name="orientasi_pelayanan" id="exampleEmail" placeholder="Orientasi Pelayanana" type="number" class="form-control" value="" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Integritas</b></label>
                                                <div class="col-sm-10"><input name="integritas" id="exampleEmail" placeholder="Integritas" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Komitmen</b></label>
                                                <div class="col-sm-10"><input name="komitmen" id="exampleEmail" placeholder="Komitmen" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Disiplin</b></label>
                                                <div class="col-sm-10"><input name="disiplin" id="exampleEmail" placeholder="Disiplin" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="kerjasama" id="exampleEmail" placeholder="Kerjasama" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="kepemimpinan" id="exampleEmail" placeholder="Kepemimpinan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah" id="exampleEmail" placeholder="Jumlah" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rata-Rata</b></label>
                                                <div class="col-sm-10"><input name="rata_rata" id="exampleEmail" placeholder="Rata-Rata" type="number" class="form-control" value="" required></div>          
                                            </div>  
                                                                               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tambah -->



@foreach($perilaku_kerja_skp as $perilaku_kerja_skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$perilaku_kerja_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Perilaku Kerja SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="perilaku_kerja_skp/update/{{$perilaku_kerja_skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" value="{{$perilaku_kerja_skps->kategori}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            @if($perilaku_kerja_skps->kategori == "Semester 1")
                                                                            <option value="Semester 1" selected>Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($perilaku_kerja_skps->kategori == "Semester 2")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2" selected>Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($perilaku_kerja_skps->kategori == "Setahun")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun" selected>Setahun</option>
                                                                            @endif
                                                                        </select></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Orientasi Pelayanana</b></label>
                                                <div class="col-sm-10"><input name="orientasi_pelayanan" id="exampleEmail" placeholder="Orientasi Pelayanana" type="number" class="form-control" value="{{$perilaku_kerja_skps->orientasi_pelayanan}}" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Integritas</b></label>
                                                <div class="col-sm-10"><input name="integritas" id="exampleEmail" placeholder="Integritas" type="number" class="form-control" value="{{$perilaku_kerja_skps->integritas}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Komitmen</b></label>
                                                <div class="col-sm-10"><input name="komitmen" id="exampleEmail" placeholder="Komitmen" type="number" class="form-control" value="{{$perilaku_kerja_skps->komitmen}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Disiplin</b></label>
                                                <div class="col-sm-10"><input name="disiplin" id="exampleEmail" placeholder="Disiplin" type="number" class="form-control" value="{{$perilaku_kerja_skps->disiplin}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="kerjasama" id="exampleEmail" placeholder="Kerjasama" type="number" class="form-control" value="{{$perilaku_kerja_skps->kerjasama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="kepemimpinan" id="exampleEmail" placeholder="Kepemimpinan" type="number" class="form-control" value="{{$perilaku_kerja_skps->kepemimpinan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah" id="exampleEmail" placeholder="Jumlah" type="number" class="form-control" value="{{$perilaku_kerja_skps->jumlah}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rata-Rata</b></label>
                                                <div class="col-sm-10"><input name="rata_rata" id="exampleEmail" placeholder="Rata-Rata" type="number" class="form-control" value="{{$perilaku_kerja_skps->rata_rata}}" required></div>          
                                            </div> 
                                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
@endforeach


@foreach($perilaku_kerja_skp as $perilaku_kerja_skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$perilaku_kerja_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Perilaku Kerja SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="perilaku_kerja_skp/delete/{{$perilaku_kerja_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Perilaku Kerja SKP" <b></b> </p></center></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-light"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Small modal Delete -->
@endforeach

