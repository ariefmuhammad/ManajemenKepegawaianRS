<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-home icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Keluarga Kandung
                                        <div class="page-title-subheading">Isi data keluarga kandung anda disini.
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
                                    <div class="card-body"><h5 class="card-title">Masukan Data Keluarga Kandung</h5>
                                    <button class="mb-2 mr-2 btn-transition btn btn-outline-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLargeTambah"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-square"></i> Tambah Data
                                    </button>
                                        <table class="mb-0 table" id="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>Tahun</th> -->
                                                <th>Nama</th>
                                                <th>Hubungan</th>
                                                <!-- <th>Pekerjaan</th> -->
                                                <!-- <th>Tanggal Lahir</th> -->
                                                <!-- <th>Jenis Kelamin</th> -->
                                                <!-- <th>Kondisi</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($no=0)
                                            @foreach($keluarga_kandung as $key => $keluarga_kandungs)
                                            @if(auth()->user()->id == $keluarga_kandungs->pegawai_id)
                                            <tr>
                                                <th scope="row">{{++$no}}</th>
                                                <!-- <td>{{$keluarga_kandungs->tahun}}</td> -->
                                                <td>{{$keluarga_kandungs->nama}}</td>
                                                <td>
                                                @if($keluarga_kandungs->hubungan == "1")
                                                Ayah
                                                @elseif($keluarga_kandungs->hubungan == "2")
                                                Ibu
                                                @elseif($keluarga_kandungs->hubungan == "3")
                                                Kakak
                                                @elseif($keluarga_kandungs->hubungan == "4")
                                                Adik
                                                @endif
                                                </td>
                                                <!-- <td>{{$keluarga_kandungs->pekerjaan}}</td> -->
                                                <!-- <td>{{ date('d/m/Y',strtotime($keluarga_kandungs->tanggal_lahir)) }}</td> -->
                                                <!-- <td>
                                                @if($keluarga_kandungs->jenis_kelamin == "L")
                                                Laki-laki                                                
                                                @elseif($keluarga_kandungs->jenis_kelamin == "P")                                                
                                                Perempuan
                                                @endif
                                                </td>
                                                <td>
                                                @if($keluarga_kandungs->kondisi == "1")
                                                Masih Hidup
                                                @elseif($keluarga_kandungs->kondisi == "0")      
                                                Almarhun
                                                @endif
                                                </td> -->
                                                <td>
                                                <span data-toggle="tooltip" data-placement="top" title="Lebih Lengkap Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-alternate" data-toggle="modal" data-target="#exampleModalLargeDetail-{{$keluarga_kandungs->id}}"> <i class="fa fa-fw" aria-hidden="true"></i>  
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Ubah Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLargeUbah-{{$keluarga_kandungs->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
                                                    </button></span>||&nbsp;
                                                    <span data-toggle="tooltip" data-placement="top" title="Hapus Data"><button class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm-delete-{{$keluarga_kandungs->id}}"> <i class="fa fa-fw" aria-hidden="true"></i> 
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