<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Data SKP
                                        <div class="page-title-subheading">Isi data SKP anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data SKP</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kategori</th>
                                                <th>Nama Pejabat Penilai</th>
                                                <!-- <th>NIP Pejabat Penilai</th> -->
                                                <!-- <th>Pangkat Golongan Ruang Penilai</th> -->
                                                <!-- <th>Jabatan Penilai</th> -->
                                                <!-- <th>Unit Kerja Penilai</th> -->
                                                <!-- <th>Nama Atasan Pejabat Penilai</th> -->
                                                <!-- <th>NIP Atasan Pejabat Penilai</th> -->
                                                <!-- <th>Pangkat Golongan Ruang Atasan Penilai</th> -->
                                                <!-- <th>Jabatan Atassan Penilai</th> -->
                                                <!-- <th>Unit kerja Atasan Penilai</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($skp as $key => $skps)
                                            @if(auth()->user()->id == $skps->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$skps->tahun}}</td> -->
                                                <td>{{$skps->kategori}}</td>
                                                <td>{{$skps->nama_pejabat_penilai}}</td>
                                                <!-- <td>{{$skps->nip_pejabat_penilai}}</td> -->
                                                <!-- <td>{{$skps->pangkat_golongan_ruang_penilai}}</td> -->
                                                <!-- <td>{{$skps->jabatan_penilai}}</td> -->
                                                <!-- <td>{{$skps->unit_kerja_penilai}}</td> -->
                                                <!-- <td>{{$skps->nama_atasan_pejabat_penilai}}</td> -->
                                                <!-- <td>{{$skps->nip_atasan_pejabat_penilai}}</td> -->
                                                <!-- <td>{{$skps->pangkat_golongan_ruang_atasan_penilai}}</td> -->
                                                <!-- <td>{{$skps->jabatan_atasan_penilai}}</td> -->
                                                <!-- <td>{{$skps->unit_kerja_atasan_penilai}}</td> -->
                                                <td>
                                                <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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