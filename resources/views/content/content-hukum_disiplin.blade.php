<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-exclamation-triangle icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Hukum Disiplin
                                        <div class="page-title-subheading">Isi data hukum disiplin anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Hukum Disiplin</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Kode Hukuman</th>
                                                <th>Nomor SK</th>
                                                <!-- <th>Tanggal SK</th> -->
                                                <!-- <th>TMT Berlaku</th> -->
                                                <!-- <th>Pejabat Pembuat SK</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($hukum_disiplin as $key => $hukum_disiplins)
                                            @if($pegawai_id->id == $hukum_disiplins->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$hukum_disiplins->tahun}}</td> -->
                                                <td>
                                                @if($hukum_disiplins->kode_hukuman == "11")
                                                11 - Hukuman Ringan Teguran Lisan                                             
                                                @elseif($hukum_disiplins->kode_hukuman == "12")                                               
                                                12 - Hukuman Ringan Teguran Tertulis                                          
                                                @elseif($hukum_disiplins->kode_hukuman == "13")                                             
                                                13 - Hukuman Ringan Melalui Pernyataan Tidak Puas Secara Tertulis                                       
                                                @elseif($hukum_disiplins->kode_hukuman == "21")
                                                21 - Hukuman Sedang Penundaan Kenaikan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun                                          
                                                @elseif($hukum_disiplins->kode_hukuman == "22")                                              
                                                22 - Hukuman Sedang Penurunan Gaji Sebesar 1x Kenaikan Gaji Berkala Paling Lama 1 Tahun                                             
                                                @elseif($hukum_disiplins->kode_hukuman == "23")                                              
                                                23 - Hukuman Sedang Penundaan Kenaikan Pangkat Paling Lama 1 Tahun                     
                                                @elseif($hukum_disiplins->kode_hukuman == "31")                                            
                                                31 - Hukuman Berat Penurunan Pangkat Setingkat Lebih Rendah Paling Lama 1 Tahun                                             
                                                @elseif($hukum_disiplins->kode_hukuman == "32")                                         
                                                32 - Hukuman Berat Pembebasan dari Jabatan
                                                @endif
                                                </td>
                                                <td>{{$hukum_disiplins->nomor_sk}}</td>
                                                <!-- <td>{{ \Carbon\Carbon::parse($hukum_disiplins->tanggal_sk)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>{{ \Carbon\Carbon::parse($hukum_disiplins->tmt_berlaku)->translatedFormat('d F Y') }}</td> -->
                                                <!-- <td>{{$hukum_disiplins->pejabat_pembuat_sk}}</td> -->
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$hukum_disiplins->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$hukum_disiplins->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$hukum_disiplins->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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