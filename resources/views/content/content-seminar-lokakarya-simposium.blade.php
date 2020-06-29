<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-desktop icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Seminar / Lokakarya / Simposium
                                        <div class="page-title-subheading">Isi data seminar / lokakarya / simposium anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Seminar / Lokakarya / Simposium</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama Kegiatan</th>
                                                <th>Lokasi</th>
                                                <!-- <th>Tempat Kegiatan</th> -->
                                                <!-- <th>Penyelenggara</th> -->
                                                <!-- <th>Tahun Seminar</th> -->
                                                <!-- <th>Kedudukan Dalam Seminar</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($seminar_lokakarya_simposium as $key => $seminar_lokakarya_simposiums)
                                            @if(auth()->user()->id == $seminar_lokakarya_simposiums->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$seminar_lokakarya_simposiums->tahun}}</td> -->
                                                <td>{{$seminar_lokakarya_simposiums->nama_kegiatan}}</td>
                                                <td>{{$seminar_lokakarya_simposiums->lokasi}}</td>
                                                <!-- <td>
                                                @if($seminar_lokakarya_simposiums->tempat_kegiatan == "1")
                                                Dalam Negeri                                                
                                                @elseif($seminar_lokakarya_simposiums->tempat_kegiatan == "1")                                                
                                                Luar Negeri
                                                @endif
                                                </td> -->
                                                <!-- <td>{{$seminar_lokakarya_simposiums->penyelenggara}}</td> -->
                                                <!-- <td>{{$seminar_lokakarya_simposiums->tahun_seminar}}</td> -->
                                                <!-- <td>
                                                @if($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "1")
                                                Peserta                                               
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "2")                                               
                                                Moderator                                               
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "3")                                                                                             
                                                Pembahas                                                
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "4")                                            
                                                Pembawa Makalah
                                                @elseif($seminar_lokakarya_simposiums->kedudukan_dalam_seminar == "5")                                              
                                                Panitia
                                                @endif
                                                </td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$seminar_lokakarya_simposiums->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$seminar_lokakarya_simposiums->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$seminar_lokakarya_simposiums->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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