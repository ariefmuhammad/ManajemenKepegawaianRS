<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-trophy icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Tanda Jasa / Penghargaan
                                        <div class="page-title-subheading">Isi data tandajasa / penghargaan anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Tanda Jasa / Penghargaan</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama Penghargaan</th>
                                                <!-- <th>Tanggal Perolehan</th> -->
                                                <!-- <th>Nomor</th> -->
                                                <th>Negara / Instansi Pemberi</th>
                                                <!-- <th>Jabatan pemberi</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($tanda_jasa_penghargaan as $key => $tanda_jasa_penghargaans)
                                            @if($pegawai_id->id == $tanda_jasa_penghargaans->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$tanda_jasa_penghargaans->tahun}}</td> -->
                                                <td>{{$tanda_jasa_penghargaans->nama_penghargaan}}</td>
                                                <!-- <td>{{ date('d/m/Y',strtotime($tanda_jasa_penghargaans->tanggal_perolehan)) }}</td> -->
                                                <!-- <td>{{$tanda_jasa_penghargaans->nomor}}</td> -->
                                                <!-- <td>{{$tanda_jasa_penghargaans->pemberi}}</td> -->
                                                <td>{{$tanda_jasa_penghargaans->jabatan_pemberi}}</td>
                                                <td>
                                                <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$tanda_jasa_penghargaans->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$tanda_jasa_penghargaans->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$tanda_jasa_penghargaans->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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