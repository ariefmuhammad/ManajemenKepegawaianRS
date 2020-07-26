<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-home icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    @if($pegawai_id->jenis_kelamin == "P")
                                    <div>Keluarga Istri
                                        <div class="page-title-subheading">Isi data keluarga istri anda disini.
                                        </div>
                                    </div>
                                    @elseif($pegawai_id->jenis_kelamin == "W")
                                    <div>Keluarga Suami
                                        <div class="page-title-subheading">Isi data keluarga suami anda disini.
                                        </div>
                                    </div>
                                    @endif
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
                                @if($pegawai_id->jenis_kelamin == "P")
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keluarga Istri</h5>
                                @elseif($pegawai_id->jenis_kelamin == "W")
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keluarga Suami</h5>
                                @endif
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama</th>
                                                <th>Hubungan</th>
                                                <!-- <th>Pekerjaan</th> -->
                                                <!-- <th>Tanggal Lahir</th> -->
                                                <!-- <th>Jenis Kelamin</th> -->
                                                <!-- <th>Kondisi</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($keluarga_istri_suami as $key => $keluarga_istri_suamis)
                                            @if($pegawai_id->id == $keluarga_istri_suamis->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$keluarga_istri_suamis->tahun}}</td> -->
                                                <td>{{$keluarga_istri_suamis->nama}}</td>
                                                <td>
                                                @if($keluarga_istri_suamis->hubungan == "1")
                                                Ayah
                                                @elseif($keluarga_istri_suamis->hubungan == "2")
                                                Ibu
                                                @elseif($keluarga_istri_suamis->hubungan == "3")
                                                Kakak
                                                @elseif($keluarga_istri_suamis->hubungan == "4")
                                                Adik
                                                @endif
                                                </td>
                                                <!-- <td>{{$keluarga_istri_suamis->pekerjaan}}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($keluarga_istri_suamis->tanggal_lahir)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>
                                                @if($keluarga_istri_suamis->jenis_kelamin == "L")
                                                Laki-laki                                                
                                                @elseif($keluarga_istri_suamis->jenis_kelamin == "P")                                                
                                                Perempuan
                                                @endif
                                                </td> -->
                                                <!-- <td>
                                                @if($keluarga_istri_suamis->kondisi == "1")
                                                Masih Hidup
                                                @elseif($keluarga_istri_suamis->kondisi == "0")      
                                                Almarhun
                                                @endif
                                                </td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$keluarga_istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$keluarga_istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$keluarga_istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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