<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-history icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Diklat Teknis
                                        <div class="page-title-subheading">Isi data riwayat diklat teknis anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat diklat Teknis</h5>
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
                                            @foreach($riwayat_diklat_teknis as $key => $riwayat_diklat_tekniss)
                                            @if($pegawai_id->id == $riwayat_diklat_tekniss->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$riwayat_diklat_tekniss->tahun}}</td> -->
                                                <td>{{$riwayat_diklat_tekniss->nama_diklat}}</td>
                                                <!-- <td>@if($riwayat_diklat_tekniss->tempat_belajar == "1")
                                                    Dalam Negeri
                                                    @elseif($riwayat_diklat_tekniss->tempat_belajar == "2")
                                                    Luar Negeri
                                                    @endif
                                                </td> -->
                                                <td>{{$riwayat_diklat_tekniss->lokasi}}</td>
                                                <!-- <td>{{ date('d/m/Y',strtotime($riwayat_diklat_tekniss->tanggal_mulai)) }}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($riwayat_diklat_tekniss->tanggal_selesai)) }}</td> -->
                                                <!-- <td>{{$riwayat_diklat_tekniss->jumlah_jam}}</td> -->
                                                <!-- <td>{{$riwayat_diklat_tekniss->penyelenggara}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_diklat_tekniss->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_diklat_tekniss->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_diklat_tekniss->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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