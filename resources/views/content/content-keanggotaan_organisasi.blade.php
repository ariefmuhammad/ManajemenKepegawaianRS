<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-users icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Keanggotaan Organisasi
                                        <div class="page-title-subheading">Isi data keanggotaan organisasi anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keanggotaan Organisasi</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <!-- <th>Tahun Organisasi</th> -->
                                                <th>Nama Organisasi</th>
                                                <th>Kedudukan Organisasi</th>
                                                <!-- <th>Tanggal Mulai</th> -->
                                                <!-- <th>Tanggal Selsai</th> -->
                                                <!-- <th>Nomor SK</th> -->
                                                <!-- <th>Jabatan Pembuat SK</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($keanggotaan_organisasi as $key => $keanggotaan_organisasis)
                                            @if($pegawai_id->id == $keanggotaan_organisasis->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$keanggotaan_organisasis->tahun_organisasi}}</td> -->
                                                <td>{{$keanggotaan_organisasis->nama_organisasi}}</td>
                                                <td>{{$keanggotaan_organisasis->kedudukan}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($keanggotaan_organisasis->tanggal_mulai)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($keanggotaan_organisasis->tanggal_selesai)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>{{$keanggotaan_organisasis->nomor_sk}}</td> -->
                                                <!-- <td>{{$keanggotaan_organisasis->jabatan_pembuat_sk}}</td> -->
                                                <td>
                                                <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$keanggotaan_organisasis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$keanggotaan_organisasis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$keanggotaan_organisasis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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