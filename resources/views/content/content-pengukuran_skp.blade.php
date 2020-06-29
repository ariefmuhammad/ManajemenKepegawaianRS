<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Pengukuran SKP
                                        <div class="page-title-subheading">Isi data Pengukuran SKP anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Pengukuran SKP</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kategori</th>
                                                <th>Kegiatan tugas Tambahan</th>
                                                <th>Kategori Pengukuran</th>
                                                <th>Aksi</th>
                                                <!-- <th>AK Target</th> -->
                                                <!-- <th>Target Kuant Output 1</th> -->
                                                <!-- <th>Target Kuant Output 2</th> -->
                                                <!-- <th>Target Kuant Mutu</th> -->
                                                <!-- <th>Target Biaya</th> -->
                                                <!-- <th>Ak Realisasi</th> -->
                                                <!-- <th>Realisasi Kuant Output 1</th> -->
                                                <!-- <th>Realisasi Kuant Output 2</th> -->
                                                <!-- <th>Realisasi Kual Mutu</th> -->
                                                <!-- <th>Realisasi Biaya</th> -->
                                                <!-- <th>Perhituangan</th> -->
                                                <!-- <th>Nilai Capaian SKP</th> -->
                                                <!-- <th>Nilai Capaian Total AK Target</th> -->
                                                <!-- <th>Total AK Target</th> -->
                                                <!-- <th>Total Target Kuant Output 1</th> -->
                                                <!-- <th>Total Target Kuant Output 2</th> -->
                                                <!-- <th>Total Target Kuant Mutu</th> -->
                                                <!-- <th>Total Target Biaya</th> -->
                                                <!-- <th>Total AK Realisasi</th> -->
                                                <!-- <th>Total Realisasi Kuant Output 1</th> -->
                                                <!-- <th>Total Realisasi Kuant Output 2</th> -->
                                                <!-- <th>Total Realisai</th> -->
                                                <!-- <th>Total Target Biaya</th> -->
                                                <!-- <th>Total Target Biaya</th> -->

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($pengukuran_skp as $no => $pengukuran_skps)
                                            @if(auth()->user()->id == $pengukuran_skps->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$pengukuran_skps->tahun}}</td> -->
                                                <td>{{$pengukuran_skps->kategori}}</td>
                                                <td>{{$pengukuran_skps->kegiatan_tugas_tambahan}}</td>
                                                <td>{{$pengukuran_skps->kategori_pengukuran}}</td>
                                                <!-- <td>{{$pengukuran_skps->ak_target}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->target_kuant_output_1}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->target_kuant_output_2}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->target_kual_mutu}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->target_biaya}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->ak_realisasi}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->realisasi_kuant_output_1}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->realisasi_kuant_output_2}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->realisasi_kual_mutu}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->realisasi_biaya}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->penghitungan}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->nilai_capaian_skp}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_ak_target}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_target_kuant_output_1}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_target_kuant_output_2}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_target_kual_mutu}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_target_biaya}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_ak_realisasi}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_realisasi_kuant_output_1}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_realisasi_kuant_output_2}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_realisasi_kual_mutu}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_realisasi_biaya}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_penghitungan}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_nilai_capaian_skp_1}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_nilai_capaian_skp_2}}</td> -->
                                                <!-- <td>{{$pengukuran_skps->total_nilai_capaian_skp_3}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$pengukuran_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$pengukuran_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$pengukuran_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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