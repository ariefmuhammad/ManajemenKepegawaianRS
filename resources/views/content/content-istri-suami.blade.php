<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">      
                                    @if($pegawai_id->jenis_kelamin == "P")
                                    <div class="page-title-icon">
                                        <i class="fa fa-female icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Istri
                                        <div class="page-title-subheading">Isi data istri anda disini.
                                        </div>
                                    </div>
                                    @elseif($pegawai_id->jenis_kelamin == "W")
                                    <div class="page-title-icon">
                                        <i class="fa fa-male icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Suami
                                        <div class="page-title-subheading">Isi data suami anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Istri</h5>
                                    @elseif($pegawai_id->jenis_kelamin == "W")
                                    <div class="card-body"><h5 class="card-title">Masukan Data Suami</h5>
                                    @endif
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama</th>
                                                <!-- <th>Nomor Karis Karsu</th> -->
                                                <!-- <th>Tanggal Lahir</th> -->
                                                <!-- <th>Tanggal Nikah</th> -->
                                                <!-- <th>Tingkat Pendidikan</th> -->
                                                <!-- <th>Pekerjaan</th> -->
                                                @if($pegawai_id->jenis_kelamin == "P")
                                                <th>Status Istri</th>
                                                @elseif($pegawai_id->jenis_kelamin == "W")
                                                <th>Status Suami</th>
                                                @endif
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($istri_suami as $key => $istri_suamis)
                                            @if($pegawai_id->id == $istri_suamis->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$istri_suamis->tahun}}</td> -->
                                                <td>{{$istri_suamis->nama}}</td>
                                                <!-- <td>{{$istri_suamis->nomor_karis_karsu}}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_lahir)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($istri_suamis->tanggal_nikah)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>
                                                @if($istri_suamis->tingkat_pendidikan == "01") 
                                                S3 (Setara)                                             
                                                @elseif($istri_suamis->tingkat_pendidikan == "02") 
                                                S2 (Setara)                                              
                                                @elseif($istri_suamis->tingkat_pendidikan == "03")                                    
                                                S1 (Setara)                      
                                                @elseif($istri_suamis->tingkat_pendidikan == "04")                                              
                                                D4                                          
                                                @elseif($istri_suamis->tingkat_pendidikan == "05")                                             
                                                SM                                       
                                                @elseif($istri_suamis->tingkat_pendidikan == "06")                                   
                                                D3                                            
                                                @elseif($istri_suamis->tingkat_pendidikan == "07")                                              
                                                D2                                               
                                                @elseif($istri_suamis->tingkat_pendidikan == "08")                                             
                                                D1                                             
                                                @elseif($istri_suamis->tingkat_pendidikan == "09")                                     
                                                SLTA                                    
                                                @elseif($istri_suamis->tingkat_pendidikan == "10")                                       
                                                SLTP                                             
                                                @elseif($istri_suamis->tingkat_pendidikan == "11")                                             
                                                SD
                                                @endif
                                                </td> -->
                                                <!-- <td>{{$istri_suamis->pekerjaan}}</td> -->
                                                <td>
                                                @if($istri_suamis->status_suami_istri == "1")
                                                @if($pegawai_id->jenis_kelamin == "P")
                                                Istri Saat Ini
                                                @elseif($pegawai_id->jenis_kelamin == "W")
                                                Suami Saat Ini
                                                @endif                                          
                                                @elseif($istri_suamis->status_suami_istri == "2")                                              
                                                Telah Meninggal Dunia                                              
                                                @elseif($istri_suamis->status_suami_istri == "3")                                 
                                                Cerai
                                                @endif
                                                </td>
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$istri_suamis->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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