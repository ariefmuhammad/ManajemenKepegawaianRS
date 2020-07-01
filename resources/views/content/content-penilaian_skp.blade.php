<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Penilaian SKP
                                        <div class="page-title-subheading">Isi data Penilaian SKP anda disini.
                                        </div>
                                    </div>
                                </div>               
                                <div class="page-title-actions">
                          
                                </div>    
                            </div>
                        </div>           
                      
                        @include('pesan')
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
                      
                            </div>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Masukan Data Penilaian SKP</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kategori</th>
                                                <!-- <th>Sarana Kerja Pegawai</th> -->
                                                <!-- <th>Orientasi Pelayanan</th> -->
                                                <!-- <th>Integritas</th> -->
                                                <!-- <th>Komitmen</th> -->
                                                <!-- <th>Disiplin</th> -->
                                                <!-- <th>Kerjasama</th> -->
                                                <!-- <th>Kepemimpinan</th> -->
                                                <!-- <th>Jumlah</th> -->
                                                <!-- <th>Rata - Rata</th> -->
                                                <!-- <th>Nilai Perilaku Kerja</th> -->
                                                <!-- <th>Jumlah Orientasi Pelayanan</th> -->
                                                <!-- <th>Jumlah Integritas</th> -->
                                                <!-- <th>Jumlah Komitmen</th> -->
                                                <!-- <th>Jumlah Disiplin</th> -->
                                                <!-- <th>Jumlah Kerjasama</th> -->
                                                <!-- <th>Jumlah Kepemimpinan</th> -->
                                                <!-- <th>Jumlah jumlah</th> -->
                                                <!-- <th>Jumlah Rata - Rata</th> -->
                                                <!-- <th>Jumlah Nilai Perilaku kerja</th> -->
                                                <!-- <th>Jumlah Prestasi Kerja 1</th> -->
                                                <!-- <th>Jumlah Prestasi Kerja 2</th> -->
                                                <!-- <th>Keberatan Pegawai</th> -->
                                                <!-- <th>Tanggal Keberatan Pegawai</th> -->
                                                <th>Tanggapan Pejabat</th>
                                                <!-- <th>Tanggal Tanggapan Pejabat</th> -->
                                                <!-- <th>Keputusan Atasan Pejabat</th> -->
                                                <!-- <th>Tanggal Keputusan Atasan Pejabat</th> -->
                                                <!-- <th>Rekomendasi</th> -->
                                                <!-- <th>Dibuat Tanggal Pejabat Penilai</th> -->
                                                <!-- <th>Diterima Tanggal Pegawai</th> -->
                                                <!-- <th>Diterima Tanggal Atasan Pejabat Penilai</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($penilaian_skp as $key => $penilaian_skps)
                                            @if($pegawai_id->id == $penilaian_skps->pegawai_id)                                           
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$penilaian_skps->tahun}}</td> -->
                                                <td>{{$penilaian_skps->kategori}}</td>
                                                <!-- <td>{{$penilaian_skps->sasaran_kerja_pegawai}}</td>
                                                <td>{{$penilaian_skps->orientasi_pelayanan}}</td> -->
                                                <!-- <td>{{$penilaian_skps->integritas}}</td> -->
                                                <!-- <td>{{$penilaian_skps->komitmen}}</td> -->
                                                <!-- <td>{{$penilaian_skps->disiplin}}</td> -->
                                                <!-- <td>{{$penilaian_skps->kerjasama}}</td> -->
                                                <!-- <td>{{$penilaian_skps->kepemimpinan}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah}}</td> -->
                                                <!-- <td>{{$penilaian_skps->rata_rata}}</td> -->
                                                <!-- <td>{{$penilaian_skps->nilai_perilaku_kerja}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_sasaran_kerja_pegawai}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_orientasi_pelayanan}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_integritas}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_komitmen}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_disiplin}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_kerjasama}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_kepemimpinan}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_jumlah}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_rata_rata}}</td> -->
                                                <!-- <td>{{$penilaian_skps->jumlah_nilai_perilaku_kerja}}</td> -->
                                                <!-- <td>{{$penilaian_skps->nilai_prestasi_kerja_1}}</td> -->
                                                <!-- <td>{{$penilaian_skps->nilai_prestasi_kerja_2}}</td> -->
                                                <!-- <td>{{$penilaian_skps->keberatan_pegawai}}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_keberatan_pegawai)) }}</td> -->
                                                <td>{{$penilaian_skps->tanggapan_pejabat}}</td>
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_tanggapan_pejabat)) }}</td> -->
                                                <!-- <td>{{$penilaian_skps->keputusan_atasan_pejabat}}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->tanggal_keputusan_atasan_pejabat)) }}</td> -->
                                                <!-- <td>{{$penilaian_skps->rekomendasi}}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->dibuat_tanggal_pejabat_penilai)) }}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->diterima_tanggal_pegawai)) }}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($penilaian_skps->diterima_tanggal_atasan_pejabat_penilai)) }}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$penilaian_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$penilaian_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$penilaian_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>
                                              </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>