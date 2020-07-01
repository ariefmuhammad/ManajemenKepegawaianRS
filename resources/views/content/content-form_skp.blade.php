<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Form SKP
                                        <div class="page-title-subheading">Isi data form SKP anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Form SKP</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kategori</th>
                                                <th>Kegiatan Tugas Jabatan 1</th>
                                                <th>Kegiaatan Tugas Jabatan 2</th>
                                                <!-- <th>AK</th> -->
                                                <!-- <th>Kuant Output 1</th> -->
                                                <!-- <th>Kuant Output 2</th> -->
                                                <!-- <th>Kual Mutu</th> -->
                                                <!-- <th>Waktu</th> -->
                                                <!-- <th>Biaya</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($form_skp as $key => $form_skps)
                                            @if($pegawai_id->id == $form_skps->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$form_skps->tahun}}</td> -->
                                                <td>{{$form_skps->kategori}}</td>
                                                <td>{{$form_skps->kegiatan_tugas_jabatan_1}}</td>
                                                <td>{{$form_skps->kegiatan_tugas_jabatan_2}}</td>
                                                <!-- <td>{{$form_skps->ak}}</td> -->
                                                <!-- <td>{{$form_skps->kuant_output_1}}</td> -->
                                                <!-- <td>{{$form_skps->kuant_output_2}}</td> -->
                                                <!-- <td>{{$form_skps->kual_mutu}}</td> -->
                                                <!-- <td>{{$form_skps->waktu}}</td> -->
                                                <!-- <td>{{$form_skps->biaya}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$form_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$form_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$form_skps->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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