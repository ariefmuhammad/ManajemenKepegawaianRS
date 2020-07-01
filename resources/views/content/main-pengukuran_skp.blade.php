<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-pengukuran_skp')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>

@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            @if($pengukuran_skps->kategori_pengukuran == "Kegiatan Tugas Tambahan")
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Pengukuran SKP (Kegiatan Tugas Tambahan)</h5>
            @elseif($pengukuran_skps->kategori_pengukuran == "Tugas Tambahan")
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Pengukuran SKP (Tugas Tambahan)</h5>
            @elseif($pengukuran_skps->kategori_pengukuran == "Kreativitas")
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Pengukuran SKP (Kreativitas)</h5>
            @endif
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$pengukuran_skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEGIATAN TUGAS TAMBAHAN</th>
                            <td><b>{{$pengukuran_skps->kegiatan_tugas_tambahan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI PENGUKURAN</th>
                            <td><b>{{$pengukuran_skps->kategori_pengukuran}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">AK TARGET</th>
                            <td><b>{{$pengukuran_skps->ak_target}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->target_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->target_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->target_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET WAKTU</th>
                            <td><b>{{$pengukuran_skps->target_waktu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TARGET BIAYA</th>
                            <td><b>{{$pengukuran_skps->target_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">AK REALISASI</th>
                            <td><b>{{$pengukuran_skps->ak_realisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->realisasi_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->realisasi_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI KAUL MUTU</th>
                            <td><b>{{$pengukuran_skps->realisasi_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI WAKTU</th>
                            <td><b>{{$pengukuran_skps->realisasi_waktu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REALISASI BIAYA</th>
                            <td><b>{{$pengukuran_skps->realisasi_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">PERHITUNGAN</th>
                            <td><b>{{$pengukuran_skps->penghitungan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">Nilai Capaian SKP</th>
                            <td><b>{{$pengukuran_skps->nilai_capaian_skp}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL AK TARGET</th>
                            <td><b>{{$pengukuran_skps->total_ak_target}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->total_target_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->total_target_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->total_target_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL TARGET BIAYA</th>
                            <td><b>{{$pengukuran_skps->total_target_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL AK REALISASI</th>
                            <td><b>{{$pengukuran_skps->total_ak_realisasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUANT OUTPUT 1</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kuant_output_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUANT OUTPUT 2</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kuant_output_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI KUAL MUTU</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_kual_mutu}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL REALISASI BIAYA</th>
                            <td><b>{{$pengukuran_skps->total_realisasi_biaya}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL PERHITUNGAN</th>
                            <td><b>{{$pengukuran_skps->total_penghitungan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAIAN SKP 1</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAIAN SKP 2</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TOTAL NILAI CAPAI SKP 3</th>
                            <td><b>{{$pengukuran_skps->total_nilai_capaian_skp_3}}</b></td>
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
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengukuran SKP (Tugas Tambahan)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('pengukuran_skp_tambah')}}" method="post">
                                            @csrf
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori Pengukuran</b></label>
                                                <div class="col-sm-10"><select name="kategori_pengukuran" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled>-Pilih Kategori Pengukuran-</option>
                                                                            <option value="kegiatan Tugas Tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                        </select></div>          
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori Pengukuran</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="Kategori Pengukuran" type="text" class="form-control" value="Tugas Tambahan" disabled required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Tambahan</b></label>
                                                <div class="col-sm-10"><textarea name="kegiatan_tugas_tambahan" id="exampleEmail" placeholder="Contoh : (Melakukan pengkajian keperawatan pada individu)" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Target</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="Contoh : (1,86)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="target_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Waktu</b></label>
                                                <div class="col-sm-10"><input name="target_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="target_biaya" id="exampleEmail" placeholder="Target Biaya" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="ak_realisasi" id="exampleEmail" placeholder="Contoh (1,86)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Relisasi Kuant Mutu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Waktu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Biaya</b></label>
                                                <div class="col-sm-10"><input name="realisasi_biaya" id="exampleEmail" placeholder="Realisai Biaya" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Perhitungan</b></label>
                                                <div class="col-sm-10"><input name="penghitungan" id="exampleEmail" placeholder="Perhitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Capaian SKP</b></label>
                                                <div class="col-sm-10"><input name="nilai_capaian_skp" id="exampleEmail" placeholder="Nilai Capaian SKP" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Target</b></label>
                                                <div class="col-sm-10"><input name="total_ak_target" id="exampleEmail" placeholder="Total AK Target" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_1" id="exampleEmail" placeholder="Total Target Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_2" id="exampleEmail" placeholder="Total Target Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_target_kual_mutu" id="exampleEmail" placeholder="Total Target Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_target_biaya" id="exampleEmail" placeholder="Total Target Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="total_ak_realisasi" id="exampleEmail" placeholder="Total AK Realisasi" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_1" id="exampleEmail" placeholder="Total Realisasi Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_2" id="exampleEmail" placeholder="Total Realisasi Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kual_mutu" id="exampleEmail" placeholder="Total Realisasi Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_biaya" id="exampleEmail" placeholder="Total Realisasi Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Penghitungan</b></label>
                                                <div class="col-sm-10"><input name="total_penghitungan" id="exampleEmail" placeholder="Total Penghitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 1</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_1" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 2</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_2" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 3</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_3" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 3" type="number" class="form-control" value="" required></div>          
                                            </div> -->
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


<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeTambah2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengukuran SKP (Kreativitas)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('pengukuran_skp_tambah')}}" method="post">
                                            @csrf
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori Pengukuran</b></label>
                                                <div class="col-sm-10"><select name="kategori_pengukuran" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled>-Pilih Kategori Pengukuran-</option>
                                                                            <option value="kegiatan Tugas Tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                        </select></div>          
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori Pengukuran</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="Kategori Pengukuran" type="text" class="form-control" value="Kreativitas" disabled required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Tambahan</b></label>
                                                <div class="col-sm-10"><textarea name="kegiatan_tugas_tambahan" id="exampleEmail" placeholder="Contoh : (Melakukan pengkajian keperawatan pada individu)" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Target</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="Contoh : (1,86)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="target_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Waktu</b></label>
                                                <div class="col-sm-10"><input name="target_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="target_biaya" id="exampleEmail" placeholder="Target Biaya" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="ak_realisasi" id="exampleEmail" placeholder="Contoh (1,86)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Relisasi Kuant Mutu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Waktu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Biaya</b></label>
                                                <div class="col-sm-10"><input name="realisasi_biaya" id="exampleEmail" placeholder="Realisai Biaya" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Perhitungan</b></label>
                                                <div class="col-sm-10"><input name="penghitungan" id="exampleEmail" placeholder="Perhitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Capaian SKP</b></label>
                                                <div class="col-sm-10"><input name="nilai_capaian_skp" id="exampleEmail" placeholder="Nilai Capaian SKP" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Target</b></label>
                                                <div class="col-sm-10"><input name="total_ak_target" id="exampleEmail" placeholder="Total AK Target" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_1" id="exampleEmail" placeholder="Total Target Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_2" id="exampleEmail" placeholder="Total Target Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_target_kual_mutu" id="exampleEmail" placeholder="Total Target Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_target_biaya" id="exampleEmail" placeholder="Total Target Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="total_ak_realisasi" id="exampleEmail" placeholder="Total AK Realisasi" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_1" id="exampleEmail" placeholder="Total Realisasi Kuant Output 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_2" id="exampleEmail" placeholder="Total Realisasi Kuant Output 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kual_mutu" id="exampleEmail" placeholder="Total Realisasi Kual Mutu" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_biaya" id="exampleEmail" placeholder="Total Realisasi Biaya" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Penghitungan</b></label>
                                                <div class="col-sm-10"><input name="total_penghitungan" id="exampleEmail" placeholder="Total Penghitungan" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 1</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_1" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 1" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 2</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_2" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 2" type="number" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 3</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_3" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 3" type="number" class="form-control" value="" required></div>          
                                            </div> -->
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




@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            @if($pengukuran_skps->kategori_pengukuran == "Kegiatan Tugas Tambahan")
                <h5 class="modal-title" id="exampleModalLongTitle">Lengkapi / Ubah Data Pengukuran SKP (Kegiatan Tugas Tambahan)</h5>
            @elseif($pengukuran_skps->kategori_pengukuran == "Tugas Tambahan")
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Pengukuran SKP (Tugas Tambahan)</h5>
            @elseif($pengukuran_skps->kategori_pengukuran == "Kreativitas")
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Pengukuran SKP (Kreativitas)</h5>
            @endif
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="pengukuran_skp/update/{{$pengukuran_skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori Pengukuran</b></label>
                                                <div class="col-sm-10"><select name="kategori_pengukuran" id="exampleSelect" class="form-control" value="{{$pengukuran_skps->kategori_pengukuran}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori Pengukuran-</option>
                                                                            @if($pengukuran_skps->kategori_pengukuran == "Kegiatan Tugas Tambahan")
                                                                            <option value="Kegiatan Tugas Tambahan" selected>Kegiatan Tugas Tambahan</option>
                                                                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                            @elseif($pengukuran_skps->kategori_pengukuran == "Tugas Tambahan")
                                                                            <option value="Kegiatan Tugas Tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="Tugas Tambahan" selected>Tugas Tambahan</option>
                                                                            <option value="kreativitas">Kreativitas</option>
                                                                            @elseif($pengukuran_skps->kategori_pengukuran == "Kreativitas")
                                                                            <option value="Kegiatan Tugas Tambahan">Kegiatan Tugas Tambahan</option>
                                                                            <option value="Tugas Tambahan">Tugas Tambahan</option>
                                                                            <option value="Kreativitas" selected>Kreativitas</option>
                                                                            @endif
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" value="{{$pengukuran_skps->kategori}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            @if($pengukuran_skps->kategori == "Semester 1")
                                                                            <option value="Semester 1" selected>Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($pengukuran_skps->kategori == "Semester 2")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2" selected>Semester 2</option>
                                                                            <option value="Setahun">setahun</option>
                                                                            @elseif($pengukuran_skps->kategori == "Setahun")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="Semester 2">Semester 2</option>
                                                                            <option value="Setahun" selected>Setahun</option>
                                                                            @endif
                                                                            
                                                                        </select></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kegiatan Tugas Tambahan</b></label>
                                                <div class="col-sm-10"><textarea name="kegiatan_tugas_tambahan" id="exampleEmail" placeholder="Contoh : (Melakukan pengkajian keperawatan pada individu)" type="text" class="form-control" value="{{$pengukuran_skps->kegiatan_tugas_tambahan}}" required>{{$pengukuran_skps->kegiatan_tugas_tambahan}}</textarea></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Target</b></label>
                                                <div class="col-sm-10"><input name="ak_target" id="exampleEmail" placeholder="Contoh : (1,86)" type="text" class="form-control" value="{{$pengukuran_skps->ak_target}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="{{$pengukuran_skps->target_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="target_kuant_output_2" id="exampleEmail" placeholder="(Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="{{$pengukuran_skps->target_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="target_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="{{$pengukuran_skps->target_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Waktu</b></label>
                                                <div class="col-sm-10"><input name="target_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="{{$pengukuran_skps->target_waktu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="target_biaya" id="exampleEmail" placeholder="Target Biaya" type="text" class="form-control" value="{{$pengukuran_skps->target_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="ak_realisasi" id="exampleEmail" placeholder="Contoh (1,86)" type="text" class="form-control" value="{{$pengukuran_skps->ak_realisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_1" id="exampleEmail" placeholder="Contoh : (6)" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_kuant_output_1}}" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kuant_output_2" id="exampleEmail" placeholder="Contoh : (Laporan, Tindakan, Pasien, Sertifikat, Jpl)" type="text" class="form-control" value="{{$pengukuran_skps->realisasi_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Relisasi Kuant Mutu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_kual_mutu" id="exampleEmail" placeholder="Contoh : (100)" type="number" class="form-control" value="{{$pengukuran_skps->realisasi_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Waktu</b></label>
                                                <div class="col-sm-10"><input name="realisasi_waktu" id="exampleEmail" placeholder="Contoh : (6 Bulan)" type="text" class="form-control" value="{{$pengukuran_skps->realisasi_waktu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Realisai Biaya</b></label>
                                                <div class="col-sm-10"><input name="realisasi_biaya" id="exampleEmail" placeholder="Realisai Biaya" type="text" class="form-control" value="{{$pengukuran_skps->realisasi_biaya}}" required></div>          
                                            </div>
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Perhitungan</b></label>
                                                <div class="col-sm-10"><input name="penghitungan" id="exampleEmail" placeholder="Perhitungan" type="number" class="form-control" value="{{$pengukuran_skps->penghitungan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Capaian SKP</b></label>
                                                <div class="col-sm-10"><input name="nilai_capaian_skp" id="exampleEmail" placeholder="Nilai Capaian SKP" type="number" class="form-control" value="{{$pengukuran_skps->nilai_capaian_skp}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Target</b></label>
                                                <div class="col-sm-10"><input name="total_ak_target" id="exampleEmail" placeholder="Total AK Target" type="number" class="form-control" value="{{$pengukuran_skps->total_ak_target}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_1" id="exampleEmail" placeholder="Total Target Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_target_kuant_output_2" id="exampleEmail" placeholder="Total Target Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kuant_output_2}}" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_target_kual_mutu" id="exampleEmail" placeholder="Total Target Kual Mutu" type="number" class="form-control" value="{{$pengukuran_skps->total_target_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Target Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_target_biaya" id="exampleEmail" placeholder="Total Target Biaya" type="number" class="form-control" value="{{$pengukuran_skps->total_target_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Realisasi</b></label>
                                                <div class="col-sm-10"><input name="total_ak_realisasi" id="exampleEmail" placeholder="Total AK Realisasi" type="number" class="form-control" value="{{$pengukuran_skps->total_ak_realisasi}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 1</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_1" id="exampleEmail" placeholder="Total Realisasi Kuant Output 1" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kuant_output_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kuant Output 2</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kuant_output_2" id="exampleEmail" placeholder="Total Realisasi Kuant Output 2" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kuant_output_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Kual Mutu</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_kual_mutu" id="exampleEmail" placeholder="Total Realisasi Kual Mutu" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_kual_mutu}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Realisasi Biaya</b></label>
                                                <div class="col-sm-10"><input name="total_realisasi_biaya" id="exampleEmail" placeholder="Total Realisasi Biaya" type="number" class="form-control" value="{{$pengukuran_skps->total_realisasi_biaya}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total Penghitungan</b></label>
                                                <div class="col-sm-10"><input name="total_penghitungan" id="exampleEmail" placeholder="Total Penghitungan" type="number" class="form-control" value="{{$pengukuran_skps->total_penghitungan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 1</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_1" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 1" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 2</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_2" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 2" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_2}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Total AK Nilai Capaian SKP 3</b></label>
                                                <div class="col-sm-10"><input name="total_nilai_capaian_skp_3" id="exampleEmail" placeholder="Total AK Nilai Capaian SKP 3" type="number" class="form-control" value="{{$pengukuran_skps->total_nilai_capaian_skp_3}}" required></div>          
                                            </div>   -->
                                      
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


@foreach($pengukuran_skp as $pengukuran_skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$pengukuran_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        @if($pengukuran_skps->kategori_pengukuran == "Kegiatan Tugas Tambahan")
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Pengukuran SKP (Kegiatan Tugas Tambahan)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="pengukuran_skp/delete/{{$pengukuran_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Pengukuran SKP (Kegiatan Tugas Tambahan)" <b></b> </p></center></p>
            </div>
            @elseif($pengukuran_skps->kategori_pengukuran == "Tugas Tambahan")
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Pengukuran SKP (Tugas Tambahan)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="pengukuran_skp/delete/{{$pengukuran_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Pengukuran SKP (Tugas Tambahan)" <b></b> </p></center></p>
            </div>
            @elseif($pengukuran_skps->kategori_pengukuran == "Kreativitas")
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Pengukuran SKP (Kreativitas)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="pengukuran_skp/delete/{{$pengukuran_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Pengukuran SKP (Kreativitas)" <b></b> </p></center></p>
            </div>
            @endif
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



