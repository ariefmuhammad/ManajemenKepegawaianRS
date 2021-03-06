<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-history icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Diklat Fungsional
                                        <div class="page-title-subheading">Isi data riwayat diklat fungsional anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat diklat fungsional</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama Diklat</th>
                                                <!-- <th>Tempat Belajar</th> -->
                                                <th>Lokasi</th>
                                                <!-- <th>Tanggal Mulai</th> -->
                                                <!-- <th>Tanggal Selesai</th> -->
                                                <!-- <th>Jumlah Jam</th> -->
                                                <!-- <th>Penyelenggara</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($riwayat_diklat_fungsional as $key => $riwayat_diklat_fungsionals)
                                            @if($pegawai_id->id == $riwayat_diklat_fungsionals->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$riwayat_diklat_fungsionals->tahun}}</td> -->
                                                <td>{{$riwayat_diklat_fungsionals->nama_diklat}}</td>
                                                <!-- <td>@if($riwayat_diklat_fungsionals->tempat_belajar == "1")
                                                    Dalam Negeri
                                                    @elseif($riwayat_diklat_fungsionals->tempat_belajar == "2")
                                                    Luar Negeri
                                                    @endif
                                                </td> -->
                                                <td>{{$riwayat_diklat_fungsionals->lokasi}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_diklat_fungsionals->tanggal_mulai)->translatedFormat('d F Y')}}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_diklat_fungsionals->tanggal_selesai)->translatedFormat('d F Y')}}</td> -->
                                                <!-- <td>{{$riwayat_diklat_fungsionals->jumlah_jam}}</td> -->
                                                <!-- <td>{{$riwayat_diklat_fungsionals->penyelenggara}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_diklat_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_diklat_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_diklat_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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