<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-form_skp')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($form_skp as $form_skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$form_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Form SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$form_skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEGIATAN TUGAS JABATAN 1</th>
                            <td><b>{{$form_skps->kegiatan_tugas_jabatan_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEGIATAN TUGAS JABATAN 2</th>
                            <td><b>{{$form_skps->kegiatan_tugas_jabatan_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">AK</th>
                            <td><b>{{$form_skps->ak}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KUANT OUTPUT 1</th>
                            <td><b>{{$form_skps->kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KUANT OUTPUT 2</th>
                            <td><b>{{$form_skps->kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KUAL MUTU</th>
                            <td><b>{{$form_skps->kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">WAKTU</th>
                            <td><b>{{$form_skps->waktu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">BIAYA</th>
                            <td><b>{{$form_skps->biaya}}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Form SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('form_skp_tambah')}}" method="post">
                                            @csrf  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Jabatan 1</b></label>
                                                <div class="col-sm-10"><textarea name="kegiatan_tugas_jabatan_1" id="exampleEmail" placeholder="Contoh : (Melakukan pengkajian keperawatan pada individu)" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Jabatan 2</b></label>
                                                <div class="col-sm-10"><input name="kegiatan_tugas_jabatan_2" id="exampleEmail" placeholder="Contoh : (0,310)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK</b></label>
                                                <div class="col-sm-10"><input name="ak" id="exampleEmail" placeholder="Contoh : (1,86)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="kual_mutu" id="exampleEmail" placeholder="Contoh (100)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Waktu</b></label>
                                                <div class="col-sm-10"><input name="waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Biaya</b></label>
                                                <div class="col-sm-10"><input name="biaya" id="exampleEmail" placeholder="Biaya" type="text" class="form-control" value="" required></div>          
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



@foreach($form_skp as $form_skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$form_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Form SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="form_skp/update/{{$form_skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" value="{{$form_skps->kategori}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            @if($form_skps->kategori == "Semester 1")
                                                                            <option value="Semester 1" selected>Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($form_skps->kategori == "Semester 2")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2" selected>Semester 2</option>
                                                                            <option value="Setahun">setahun</option>
                                                                            @elseif($form_skps->kategori == "Setahun")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun" selected>Setahun</option>
                                                                            @endif
                                                                            
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Jabatan 1</b></label>
                                                <div class="col-sm-10"><input name="kegiatan_tugas_jabatan_1" id="exampleEmail" placeholder="Contoh : (Melakukan pengkajian keperawatan pada individu)" type="text" class="form-control" value="{{$form_skps->kegiatan_tugas_jabatan_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiata Tugas Jabatan 2</b></label>
                                                <div class="col-sm-10"><input name="kegiatan_tugas_jabatan_2" id="exampleEmail" placeholder="Contoh : (0,310)" type="text" class="form-control" value="{{$form_skps->kegiatan_tugas_jabatan_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK</b></label>
                                                <div class="col-sm-10"><input name="ak" id="exampleEmail" placeholder="Contoh : (1,86)" type="text" class="form-control" value="{{$form_skps->ak}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="{{$form_skps->kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="{{$form_skps->kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="kual_mutu" id="exampleEmail" placeholder="Contoh (100)" type="number" class="form-control" value="{{$form_skps->kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Waktu</b></label>
                                                <div class="col-sm-10"><input name="kual_mutu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="{{$form_skps->waktu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Biaya</b></label>
                                                <div class="col-sm-10"><input name="biaya" id="exampleEmail" placeholder="Biaya" type="text" class="form-control" value="{{$form_skps->biaya}}" required></div>          
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


@foreach($form_skp as $form_skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$form_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Form SKP </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="form_skp/delete/{{$form_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Form SKP" <b></b> </p></center></p>
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



