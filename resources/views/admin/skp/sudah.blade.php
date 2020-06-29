@extends('admin.template')

@push('css')
    <style>
        .width100{
            width: 100%;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
    <style>
        .width100{
            width: 100%;
        }
        .width100px{
            width: 100px;
        }
        .width40{
            width: 40px;
        }
        .width200{
            width: 200px;
        }
        .margintop20 {
            margin-top: 20px;
        }
        .margintop50 {
            margin-top: 50px;
        }
        .sidetable{
            background-image: url(/lojin/sidebarx.png);
            background-repeat: no-repeat;
            width: 500px;
            height: 41px;
            color: #ffffff;
        }
        .titlepertab {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 40px;
            letter-spacing: 0px;
            word-spacing: 0px;
            color: #000000;
            font-weight: 700;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: small-caps;
            text-transform: capitalize;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .pointer {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-braille icon-gradient bg-happy-fisher">
                        </i>
                    </div>
                    <div>SKP
                        <div class="page-title-subheading">Data SKP
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
            </div>
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="text-center">
                            @if(auth()->user()->level == 'ADMIN')
                                <a href="/it/skp/belum"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info">Pegawai yang Belum Mengisi SKP</button></a>
                                <a href="/it/skp/sudah"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active">Pegawai yang Sudah Mengisi SKP</button></a>
                            @else
                                <a href="/admin/skp/belum"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="sikpB">Pegawai yang Belum Mengisi SKP</button></a>
                                <a href="/admin/skp/sudah"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="strB">Pegawai yang Sudah Mengisi SKP</button></a>
                            @endif
                        </div>
                        <hr />
                        <div class="text-center margintop50">
                            @if(auth()->user()->level == 'ADMIN')
                                <form action="/it/skp/sudah" method="post">
                            @else
                                <form action="/admin/skp/sudah" method="post">
                            @endif
                                @csrf
                                <select name="tahun" class="mb-2 mr-2 btn-transition btn btn-outline-dark" >
                                    @foreach ($tahun as $item)
                                        <option value="{{$item}}" {{$periode->tahun == $item  ? 'selected' : ''}}>{{$item}}</option>
                                    @endforeach
                                </select>
                                <select name="kategori" class="mb-2 mr-2 btn-transition btn btn-outline-dark">
                                    <option value="semester1" {{$periode->periode == 'Semester 1'  ? 'selected' : ''}}>Semester 1</option>
                                    <option value="semester2" {{$periode->periode == 'Semester 2'  ? 'selected' : ''}}>Semester 2</option>
                                    <option value="setahun" {{$periode->periode == 'Setahun'  ? 'selected' : ''}}>Setahun</option>
                                </select>
                                <button id="search" type="submit" style="display: none;">x</button>
                            </form>
                        </div>
                        <div id="str">
                            <div class="text-center titlepertab">Data SKP Pegawai Yang Sudah Mengisi</div>
                            <div class="margintop20">
                                <table class="mb-0 table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="width40 text-center">No</th>
                                            <th class="width200 text-center">NIP</th>
                                            <th class="text-center">Nama</th>
                                            <th class="width200 text-center">Jabatan</th>
                                            <th class="width100px text-center">Ruangan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lengkap as $no => $value)
                                            <tr>
                                                <th class="text-center">{{$no+1}}</th>
                                                <td class="text-center">{{$value->nip_baru}}</td>
                                                <td>{{$value->user->name}}</td>
                                                <td>{{$value->nama_jabatan}}</td>
                                                <td class="text-center">{{$value->ruangan->ruangan}}</td>
                                                @if(auth()->user()->level == 'ADMIN')
                                                    <td class="text-center"><a href="/it/pegawai/{{$value->id}}/skp"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                                                @else
                                                    <td class="text-center"><a href="/admin/pegawai/{{$value->id}}/skp"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/taxi/assets/scripts/main.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable_riwayat_pendidikan_formal, #datatable_riwayat_diklat_fungsional, #datatable_riwayat_diklat_fungsional, #datatable_riwayat_diklat_teknis, #datatable_riwayat_diklat_penjenjangan, #datatable_riwayat_kepangkatan, #datatable_riwayat_jabatan_struktural, #datatable_riwayat_jabatan_fungsional, #datatable_riwayat_pekerjaan, #datatable_suami, #datatable_istri, #datatable_anak, #datatable_seminar, #datatable_jasa, #datatable_hukum, #datatable_organisasi, #datatable_keluarga_kandung, #datatable_keluarga_suami, #datatable_keluarga_istri').DataTable({
                "language": {
                    "search" : "Cari Data: ",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "emptyTable": "Data Tidak Ada",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(Dicari dari _MAX_ total data)",
                    "lengthMenu": "Menampilkan _MENU_ Data",
                    "zeroRecords": "Data yang dicari tidak ada",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Berikutnya",
                        "previous":   "Sebelumnya"
                    }
                }
            });
        } );
    </script>
    <script>
        $(document).ready(function(){
            $("select").change(function(){
                $("#search").click();
            });
        });
    </script>
@endpush
