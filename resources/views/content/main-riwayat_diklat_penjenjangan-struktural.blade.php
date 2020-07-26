<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-riwayat_diklat_penjenjangan-struktural')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">JENIS DIKLAT</th>
                            <td><b>@if($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "1")
                                    Diklatpim Tk I
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "2")
                                    Diklatpim Tk II                                              
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "3")
                                    Diklatpim Tk III
                                    @elseif($riwayat_diklat_penjenjangan_strukturals->id == "4")
                                    Diklatpim Tk IV Atau diklat lain yang setara
                                    @endif</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">ANGKATAN</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->angkatan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">LOKASI</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->lokasi}}</b></td>
                        </tr>
                      
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL MULAI</th>
                            <td><b>{{ \Carbon\Carbon::parse($riwayat_diklat_penjenjangan_strukturals->tanggal_mulai)->translatedFormat('d F Y')}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL SELESAI</th>
                            <td><b>{{ \Carbon\Carbon::parse($riwayat_diklat_penjenjangan_strukturals->tanggal_selesai)->translatedFormat('d F Y')}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH JAM</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->jumlah_jam}}</b></td>
                        </tr>
                            <th scope="row" class="sidetable">PENYELENGGARA</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->penyelenggara}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PREDIKAT</th>
                            <td><b>{{$riwayat_diklat_penjenjangan_strukturals->predikat}}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('riwayat_diklat_penjenjangan_struktural_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Diklat</b></label>
                                                <div class="col-sm-10"><select name="jenis_diklat" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Jenis Diklat-</option>
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Angkatan</b></label>
                                                <div class="col-sm-10"><input name="angkatan" id="exampleEmail" placeholder="Angkatan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Jam</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jam" id="exampleEmail" placeholder="Jumlah Jam" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Predikat</b></label>
                                                <div class="col-sm-10"><input name="predikat" id="exampleEmail" placeholder="Predikat" type="text" class="form-control" value="" required></div>          
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



@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Riwayat Diklat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="riwayat_diklat_penjenjangan_struktural/update/{{$riwayat_diklat_penjenjangan_strukturals->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Jenis Diklat</b></label>
                                                <div class="col-sm-10"><select name="jenis_diklat" id="exampleSelect" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->jenis_diklat}}" required>
                                                <option value="" disabled selected>-Pilih Jenis Diklat-</option>
                                                @if($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "1")
                                                <option value="1" selected>Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "2")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2" selected>Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->jenis_diklat == "3")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3" selected>Diklatpim Tk III</option>
                                                <option value="4">Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @elseif($riwayat_diklat_penjenjangan_strukturals->id == "4")
                                                <option value="1">Diklatpim Tk I</option>
                                                <option value="2">Diklatpim Tk II</option>
                                                <option value="3">Diklatpim Tk III</option>
                                                <option value="4" selected>Diklatpim Tk IV Atau diklat lain yang setara</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Angkatan</b></label>
                                                <div class="col-sm-10"><input name="angkatan" id="exampleEmail" placeholder="Angkatan" type="number" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->angkatan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Lokasi</b></label>
                                                <div class="col-sm-10"><input name="lokasi" id="exampleEmail" placeholder="Lokasi" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->lokasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_mulai" id="exampleEmail" placeholder="Tanggal Mulai" type="date" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->tanggal_mulai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_selesai" id="exampleEmail" placeholder="Tanggal Selesai" type="date" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->tanggal_selesai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Jam</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jam" id="exampleEmail" placeholder="Jumlah Jam" type="number" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->jumlah_jam}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Penyelenggara</b></label>
                                                <div class="col-sm-10"><input name="penyelenggara" id="exampleEmail" placeholder="Penyelenggara" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->penyelenggara}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Predikat</b></label>
                                                <div class="col-sm-10"><input name="predikat" id="exampleEmail" placeholder="Predikat" type="text" class="form-control" value="{{$riwayat_diklat_penjenjangan_strukturals->predikat}}" required></div>          
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


@foreach($riwayat_diklat_penjenjangan_struktural as $riwayat_diklat_penjenjangan_strukturals)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$riwayat_diklat_penjenjangan_strukturals->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Riwayat Penjenjang / Struktural</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="riwayat_diklat_penjenjangan_struktural/delete/{{$riwayat_diklat_penjenjangan_strukturals->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Riwayat Penjenjang / Struktural" <b></b> </p></center></p>
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


