<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-history icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Jabatan Fungsional
                                        <div class="page-title-subheading">Isi data riwayat jabatan fungsional anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat Jabatan Fungsional</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <!-- <th>Eselon</th> -->
                                                <th>Nama Jabatan</th>
                                                <!-- <th>TMT Jabatan</th> -->
                                                <th>Nomor SK</th>
                                                <!-- <th>Tanggal SK</th> -->
                                                <!-- <th>Pejabat penandatangan SK</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($riwayat_jabatan_fungsional as $key => $riwayat_jabatan_fungsionals)
                                            @if($pegawai_id->id == $riwayat_jabatan_fungsionals->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$riwayat_jabatan_fungsionals->tahun}}</td> -->
                                                <!-- <td>{{$riwayat_jabatan_fungsionals->eselon}}</td> -->
                                                <td>{{$riwayat_jabatan_fungsionals->nama_jabatan}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_jabatan_fungsionals->tmt_jabatan)->translatedFormat('d F Y')}}</td> -->
                                                <td>{{$riwayat_jabatan_fungsionals->nomor_sk}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_jabatan_fungsionals->tanggal_sk)->translatedFormat('d F Y')}}</td> -->
                                                <!-- <td>{{$riwayat_jabatan_fungsionals->pejabat_penandatangan_sk}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_jabatan_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_jabatan_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_jabatan_fungsionals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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