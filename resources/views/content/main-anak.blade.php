<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-anak')
 
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($anak as $anaks)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$anaks->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Anak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA ANAK</th>
                            <td><b>{{$anaks->nama}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JENIS KELAMIN</th>
                            <td><b> @if($anaks->jenis_kelamin == "P")
                                     Pria
                                     @elseif($anaks->jenis_kelamin == "W")
                                     Wanita
                                    @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TEMPAT LAHIR</th>
                            <td><b>{{$anaks->tempat_lahir}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL LAHIR</th>
                            <td><b>{{ \Carbon\Carbon::parse($anaks->tanggal_lahir)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">STATUS ANAK</th>
                            <td><b>  @if($anaks->status_anak == "1")
                                        Anak Kandung
                                        @elseif($anaks->status_anak == "2")
                                        Anak Tiri
                                        @elseif($anaks->status_anak == "3")
                                        Anak Angkat
                                        @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PENDIDIKAN</th>
                            <td><b> @if($anaks->pendidikan == "01") 
                                    S3 (Setara)                                             
                                    @elseif($anaks->pendidikan == "02") 
                                    S2 (Setara)                                              
                                    @elseif($anaks->pendidikan == "03")                                    
                                    S1 (Setara)                      
                                    @elseif($anaks->pendidikan == "04")                                              
                                    D4                                          
                                    @elseif($anaks->pendidikan == "05")                                             
                                    SM                                       
                                    @elseif($anaks->pendidikan == "06")                                   
                                    D3                                            
                                    @elseif($anaks->pendidikan == "07")                                              
                                    D2                                               
                                    @elseif($anaks->pendidikan == "08")                                             
                                    D1                                             
                                    @elseif($anaks->pendidikan == "09")                                     
                                    SLTA                                    
                                    @elseif($anaks->pendidikan == "10")                                       
                                    SLTP                                             
                                    @elseif($anaks->pendidikan == "11")                                             
                                    SD
                                    @elseif($anaks->pendidikan == "12")                                             
                                    Belum Sekolah
                                    @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PEKERJAAN</th>
                            <td><b>{{$anaks->pekerjaan}}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Anak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('anak_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Anak</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Anak" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                <option value="P">Pria</option>
                                                <option value="W">Wanita</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="exampleEmail" placeholder="Tempat Lahir" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Anak</b></label>
                                                <div class="col-sm-10"><select name="status_anak" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Status Anak-</option>
                                                <option value="1">Anak Kandung</option>
                                                <option value="2">Anak Tiri</option>
                                                <option value="3">Anak Angkat</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Pendidikan</b></label>
                                                <div class="col-sm-10"><select name="pendidikan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Pendidikan-</option>
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
                                                <option value="12">Belum Sekolah</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan *</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan *" type="text" class="form-control" value="" required></div>          
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



@foreach($anak as $anaks)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$anaks->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Anak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="anak/update/{{$anaks->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Anak</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Anak" type="text" class="form-control" value="{{$anaks->nama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                                <div class="col-sm-10"><select name="jenis_kelamin" id="exampleSelect" class="form-control" value="{{$anaks->jenis_kelamin}}" required>
                                                <option value="" disabled selected>-Pilih Jenis Kelamin-</option>
                                                @if($anaks->jenis_kelamin == "P")
                                                <option value="P" selected>Pria</option>
                                                <option value="W">Wanita</option>
                                                @elseif($anaks->jenis_kelamin == "W")
                                                <option value="P">Pria</option>
                                                <option value="W" selected>Wanita</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                                <div class="col-sm-10"><input name="tempat_lahir" id="exampleEmail" placeholder="Tempat Lahir" type="text" class="form-control" value="{{$anaks->tempat_lahir}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($anaks->tanggal_lahir)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Anak</b></label>
                                                <div class="col-sm-10"><select name="status_anak" id="exampleSelect" class="form-control" value="{{$anaks->status_anak}}"  required>
                                                <option value="" disabled selected>-Pilih Status Anak-</option>
                                                @if($anaks->status_anak == "1")
                                                <option value="1" selected>Anak Kandung</option>
                                                <option value="2">Anak Tiri</option>
                                                <option value="3">Anak Angkat</option>
                                                @elseif($anaks->status_anak == "2")
                                                <option value="1">Anak Kandung</option>
                                                <option value="2" selected>Anak Tiri</option>
                                                <option value="3">Anak Angkat</option>
                                                @elseif($anaks->status_anak == "3")
                                                <option value="1">Anak Kandung</option>
                                                <option value="2">Anak Tiri</option>
                                                <option value="3" selected>Anak Angkat</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Pendidikan</b></label>
                                                <div class="col-sm-10"><select name="pendidikan" id="exampleSelect" class="form-control" value="{{$anaks->pendidikan}}" required>
                                                <option value="" disabled selected>-Pilih Pendidikan-</option>
                                                @if($anaks->pendidikan == "01")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "02")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "03")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "04")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "05")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "06")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "07")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "08")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "09")
                                                <option value="01">S3 (Setara)</option>
                                                <option value="02" selected>S2 (Setara)</option>
                                                <option value="03">S1 (Setara)</option>
                                                <option value="04">D4</option>
                                                <option value="05">SM</option>
                                                <option value="06">D3</option>
                                                <option value="07">D2</option>
                                                <option value="08">D1</option>
                                                <option value="09" selected>SLTA</option>
                                                <option value="10">SLTP</option>
                                                <option value="11">SD</option>
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "10")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "11")
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
                                                <option value="12">Belum Sekolah</option>
                                                @elseif($anaks->pendidikan == "12")
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
                                                <option value="12" selected>Belum Sekolah</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan *</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan *" type="text" class="form-control" value="{{$anaks->pekerjaan}}" required></div>          
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


@foreach($anak as $anaks)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$anaks->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Anak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="anak/delete/{{$anaks->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Anak" <b></b> </p></center></p>
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


