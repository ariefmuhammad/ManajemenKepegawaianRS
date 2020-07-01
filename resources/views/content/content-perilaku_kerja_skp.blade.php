<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Perilaku Kerja SKP
                                        <div class="page-title-subheading">Isi data perilaku kerja SKP anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Perilaku Kerja SKP</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kategori</th>
                                                <th>Orientasi Pelayanan</th>
                                                <!-- <th>Integritas</th> -->
                                                <!-- <th>Komitmen</th> -->
                                                <!-- <th>Disiplin</th> -->
                                                <!-- <th>Kerjasama</th> -->
                                                <!-- <th>Kepemimpinan</th> -->
                                                <!-- <th>Jumlah</th> -->
                                                <!-- <th>Rata-Rata</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($perilaku_kerja_skp as $key => $perilaku_kerja_skps)
                                            @if($pegawai_id->id == $perilaku_kerja_skps->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$perilaku_kerja_skps->tahun}}</td> -->
                                                <td>{{$perilaku_kerja_skps->kategori}}</td>
                                                <td>{{$perilaku_kerja_skps->orientasi_pelayanan}}</td>
                                                <!-- <td>{{$perilaku_kerja_skps->integritas}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->komitmen}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->disiplin}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->kerjasama}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->kepemimpinan}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->jumlah}}</td> -->
                                                <!-- <td>{{$perilaku_kerja_skps->rata_rata}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$perilaku_kerja_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$perilaku_kerja_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$perilaku_kerja_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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