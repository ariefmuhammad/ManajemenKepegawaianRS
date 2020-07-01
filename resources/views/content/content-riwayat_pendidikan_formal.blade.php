<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-history icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Pendidikan Formal
                                        <div class="page-title-subheading">Isi data riwayat pendidikan formal anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat Pendidikan Formal</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Tingkat Pendidikan</th>
                                                <th>Nama Sekolah/Universitas</th>
                                                <!-- <th>Jurusan Prodi</th> -->
                                                <!-- <th>Tahun Masuk</th> -->
                                                <!-- <th>Tahun Lulus</th> -->
                                                <!-- <th>Tempat Belajar</th> -->
                                                <!-- <th>Lokasi</th> -->
                                                <!-- <th>Nomor Ijazah</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($riwayat_pendidikan_formal as $key => $riwayat_pendidikan_formals)
                                            @if($pegawai_id->id == $riwayat_pendidikan_formals->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$riwayat_pendidikan_formals->tahun}}</td> -->
                                                <td>
                                                @if($riwayat_pendidikan_formals->tingkat_pendidikan == "01") 
                                                S3 (Setara)                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "02") 
                                                S2 (Setara)                                              
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "03")                                    
                                                S1 (Setara)                      
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "04")                                              
                                                D4                                          
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "05")                                             
                                                SM                                       
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "06")                                   
                                                D3                                            
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "07")                                              
                                                D2                                               
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "08")                                             
                                                D1                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "09")                                     
                                                SLTA                                    
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "10")                                       
                                                SLTP                                             
                                                @elseif($riwayat_pendidikan_formals->tingkat_pendidikan == "11")                                             
                                                SD
                                                @endif
                                                </td>
                                                <td>{{$riwayat_pendidikan_formals->nama_sekolah}}</td>
                                                <!-- <td>{{$riwayat_pendidikan_formals->jurusan_prodi}}</td> -->
                                                <!-- <td>{{$riwayat_pendidikan_formals->tahun_masuk}}</td> -->
                                                <!-- <td>{{$riwayat_pendidikan_formals->tahun_lulus}}</td> -->
                                                <!-- <td>
                                                    @if($riwayat_pendidikan_formals->tempat_belajar == "1")
                                                    Dalam Negeri
                                                    @elseif($riwayat_diklat_fungsionals->tempat_belajar == "2")
                                                    Luar Negeri
                                                    @endif
                                                </td> -->
                                                <!-- <td>{{$riwayat_pendidikan_formals->lokasi}}</td>
                                                <td>{{$riwayat_pendidikan_formals->nomor_ijazah}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_pendidikan_formals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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
