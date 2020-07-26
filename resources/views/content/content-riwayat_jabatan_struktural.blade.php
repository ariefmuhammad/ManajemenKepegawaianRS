<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-history icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Riwayat Jabatan Struktural
                                        <div class="page-title-subheading">Isi data riwayat jabatan struktural anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Riwayat Jabatan Struktural</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <!-- <th>Eselon</th> -->
                                                <th>Nama Jabatan</th>
                                                <th>Unit Kerja</th>
                                                <!-- <th>TMT Jabatan</th> -->
                                                <!-- <th>Nomor SK</th> -->
                                                <!-- <th>Tanggal SK</th> -->
                                                <!-- <th>Pejabat Penandatangan SK</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($riwayat_jabatan_struktural as $key => $riwayat_jabatan_strukturals)
                                            @if($pegawai_id->id == $riwayat_jabatan_strukturals->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$riwayat_jabatan_strukturals->tahun}}</td> -->
                                                <!-- <td>{{$riwayat_jabatan_strukturals->eselon}}</td> -->
                                                <td>{{$riwayat_jabatan_strukturals->nama_jabatan}}</td>
                                                <td>{{$riwayat_jabatan_strukturals->unit_kerja}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_jabatan_strukturals->tmt_jabatan)->translatedFormat('d F Y')}}</td> -->
                                                <!-- <td>{{$riwayat_jabatan_strukturals->nomor_sk}}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($riwayat_jabatan_strukturals->tanggal_sk)->translatedFormat('d F Y')}}</td> -->
                                                <!-- <td>{{$riwayat_jabatan_strukturals->pejabat_penandatangan_sk}}</td> -->
                                                <td>
                                                <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$riwayat_jabatan_strukturals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$riwayat_jabatan_strukturals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$riwayat_jabatan_strukturals->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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