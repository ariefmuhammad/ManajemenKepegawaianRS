<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-istri-suami')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>



@foreach($istri_suami as $istri_suamis)
@if($pegawai_id->jenis_kelamin == "P")
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Istri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA ISTRI</th>
                            <td><b>{{$istri_suamis->nama}}</b></td> 
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NOMOR KARIS (KARTU ISTRI)</th>
                            <td><b>{{$istri_suamis->nomor_karis_karsu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL LAHIR ISTRI</th>
                            <td><b>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_lahir)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL NIKAH</th>
                            <td><b>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_nikah)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TINGKAT PENDIDIKAN ISTRI</th>
                            <td><b>@if($istri_suamis->tingkat_pendidikan == "01") 
                                S3 (Setara)                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "02") 
                                S2 (Setara)                                              
                                @elseif($istri_suamis->tingkat_pendidikan == "03")                                    
                                S1 (Setara)                      
                                @elseif($istri_suamis->tingkat_pendidikan == "04")                                              
                                D4                                          
                                @elseif($istri_suamis->tingkat_pendidikan == "05")                                             
                                SM                                       
                                @elseif($istri_suamis->tingkat_pendidikan == "06")                                   
                                D3                                            
                                @elseif($istri_suamis->tingkat_pendidikan == "07")                                              
                                D2                                               
                                @elseif($istri_suamis->tingkat_pendidikan == "08")                                             
                                D1                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "09")                                     
                                SLTA                                    
                                @elseif($istri_suamis->tingkat_pendidikan == "10")                                       
                                SLTP                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "11")                                             
                                SD
                                @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PEKERJAAN ISTRI</th>
                            <td><b>{{$istri_suamis->pekerjaan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">STATUS ISTRI</th>
                            <td><b>@if($istri_suamis->status_suami_istri == "1")
                                    Istri Saat Ini                                          
                                    @elseif($istri_suamis->status_suami_istri == "2")                                              
                                    Telah Meninggal Dunia                                              
                                    @elseif($istri_suamis->status_suami_istri == "3")                                 
                                    Cerai
                                    @endif</b></td>
                        </tr>
                    </tbody>
                </table>                                        
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-arternate" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                
            </div>
        </div>
    </div>
</div>
<!-- Modal Lihat -->
@elseif($pegawai_id->jenis_kelamin == "W")
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">NAMA SUAMI</th>
                            <td><b>{{$istri_suamis->nama}}</b></td> 
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NOMOR KARIS (KARTU SUAMI)</th>
                            <td><b>{{$istri_suamis->nomor_karis_karsu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL LAHIR SUAMI</th>
                            <td><b>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_lahir)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL NIKAH</th>
                            <td><b>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_nikah)->translatedFormat('d F Y') }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TINGKAT PENDIDIKAN SUAMI</th>
                            <td><b>@if($istri_suamis->tingkat_pendidikan == "01") 
                                S3 (Setara)                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "02") 
                                S2 (Setara)                                              
                                @elseif($istri_suamis->tingkat_pendidikan == "03")                                    
                                S1 (Setara)                      
                                @elseif($istri_suamis->tingkat_pendidikan == "04")                                              
                                D4                                          
                                @elseif($istri_suamis->tingkat_pendidikan == "05")                                             
                                SM                                       
                                @elseif($istri_suamis->tingkat_pendidikan == "06")                                   
                                D3                                            
                                @elseif($istri_suamis->tingkat_pendidikan == "07")                                              
                                D2                                               
                                @elseif($istri_suamis->tingkat_pendidikan == "08")                                             
                                D1                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "09")                                     
                                SLTA                                    
                                @elseif($istri_suamis->tingkat_pendidikan == "10")                                       
                                SLTP                                             
                                @elseif($istri_suamis->tingkat_pendidikan == "11")                                             
                                SD
                                @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PEKERJAAN SUAMI</th>
                            <td><b>{{$istri_suamis->pekerjaan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">STATUS SUAMI</th>
                            <td><b>@if($istri_suamis->status_suami_istri == "1")
                                    Suami Saat Ini                                          
                                    @elseif($istri_suamis->status_suami_istri == "2")                                              
                                    Telah Meninggal Dunia                                              
                                    @elseif($istri_suamis->status_suami_istri == "3")                                 
                                    Cerai
                                    @endif</b></td>
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
@endif

@endforeach


@if($pegawai_id->jenis_kelamin == "P")
<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Istri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('istri_suami_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Istri</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Istri" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Karis / Karsu (Istri)</b></label>
                                                <div class="col-sm-10"><input name="nomor_karis_karsu" id="exampleEmail" placeholder="Nomor Karis / Karsu (Istri)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir Istri</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir Istri" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Nikah</b></label>
                                                <div class="col-sm-10"><input name="tanggal_nikah" id="exampleEmail" placeholder="Tanggal Nikah" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan Istri</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Tingkat Pendidikan Istri-</option>
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
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan Istri</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan Istri" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Istri</b></label>
                                                <div class="col-sm-10"><select name="status_suami_istri" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Status Istri-</option>
                                                <option value="1">Istri Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                </select></div>
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
@elseif($pegawai_id->jenis_kelamin == "W")
<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('istri_suami_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Suami</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Suami" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Karis / Karsu (Suami)</b></label>
                                                <div class="col-sm-10"><input name="nomor_karis_karsu" id="exampleEmail" placeholder="Nomor Karis / Karsu (Suami)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir Suami</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir Suami" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Nikah</b></label>
                                                <div class="col-sm-10"><input name="tanggal_nikah" id="exampleEmail" placeholder="Tanggal Nikah" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan Suami</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Tingkat Pendidikan Suami-</option>
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
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan Suami</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan Suami" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Suami</b></label>
                                                <div class="col-sm-10"><select name="status_suami_istri" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Status Suami-</option>
                                                <option value="1">Suami Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                </select></div>
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
@endif



@foreach($istri_suami as $istri_suamis)
@if($pegawai_id->jenis_kelamin == "P")
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Istri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="istri_suami/update/{{$istri_suamis->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Istri</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Istri" type="text" class="form-control" value="{{$istri_suamis->nama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Karis / Karsu (Istri)</b></label>
                                                <div class="col-sm-10"><input name="nomor_karis_karsu" id="exampleEmail" placeholder="Nomor Karis / Karsu (Istri)" type="number" class="form-control" value="{{$istri_suamis->nomor_karis_karsu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir Istri</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir Istri" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($istri_suamis->tanggal_lahir)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Nikah</b></label>
                                                <div class="col-sm-10"><input name="tanggal_nikah" id="exampleEmail" placeholder="Tanggal Nikah" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($istri_suamis->tanggal_nikah)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan Istri</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control" value="{{$istri_suamis->tingkat_pendidikan}}" required>
                                                <option value="" disabled selected>-Pilih Tingkat Pendidikan Istri-</option>
                                                @if($istri_suamis->tingkat_pendidikan == "01") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "02") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "03") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "04") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "05") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "06") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "07") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "08") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "09") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "10") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "11") 
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
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan Istri</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan Istri" type="text" class="form-control" value="{{$istri_suamis->pekerjaan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Istri</b></label>
                                                <div class="col-sm-10"><select name="status_suami_istri" id="exampleSelect" class="form-control" value="{{$istri_suamis->status_suami_istri}}" required>
                                                <option value="" disabled selected>-Pilih Status Istri-</option>
                                                @if($istri_suamis->status_suami_istri == "1")
                                                <option value="1" selected>Istri Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                @elseif($istri_suamis->status_suami_istri == "2")
                                                <option value="1">Istri Saat Ini</option>
                                                <option value="2" selected>Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                @elseif($istri_suamis->status_suami_istri == "3")
                                                <option value="1">Istri Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3" selected>Cerai</option>
                                                @endif
                                                </select></div>
                                            </div>  
                                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-alternate"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
@elseif($pegawai_id->jenis_kelamin == "W")
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="istri_suami/update/{{$istri_suamis->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nama Suami</b></label>
                                                <div class="col-sm-10"><input name="nama" id="exampleEmail" placeholder="Nama Suami" type="text" class="form-control" value="{{$istri_suamis->nama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor Karis / Karsu (Suami)</b></label>
                                                <div class="col-sm-10"><input name="nomor_karis_karsu" id="exampleEmail" placeholder="Nomor Karis / Karsu (Suami)" type="number" class="form-control" value="{{$istri_suamis->nomor_karis_karsu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Lahir Suami</b></label>
                                                <div class="col-sm-10"><input name="tanggal_lahir" id="exampleEmail" placeholder="Tanggal Lahir" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($istri_suamis->tanggal_lahir)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Nikah</b></label>
                                                <div class="col-sm-10"><input name="tanggal_nikah" id="exampleEmail" placeholder="Tanggal Nikah" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($istri_suamis->tanggal_nikah)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Tingkat Pendidikan Suami</b></label>
                                                <div class="col-sm-10"><select name="tingkat_pendidikan" id="exampleSelect" class="form-control" value="{{$istri_suamis->tingkat_pendidikan}}" required>
                                                <option value="" disabled selected>-Pilih Tingkat Pendidikan Suami-</option>
                                                @if($istri_suamis->tingkat_pendidikan == "01") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "02") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "03") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "04") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "05") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "06") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "07") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "08") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "09") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "10") 
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
                                                @elseif($istri_suamis->tingkat_pendidikan == "11") 
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
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pekerjaan Suami</b></label>
                                                <div class="col-sm-10"><input name="pekerjaan" id="exampleEmail" placeholder="Pekerjaan Suami" type="text" class="form-control" value="{{$istri_suamis->pekerjaan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Status Suami</b></label>
                                                <div class="col-sm-10"><select name="status_suami_istri" id="exampleSelect" class="form-control" value="{{$istri_suamis->status_suami_istri}}" required>
                                                <option value="" disabled selected>-Pilih Status Suami-</option>
                                                @if($istri_suamis->status_suami_istri == "1")
                                                <option value="1" selected>Suami Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                @elseif($istri_suamis->status_suami_istri == "2")
                                                <option value="1">Suami Saat Ini</option>
                                                <option value="2" selected>Telah Meninggal Dunia</option>
                                                <option value="3">Cerai</option>
                                                @elseif($istri_suamis->status_suami_istri == "3")
                                                <option value="1">Suami Saat Ini</option>
                                                <option value="2">Telah Meninggal Dunia</option>
                                                <option value="3" selected>Cerai</option>
                                                @endif
                                                </select></div>
                                            </div>  
                                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Batal</button>
                <button type="submit" class="btn btn-alternate"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i> Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
@endif
@endforeach


@foreach($istri_suami as $istri_suamis)
@if($pegawai_id->jenis_kelamin == "P")
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Istri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="istri_suami/delete/{{$istri_suamis->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Istri" <b></b> </p></center></p>
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
@elseif($pegawai_id->jenis_kelamin == "W")
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$istri_suamis->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Suami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="istri_suami/delete/{{$istri_suamis->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Suami" <b></b> </p></center></p>
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
@endif
@endforeach

