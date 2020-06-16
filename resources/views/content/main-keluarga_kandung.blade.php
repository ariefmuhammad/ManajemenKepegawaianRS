<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-keluarga_kandung')
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>


@foreach($keluarga_kandung as $keluarga_kandungs)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$keluarga_kandungs->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Keluarga Kandung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nama :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_kandungs->nama}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Hubungan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($keluarga_kandungs->hubungan == "1")
                                                                                                            Ayah
                                                                                                            @elseif($keluarga_kandungs->hubungan == "2")
                                                                                                            Ibu
                                                                                                            @elseif($keluarga_kandungs->hubungan == "3")
                                                                                                            Kakak
                                                                                                            @elseif($keluarga_kandungs->hubungan == "4")
                                                                                                            Adik
                                                                                                            @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Pekerjaan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$keluarga_kandungs->pekerjaan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal Lahir :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{ date('d/m/Y',strtotime($keluarga_kandungs->tanggal_lahir)) }}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Jenis Kelamin :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($keluarga_kandungs->jenis_kelamin == "L")
                                                                                                            Laki-laki                                                
                                                                                                            @elseif($keluarga_kandungs->jenis_kelamin == "P")                                                
                                                                                                            Perempuan
                                                                                                            @endif</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Kondisi :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>@if($keluarga_kandungs->kondisi == "1")
                                                Masih Hidup
                                                @elseif($keluarga_kandungs->kondisi == "0")      
                                                Almarhun
                                                @endif</b></h6></div>          
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Keluarga Kandung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('keluarga_kandung_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Hubungan</b></label>
                                                <div class="col-sm-10"><select name="hubungan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Hubungan-</option>
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kondisi</b></label>
                                                <div class="col-sm-10"><select name="kondisi" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Kondisi-</option>
                                                <option value="1">Masih Hidup</option>
                                                <option value="0">Almarhun</option>
                                                </select></div>
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



@foreach($keluarga_kandung as $keluarga_kandungs)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$keluarga_kandungs->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Keluarga Kandung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="keluarga_kandung/update/{{$keluarga_kandungs->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama" type="text" class="form-control" value="{{$keluarga_kandungs->nama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Hubungan</b></label>
                                                <div class="col-sm-10"><select name="hubungan" id="exampleSelect" class="form-control" value="{{$keluarga_kandungs->hubungan}}" required>
                                                @if($keluarga_kandungs->hubungan == "1")
                                                <option value="1" selected>Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_kandungs->hubungan == "2")
                                                <option value="1">Ayah</option>
                                                <option value="2" selected>Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_kandungs->hubungan == "3")
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3" selected>Kakak</option>
                                                <option value="4">Adik</option>
                                                @elseif($keluarga_kandungs->hubungan == "4")
                                                <option value="1">Ayah</option>
                                                <option value="2">Ibu</option>
                                                <option value="3">Kakak</option>
                                                <option value="4" selected>Adik</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan" type="text" class="form-control" value="{{$keluarga_kandungs->pekerjaan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($keluarga_kandungs->tanggal_lahir)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required value="{{$keluarga_kandungs->jenis_kelamin}}">
                                                @if($keluarga_kandungs->jenis_kelamin == "L")
                                                <option value="L" selected>Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                                @elseif($keluarga_kandungs->jenis_kelamin == "P")
                                                <option value="L">Laki-laki</option>
                                                <option value="P" selected>Perempuan</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kondisi</b></label>
                                                <div class="col-sm-10"><select name="kondisi" id="exampleSelect" class="form-control" required value="{{$keluarga_kandungs->kondisi}}">
                                                <option value="" disabled selected>-Pilih Kondisi-</option>
                                                @if($keluarga_kandungs->kondisi == "1")
                                                <option value="1" selected>Masih Hidup</option>
                                                <option value="0">Almarhun</option>
                                                @elseif($keluarga_kandungs->kondisi == "0")
                                                <option value="1">Masih Hidup</option>
                                                <option value="0" selected>Almarhun</option>
                                                @endif
                                                </select></div>
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


@foreach($keluarga_kandung as $keluarga_kandungs)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$keluarga_kandungs->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Keluarga Kandung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="keluarga_kandung/delete/{{$keluarga_kandungs->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Keluarga Kandung" <b></b> </p></center></p>
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

