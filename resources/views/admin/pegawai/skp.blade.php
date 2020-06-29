@extends('admin.template')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/fh-3.1.7/r-2.2.5/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
    <style>
        .bgabu {
            background-color: #ded9d9;
        }
        .bold {
            font-weight: bold;
            color: black;
        }
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
    </style>
@endpush

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        @if ($pegawai->jenis_kelamin === 'W')
                            <i class="pe-7s-user-female icon-gradient bg-happy-fisher"></i>
                        @else
                            <i class="pe-7s-user icon-gradient bg-happy-fisher"></i>
                        @endif
                    </div>
                    <div>{{$pegawai->user->name}}
                        <div class="page-title-subheading">NIP {{$pegawai->nip_baru}}
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
                    <div class="card-body">
                        <div class="text-center">
                            @include('admin.pegawai.skp_partial.button')
                        </div>
                        <hr />
                        <div class="text-center">
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
                        </div>
                        <div class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate active" id="data_skpB">Data SKP</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="form_skpB">Form SKP</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="pengukuranB">Pengukuran</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="perilaku_kerjaB">Perilaku Kerja</button>
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate" id="penilaianB">Penilaian</button>
                        </div>
                        @include('admin.pegawai.skp_partial.skp')
                        @include('admin.pegawai.skp_partial.form_skp')
                        @include('admin.pegawai.skp_partial.pengukuran')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('modal')

@endpush

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
@endpush
