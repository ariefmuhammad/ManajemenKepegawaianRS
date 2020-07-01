<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-child icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Anak
                                        <div class="page-title-subheading">Isi data anak anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Anak</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama</th>
                                                <!-- <th>Jenis Kelamn</th> -->
                                                <!-- <th>Tempat Lahir</th> -->
                                                <!-- <th>Tanggal Lahir</th> -->
                                                <!-- <th>Status Anak</th> -->
                                                <th>Pendididkan</th>
                                                <!-- <th>Pekerjaan</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($anak as $key => $anaks)
                                            @if($pegawai_id->id == $anaks->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$anaks->tahun}}</td> -->
                                                <td>{{$anaks->nama}}</td>
                                                <!-- <td>
                                                @if($anaks->jenis_kelamin == "P")
                                                Pria
                                                @elseif($anaks->jenis_kelamin == "W")
                                                Wanita
                                                @endif</td> -->
                                                <!-- <td>{{$anaks->tempat_lahir}}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($anaks->tanggal_lahir)) }}</td> -->
                                                <!-- <td>
                                                @if($anaks->status_anak == "1")
                                                Anak Kandung
                                                @elseif($anaks->status_anak == "2")
                                                Anak Tiri
                                                @elseif($anaks->status_anak == "3")
                                                Anak Angkat
                                                @endif</td> -->
                                                <td>
                                                @if($anaks->pendidikan == "01") 
                                                S3 (Setara)                                             
                                                @elseif($anaks->pendidikan == "02") 
                                                S2 (Setara)                                              
                                                @elseif($anaks->pendidikan == "03")                                    
                                                S1 (Setara)                      
                                                @elseif($anaks->pendidikan == "04")                                              
                                                D4                                          
                                                @elseif($anaks->pendidikan == "05")                                             
                                                SM                                       
                                                @elseif($anaks->pendidikan == "06")                                   
                                                D3                                            
                                                @elseif($anaks->pendidikan == "07")                                              
                                                D2                                               
                                                @elseif($anaks->pendidikan == "08")                                             
                                                D1                                             
                                                @elseif($anaks->pendidikan == "09")                                     
                                                SLTA                                    
                                                @elseif($anaks->pendidikan == "10")                                       
                                                SLTP                                             
                                                @elseif($anaks->pendidikan == "11")                                             
                                                SD
                                                @elseif($anaks->pendidikan == "12")                                             
                                                Belum Sekolah
                                                @endif</td>
                                                <!-- <td>{{$anaks->pekerjaan}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$anaks->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$anaks->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$anaks->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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