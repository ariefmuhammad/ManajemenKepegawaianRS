<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-hukum_disiplin')
    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>


@foreach($hukum_disiplin as $hukum_disiplins)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$hukum_disiplins->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Hukum Disiplin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tahun :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->tahun}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->golongan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>TMT Golongan :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->tmt_golongan}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Pejabat Penandatangan SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->pejabat_penandatangan_sk}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Nomor SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->nomor_sk}}</b></h6></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-4 col-form-label"><b>Tanggal SK :</b></label>
                                                <div class="col-sm-8 col-form-label col-form-text"><h6><b>{{$hukum_disiplins->tanggal_sk}}</b></h6></div>          
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Hukum Disiplin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('hukum_disiplin_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kode Hukuman</b></label>
                                                <div class="col-sm-10"><select name="kode_hukuman" id="exampleSelect" class="form-control" required>
                                                <option value="" disabled selected>-Pilih Kode Hukuman-</option>
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="nomor_sk" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal SK</b></label>
                                                <div class="col-sm-10"><input name="tanggal_sk" id="exampleEmail" placeholder="Tanggal SK" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT BERLAKU</b></label>
                                                <div class="col-sm-10"><input name="tmt_berlaku" id="exampleEmail" placeholder="TMT BERLAKU" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pejabat Pembuat SK</b></label>
                                                <div class="col-sm-10"><input name="penjabat_pembuat_sk" id="exampleEmail" placeholder="Pejabat Pembuat SK" type="text" class="form-control" value="" required></div>          
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



@foreach($hukum_disiplin as $hukum_disiplins)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$hukum_disiplins->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Hukum Disiplin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="riwayat_diklat_perjenjangan_struktural/update/{{$hukum_disiplins->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label"><b>Kode Hukuman</b></label>
                                                <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control" required value="{{$hukum_disiplins->kode_hukuman}}">
                                                @if($hukum_disiplins->kode_hukuman == "11")
                                                <option value="11" selected>11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "12")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12" selected>12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "13")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13" selected>13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "21")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21" selected>21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "22")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22" selected>22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "23")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23" selected>23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "31")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31" selected>31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32">32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @elseif($hukum_disiplins->kode_hukuman == "32")
                                                <option value="11">11 - Hukuman Ringan Teguran Lisan</option>
                                                <option value="12">12 - Hukuman Ringan Teguran Tertulis</option>
                                                <option value="13">13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis</option>
                                                <option value="21">21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="22">22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun</option>
                                                <option value="23">23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun</option>
                                                <option value="31">31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun</option>
                                                <option value="32" selected>32 - Hukuman Berat Pembebasan dari Jabatan</option>
                                                @endif
                                                </select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nomor SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Nomor SK" type="number" class="form-control" value="{{$hukum_disiplins->nomor_sk}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Tanggal SK" type="date" class="form-control" value="{{$hukum_disiplins->tanggal_sk}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>TMT BERLAKU</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="TMT BERLAKU" type="date" class="form-control" value="{{$hukum_disiplins->tmt_berlaku}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Pejabat Pembuat SK</b></label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Pejabat Pembuat SK" type="text" class="form-control" value="{{$hukum_disiplins->penjabat_pembuat_sk}}" required></div>          
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


@foreach($hukum_disiplin as $hukum_disiplins)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$hukum_disiplins->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Hukum Disiplin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="riwayat_diklat_perjenjangan_struktural/delete/{{$hukum_disiplins->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Hukum Disiplin" <b></b> </p></center></p>
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