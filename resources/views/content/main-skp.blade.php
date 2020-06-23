<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-skp')
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

@foreach($skp as $skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NAMA PEJABAT PENILAI</th>
                            <td><b>{{$skps->nama_pejabat_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP PEJABAT PENILAI</th>
                            <td><b>{{$skps->nip_pejabat_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PANGKAT GOLONGAN RUANG PENILAI</th>
                            <td><b>{{$skps->pangkat_golongan_ruang_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN PENILAI</th>
                            <td><b>{{$skps->jabatan_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">UNIT KERJA PENILAI</th>
                            <td><b>{{$skps->unit_kerja_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NAMA ATASAN PEJABAT PENILAI</th>
                            <td><b>{{$skps->nama_atasan_pejabat_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NIP ATASAN PEJABAT PENILAI</th>
                            <td><b>{{$skps->nama_atasan_pejabat_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PANGKAT GOLONGAN RUANG ATASAN PENILAI</th>
                            <td><b>{{$skps->pangkat_golongan_ruang_atasan_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JABATAN ATASAN PENILAI</th>
                            <td><b>{{$skps->jabatan_atasan_penilai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">UNIT KERJA ATASAN PENILAI</th>
                            <td><b>{{$skps->unit_kerja_atasan_penilai}}</b></td>
                        </tr>
                    </tbody>
                </table>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$skps->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama Penghargaan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$skps->nama_penghargaan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Perolehan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($skps->tanggal_perolehan)) }}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$skps->nomor}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Negara / Instansi Pemberi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$skps->pemberi}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jabatan Pemberi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$skps->jabatan_pemberi}}</b></h6></div>          
                                            </div> -->
 
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('skp_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nama_pejabat_penilai" id="exampleEmail" placeholder="Nama Pejabat Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nip_pejabat_penilai" id="exampleEmail" placeholder="NIP Pejabat Penilai" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pangkat Golongan Ruangan Penilai</b></label>
                                                <div class="col-sm-10"><input name="pangkat_golongan_ruang_penilai" id="exampleEmail" placeholder="Pangkat Golongan Ruangan Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Penilai</b></label>
                                                <div class="col-sm-10"><input name="jabatan_penilai" id="exampleEmail" placeholder="Jabatan Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Kerja Penilai</b></label>
                                                <div class="col-sm-10"><input name="unit_kerja_penilai" id="exampleEmail" placeholder="Unit Kerja Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nama_atasan_pejabat_penilai" id="exampleEmail" placeholder="Nama Atasan Pejabat Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nip_atasan_pejabat_penilai" id="exampleEmail" placeholder="NIP Atasan Pejabat Penilai" type="number" class="form-control" value="" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pangkat Golongan Ruangan Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="pangkat_golongan_ruang_atasan_penilai" id="exampleEmail" placeholder="Pangkat Golongan Ruangan Atasan Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="jabatan_atasan_penilai" id="exampleEmail" placeholder="Jabatan Atasan Penilai" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Kerja Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="unit_kerja_atasan_penilai" id="exampleEmail" placeholder="Unit Kerja Atasan Penilai" type="text" class="form-control" value="" required></div>          
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



@foreach($skp as $skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="skp/update/{{$skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" value="{{$skps->kategori}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            @if($skps->kategori == "Semester 1")
                                                                            <option value="Semester 1" selected>Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($skps->kategori == "Semester 2")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2" selected>Semester 2</option>
                                                                            <option value="Setahun">setahun</option>
                                                                            @elseif($skps->kategori == "Setahun")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun" selected>Setahun</option>
                                                                            @endif
                                                                            
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nama_pejabat_penilai" id="exampleEmail" placeholder="Nama Pejabat Penilai" type="text" class="form-control" value="{{$skps->nama_pejabat_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nip_pejabat_penilai" id="exampleEmail" placeholder="NIP Pejabat Penilai" type="number" class="form-control" value="{{$skps->nip_pejabat_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pangkat Golongan Ruangan Penilai</b></label>
                                                <div class="col-sm-10"><input name="pangkat_golongan_ruang_penilai" id="exampleEmail" placeholder="Pangkat Golongan Ruangan Penilai" type="text" class="form-control" value="{{$skps->pangkat_golongan_ruang_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Penilai</b></label>
                                                <div class="col-sm-10"><input name="jabatan_penilai" id="exampleEmail" placeholder="Jabatan Penilai" type="text" class="form-control" value="{{$skps->jabatan_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Kerja Penilai</b></label>
                                                <div class="col-sm-10"><input name="unit_kerja_penilai" id="exampleEmail" placeholder="Unit Kerja Penilai" type="text" class="form-control" value="{{$skps->unit_kerja_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nama_atasan_pejabat_penilai" id="exampleEmail" placeholder="Nama Atasan Pejabat Penilai" type="text" class="form-control" value="{{$skps->nama_atasan_pejabat_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>NIP Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="nip_atasan_pejabat_penilai" id="exampleEmail" placeholder="NIP Atasan Pejabat Penilai" type="number" class="form-control" value="{{$skps->nip_atasan_pejabat_penilai}}" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pangkat Golongan Ruangan Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="pangkat_golongan_ruang_atasan_penilai" id="exampleEmail" placeholder="Pangkat Golongan Ruangan Atasan Penilai" type="text" class="form-control" value="{{$skps->pangkat_golongan_ruang_atasan_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jabatan Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="jabatan_atasan_penilai" id="exampleEmail" placeholder="Jabatan Atasan Penilai" type="text" class="form-control" value="{{$skps->jabatan_atasan_penilai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Unit Kerja Atasan Penilai</b></label>
                                                <div class="col-sm-10"><input name="unit_kerja_atasan_penilai" id="exampleEmail" placeholder="Unit Kerja Atasan Penilai" type="text" class="form-control" value="{{$skps->unit_kerja_atasan_penilai}}" required></div>          
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


@foreach($skp as $skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="skp/delete/{{$skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data SKP" <b></b> </p></center></p>
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



