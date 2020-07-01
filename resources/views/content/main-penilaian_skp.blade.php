<div class="app-main">
    @include('content.sidebar')
    <div class="app-main__outer">
    @include('content.content-penilaian_skp')

    @include('content.footer')
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
</div>


@foreach($penilaian_skp as $penilaian_skps)
<!-- Modal Lihat -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeDetail-{{$penilaian_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lihat Data Penilaian SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="mb-0 table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row" class="sidetable">KATEGORI</th>
                            <td><b>{{$penilaian_skps->kategori}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">SASARAN KERJA PEGAWAI</th>
                            <td><b>{{$penilaian_skps->sasaran_kerja_pegawai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">ORIENTASI PELAYANAN</th>
                            <td><b>{{$penilaian_skps->orientasi_pelayanan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">INTEGRITAS</th>
                            <td><b>{{$penilaian_skps->integritas}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KOMITMEN</th>
                            <td><b>{{$penilaian_skps->komitmen}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">DISIPLIN</th>
                            <td><b>{{$penilaian_skps->disiplin}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KERJASAMA</th>
                            <td><b>{{$penilaian_skps->kerjasama}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEPEMIMPINAN</th>
                            <td><b>{{$penilaian_skps->kepemimpinan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH</th>
                            <td><b>{{$penilaian_skps->jumlah}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">RATA - RATA</th>
                            <td><b>{{$penilaian_skps->rata_rata}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NILAI PERILKU KERJA</th>
                            <td><b>{{$penilaian_skps->nilai_perilaku_kerja}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH SARANA KERJA PEGAWAI</th>
                            <td><b>{{$penilaian_skps->jumlah_sasaran_kerja_pegawai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH ORIENTASI PELAYANAN</th>
                            <td><b>{{$penilaian_skps->jumlah_orientasi_pelayanan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH INTEGRITAS</th>
                            <td><b>{{$penilaian_skps->jumlah_integritas}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH KOMITMEN</th>
                            <td><b>{{$penilaian_skps->jumlah_komitmen}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH DISIPLIN</th>
                            <td><b>{{$penilaian_skps->jumlah_disiplin}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH KERJASAMA</th>
                            <td><b>{{$penilaian_skps->jumlah_kerjasama}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH KEPEMIMPINAN</th>
                            <td><b>{{$penilaian_skps->jumlah_kepemimpinan}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH JUMLAH</th>
                            <td><b>{{$penilaian_skps->jumlah_jumlah}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH RATA - RATA</th>
                            <td><b>{{$penilaian_skps->jumlah_rata_rata}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">JUMLAH NILAI PERILAKU KERJA</th>
                            <td><b>{{$penilaian_skps->jumlah_nilai_perilaku_kerja}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NILAI PRESTASI KERJA 1</th>
                            <td><b>{{$penilaian_skps->nilai_prestasi_kerja_1}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">NILAI PRESTASI KERJA 2</th>
                            <td><b>{{$penilaian_skps->nilai_prestasi_kerja_2}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEBERATAN PEGAWAI</th>
                            <td><b>{{$penilaian_skps->keberatan_pegawai}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL KEBERATAN PEGAWAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_keberatan_pegawai)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAPAN PEJABAT</th>
                            <td><b>{{$penilaian_skps->tanggapan_pejabat}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL TANGGAPAN PEJABAT</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_tanggapan_pejabat)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">KEPUTUSAN ATASAN PEJABAT</th>
                            <td><b>{{$penilaian_skps->keputusan_atasan_pejabat}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">TANGGAL KEPUTUSAN ATASAN PEJABAT</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_keputusan_atasan_pejabat)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">REKOMENDASI</th>
                            <td><b>{{$penilaian_skps->rekomendasi}}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">DIBUAT TANGGAL PEJABAT PENILAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->dibuat_tanggal_pejabat_penilai)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">DITERIMA TANGGAL PEGAWAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->diterima_tanggal_pegawai)) }}</b></td>
                        </tr>
                        <tr>
                            <th scope="row" class="sidetable">DITERIMA TANGGAL ATASAN PEJABAT PENILAI</th>
                            <td><b>{{ date('d/m/Y',strtotime($penilaian_skps->diterima_tanggal_atasan_pejabat_penilai)) }}</b></td>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Penilaian SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="{{route('penilaian_skp_tambah')}}" method="post">
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                        </select></div>          
                                            </div> 
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Sarana Kerja Pegawai</b></label>
                                                <div class="col-sm-10"><input name="sasaran_kerja_pegawai" id="exampleEmail" placeholder="Sarana Kerja Pegawai" type="text" class="form-control" value="" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Orientasi Pelayanan</b></label>
                                                <div class="col-sm-10"><input name="orientasi_pelayanan" id="exampleEmail" placeholder="Orientasi Pelayanan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Integritas</b></label>
                                                <div class="col-sm-10"><input name="integritas" id="exampleEmail" placeholder="Integritas" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Komitmen</b></label>
                                                <div class="col-sm-10"><input name="komitmen" id="exampleEmail" placeholder="Komitmen" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Disiplin</b></label>
                                                <div class="col-sm-10"><input name="disiplin" id="exampleEmail" placeholder="Disiplin" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="kerjasama" id="exampleEmail" placeholder="Kerjasama" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="kepemimpinan" id="exampleEmail" placeholder="Kepemimpinan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah" id="exampleEmail" placeholder="Jumlah" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rata - Rata</b></label>
                                                <div class="col-sm-10"><input name="rata_rata" id="exampleEmail" placeholder="Rata - Rata" type="text" class="form-control" value="" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Perilaku Kerja</b></label>
                                                <div class="col-sm-10"><input name="nilai_perilaku_kerja" id="exampleEmail" placeholder="Nilai Perilaku Kerja" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Sasaran Kerja Pegawai</b></label>
                                                <div class="col-sm-10"><input name="jumlah_sasaran_kerja_pegawai" id="exampleEmail" placeholder="Jumlah Orientasi Pelayanan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Orientasi Pelayanan</b></label>
                                                <div class="col-sm-10"><input name="jumlah_orientasi_pelayanan" id="exampleEmail" placeholder="Jumlah Orientasi Pelayanan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Integritas</b></label>
                                                <div class="col-sm-10"><input name="jumlah_integritas" id="exampleEmail" placeholder="Jumlah Integritas" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Komitmen</b></label>
                                                <div class="col-sm-10"><input name="jumlah_komitmen" id="exampleEmail" placeholder="Jumlah Komitmen" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Disiplin</b></label>
                                                <div class="col-sm-10"><input name="jumlah_disiplin" id="exampleEmail" placeholder="Jumlah Disiplin" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="jumlah_kerjasama" id="exampleEmail" placeholder="Jumlah Kerjasama" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="jumlah_kepemimpinan" id="exampleEmail" placeholder="Jumlah Kepemimpinan" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jumlah" id="exampleEmail" placeholder="Jumlah jumlah" type="text" class="form-control" value="" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Rata - Rata</b></label>
                                                <div class="col-sm-10"><input name="jumlah_rata_rata" id="exampleEmail" placeholder="Jumlah Rata - Rata" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Nilai Perilaku kerja</b></label>
                                                <div class="col-sm-10"><input name="jumlah_nilai_perilaku_kerja" id="exampleEmail" placeholder="Jumlah Nilai Perilaku kerja" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Prestasi Kerja 1</b></label>
                                                <div class="col-sm-10"><input name="nilai_prestasi_kerja_1" id="exampleEmail" placeholder="Jumlah Prestasi Kerja 1" type="text" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Prestasi Kerja 2</b></label>
                                                <div class="col-sm-10"><input name="nilai_prestasi_kerja_2" id="exampleEmail" placeholder="Jumlah Prestasi Kerja 2" type="text" class="form-control" value="" required></div>          
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Keberatan Pegawai</b></label>
                                                <div class="col-sm-10"><textarea name="keberatan_pegawai" id="exampleEmail" placeholder="Keberatan Pegawai" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Keberatan Pegawai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_keberatan_pegawai" id="exampleEmail" placeholder="Tanggal Keberatan Pegawai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggapan Pejabat</b></label>
                                                <div class="col-sm-10"><textarea name="tanggapan_pejabat" id="exampleEmail" placeholder="Tanggapan Pejabat" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Tanggapan Pejabat</b></label>
                                                <div class="col-sm-10"><input name="tanggal_tanggapan_pejabat" id="exampleEmail" placeholder="Tanggal Tanggapan Pejabat" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Keputusan Atasan Pejabat</b></label>
                                                <div class="col-sm-10"><textarea name="keputusan_atasan_pejabat" id="exampleEmail" placeholder="Keputusan Atasan Pejabat" type="text" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Keputusan Atasan Pejabat</b></label>
                                                <div class="col-sm-10"><input name="tanggal_keputusan_atasan_pejabat" id="exampleEmail" placeholder="Keputusan Atasan Pejabat" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rekomendasi</b></label>
                                                <div class="col-sm-10"><textarea name="rekomendasi" id="exampleEmail" placeholder="Rekomendasi" type="number" class="form-control" value="" required></textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Dibuat Tanggal Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="dibuat_tanggal_pejabat_penilai" id="exampleEmail" placeholder="Dibuat Tanggal Pejabat Penilai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Diterima Tanggal Pegawai</b></label>
                                                <div class="col-sm-10"><input name="diterima_tanggal_pegawai" id="exampleEmail" placeholder="Diterima Tanggal Pegawai" type="date" class="form-control" value="" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Diterima Tanggal Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="diterima_tanggal_atasan_pejabat_penilai" id="exampleEmail" placeholder="Diterima Tanggal Atasan Pejabat Penilai" type="date" class="form-control" value="" required></div>          
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



@foreach($penilaian_skp as $penilaian_skps)
<!-- Modal Ubah -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLargeUbah-{{$penilaian_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Penilaian SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" action="penilaian_skp/update/{{$penilaian_skps->id}}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                                                <div class="col-sm-10"><select name="kategori" id="exampleSelect" class="form-control" value="{{$penilaian_skps->kategori}}" required>
                                                                            <option value="" disabled selected>-Pilih Kategori-</option>
                                                                            @if($penilaian_skps->kategori == "Semester 1")
                                                                            <option value="Semester 1" Selected>Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($penilaian_skps->kategori == "Semester 2")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2" Selected>Semester 2</option>
                                                                            <option value="Setahun">Setahun</option>
                                                                            @elseif($penilaian_skps->kategori == "Setahun")
                                                                            <option value="Semester 1">Semester 1</option>
                                                                            <option value="semester 2">Semester 2</option>
                                                                            <option value="Setahun" Selected>Setahun</option>
                                                                            @endif
                                                                        </select></div>          
                                            </div> 
                                            <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Sasaran Kerja Pegawai</b></label>
                                                <div class="col-sm-10"><input name="sasaran_kerja_pegawai" id="exampleEmail" placeholder="Sasaran Kerja Pegawai" type="number" class="form-control" value="{{$penilaian_skps->sasaran_kerja_pegawai}}" required></div>          
                                            </div> 
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Orientasi Pelayanan</b></label>
                                                <div class="col-sm-10"><input name="orientasi_pelayanan" id="exampleEmail" placeholder="Orientasi Pelayanan" type="number" class="form-control" value="{{$penilaian_skps->orientasi_pelayanan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Integritas</b></label>
                                                <div class="col-sm-10"><input name="integritas" id="exampleEmail" placeholder="Integritas" type="number" class="form-control" value="{{$penilaian_skps->integritas}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Komitmen</b></label>
                                                <div class="col-sm-10"><input name="komitmen" id="exampleEmail" placeholder="Komitmen" type="number" class="form-control" value="{{$penilaian_skps->komitmen}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Disiplin</b></label>
                                                <div class="col-sm-10"><input name="disiplin" id="exampleEmail" placeholder="Disiplin" type="number" class="form-control" value="{{$penilaian_skps->disiplin}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="kerjasama" id="exampleEmail" placeholder="Kerjasama" type="number" class="form-control" value="{{$penilaian_skps->kerjasama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="kepemimpinan" id="exampleEmail" placeholder="Kepemimpinan" type="number" class="form-control" value="{{$penilaian_skps->kepemimpinan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah" id="exampleEmail" placeholder="Jumlah" type="number" class="form-control" value="{{$penilaian_skps->jumlah}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rata - Rata</b></label>
                                                <div class="col-sm-10"><input name="rata_rata" id="exampleEmail" placeholder="Rata - Rata" type="number" class="form-control" value="{{$penilaian_skps->rata_rata}}" required></div>          
                                            </div>  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Nilai Perilaku Kerja</b></label>
                                                <div class="col-sm-10"><input name="nilai_perilaku_kerja" id="exampleEmail" placeholder="Nilai Perilaku Kerja" type="number" class="form-control" value="{{$penilaian_skps->nilai_perilaku_kerja}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Sasaran Kerja Pegawai</b></label>
                                                <div class="col-sm-10"><input name="jumlah_sasaran_kerja_pegawai" id="exampleEmail" placeholder="Jumlah Orientasi Pelayanan" type="number" class="form-control" value="{{$penilaian_skps->jumlah_sasaran_kerja_pegawai}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Orientasi Pelayanan</b></label>
                                                <div class="col-sm-10"><input name="jumlah_orientasi_pelayanan" id="exampleEmail" placeholder="Jumlah Orientasi Pelayanan" type="number" class="form-control" value="{{$penilaian_skps->jumlah_orientasi_pelayanan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Integritas</b></label>
                                                <div class="col-sm-10"><input name="jumlah_integritas" id="exampleEmail" placeholder="Jumlah Integritas" type="number" class="form-control" value="{{$penilaian_skps->jumlah_integritas}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Komitmen</b></label>
                                                <div class="col-sm-10"><input name="jumlah_komitmen" id="exampleEmail" placeholder="Jumlah Komitmen" type="number" class="form-control" value="{{$penilaian_skps->jumlah_komitmen}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Disiplin</b></label>
                                                <div class="col-sm-10"><input name="jumlah_disiplin" id="exampleEmail" placeholder="Jumlah Disiplin" type="number" class="form-control" value="{{$penilaian_skps->jumlah_disiplin}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Kerjasama</b></label>
                                                <div class="col-sm-10"><input name="jumlah_kerjasama" id="exampleEmail" placeholder="Jumlah Kerjasama" type="number" class="form-control" value="{{$penilaian_skps->jumlah_kerjasama}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Kepemimpinan</b></label>
                                                <div class="col-sm-10"><input name="jumlah_kepemimpinan" id="exampleEmail" placeholder="Jumlah Kepemimpinan" type="number" class="form-control" value="{{$penilaian_skps->jumlah_kepemimpinan}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah jumlah</b></label>
                                                <div class="col-sm-10"><input name="jumlah_jumlah" id="exampleEmail" placeholder="Jumlah jumlah" type="number" class="form-control" value="{{$penilaian_skps->jumlah_jumlah}}" required></div>          
                                            </div>                  
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Rata - Rata</b></label>
                                                <div class="col-sm-10"><input name="jumlah_rata_rata" id="exampleEmail" placeholder="Jumlah Rata - Rata" type="number" class="form-control" value="{{$penilaian_skps->jumlah_rata_rata}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Nilai Perilaku kerja</b></label>
                                                <div class="col-sm-10"><input name="jumlah_nilai_perilaku_kerja" id="exampleEmail" placeholder="Jumlah Nilai Perilaku kerja" type="number" class="form-control" value="{{$penilaian_skps->jumlah_nilai_perilaku_kerja}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Prestasi Kerja 1</b></label>
                                                <div class="col-sm-10"><input name="nilai_prestasi_kerja_1" id="exampleEmail" placeholder="Jumlah Prestasi Kerja 1" type="number" class="form-control" value="{{$penilaian_skps->nilai_prestasi_kerja_1}}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Jumlah Prestasi Kerja 2</b></label>
                                                <div class="col-sm-10"><input name="nilai_prestasi_kerja_2" id="exampleEmail" placeholder="Jumlah Prestasi Kerja 2" type="number" class="form-control" value="{{$penilaian_skps->nilai_prestasi_kerja_2}}" required></div>          
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Keberatan Pegawai</b></label>
                                                <div class="col-sm-10"><textarea name="keberatan_pegawai" id="exampleEmail" placeholder="Keberatan Pegawai" type="number" class="form-control" value="{{$penilaian_skps->keberatan_pegawai}}" required>{{$penilaian_skps->keberatan_pegawai}}</textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Keberatan Pegawai</b></label>
                                                <div class="col-sm-10"><input name="tanggal_keberatan_pegawai" id="exampleEmail" placeholder="Tanggal Keberatan Pegawai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->tanggal_keberatan_pegawai)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggapan Pejabat</b></label>
                                                <div class="col-sm-10"><textarea name="tanggapan_pejabat" id="exampleEmail" placeholder="Tanggapan Pejabat" type="number" class="form-control" value="{{$penilaian_skps->tanggapan_pejabat}}" required>{{$penilaian_skps->tanggapan_pejabat}}</textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Tanggapan Pejabat</b></label>
                                                <div class="col-sm-10"><input name="tanggal_tanggapan_pejabat" id="exampleEmail" placeholder="Tanggal Tanggapan Pejabat" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->tanggal_tanggapan_pejabat)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Keputusan Atasan Pejabat</b></label>
                                                <div class="col-sm-10"><textarea name="keputusan_atasan_pejabat" id="exampleEmail" placeholder="Keputusan Atasan Pejabat" type="number" class="form-control" value="{{$penilaian_skps->keputusan_atasan_pejabat}}" required>{{$penilaian_skps->keputusan_atasan_pejabat}}</textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Tanggal Keputusan Atasan Pejabat</b></label>
                                                <div class="col-sm-10"><input name="tanggal_keputusan_atasan_pejabat" id="exampleEmail" placeholder="Keputusan Atasan Pejabat" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->tanggal_keputusan_atasan_pejabat)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Rekomendasi</b></label>
                                                <div class="col-sm-10"><textarea name="rekomendasi" id="exampleEmail" placeholder="Rekomendasi" type="number" class="form-control" value="{{$penilaian_skps->rekomendasi}}" required>{{$penilaian_skps->rekomendasi}}</textarea></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Dibuat Tanggal Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="dibuat_tanggal_pejabat_penilai" id="exampleEmail" placeholder="Dibuat Tanggal Pejabat Penilai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->dibuat_tanggal_pejabat_penilai)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Diterima Tanggal Pegawai</b></label>
                                                <div class="col-sm-10"><input name="diterima_tanggal_pegawai" id="exampleEmail" placeholder="Diterima Tanggal Pegawai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->diterima_tanggal_pegawai)) }}" required></div>          
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><b>Diterima Tanggal Atasan Pejabat Penilai</b></label>
                                                <div class="col-sm-10"><input name="diterima_tanggal_atasan_pejabat_penilai" id="exampleEmail" placeholder="Diterima Tanggal Atasan Pejabat Penilai" type="date" class="form-control" value="{{ date('Y-m-d',strtotime($penilaian_skps->diterima_tanggal_atasan_pejabat_penilai)) }}" required></div>          
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


@foreach($penilaian_skp as $penilaian_skps)
<!-- Small modal Hapus -->
<div class="modal fade bd-example-modal-sm-delete-{{$penilaian_skps->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Penilaian SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="penilaian_skp/delete/{{$penilaian_skps->id}}" method="post">
            @method('delete')
            @csrf
                <p><center>Apakah anda yakin <p>"Hapus Data Penilaian SKP" <b></b> </p></center></p>
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


