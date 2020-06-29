<div id="formSkp" style="display:;">
    <div class="text-center titlepertab">Formulir Sasaran Kerja<br /> Pegawai negeri Sipil</div>
@if ($countFormSkp === 0)
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA FORMULIR SASARAN KERJA PEGAWAI NEGERI SIPIL PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <table class="mb-0 table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center bold">NO</td>
                        <td colspan="3" class="bold">I. PEJABAT PENILAI</td>
                        <td class="text-center bold">NO</td>
                        <td colspan="6" class="bold">II. PEGAWAI NEGERI SIPIL YANG DINILAI</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">1</td>
                        <td>Nama</td>
                        <td colspan="2">{{$skp->nama_pejabat_penilai}}</td>
                        <td class="text-center bold">1</td>
                        <td colspan="2">Nama</td>
                        <td colspan="4">{{$pegawai->user->name}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">2</td>
                        <td>NIP</td>
                        <td colspan="2">{{$skp->nip_pejabat_penilai}}</td>
                        <td class="text-center bold">2</td>
                        <td colspan="2">NIP</td>
                        <td colspan="4">{{$pegawai->nip_baru}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">3</td>
                        <td>Pangkat/Gol.Ruang</td>
                        <td colspan="2">{{$skp->pangkat_golongan_ruang_penilai}}</td>
                        <td class="text-center bold">3</td>
                        <td colspan="2">Pangkat/Gol.Ruang</td>
                        <td colspan="4">{{$pegawai->golongan}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">4</td>
                        <td>Jabatan</td>
                        <td colspan="2">{{$skp->jabatan_penilai}}</td>
                        <td class="text-center bold">4</td>
                        <td colspan="2">Jabatan</td>
                        <td colspan="4">{{$pegawai->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">5</td>
                        <td>Unit Kerja</td>
                        <td colspan="2">{{$skp->unit_kerja_penilai}}</td>
                        <td class="text-center bold">5</td>
                        <td colspan="2">Unit Kerja</td>
                        <td colspan="4">RS. Universitas Tanjungpura</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" rowspan="2">NO</td>
                        <td class="text-center bold" rowspan="2" colspan="3">III. KEGIATAN TUGAS JABATAN</td>
                        <td class="text-center bold" rowspan="2">AK</td>
                        <td class="text-center bold" colspan="6">TARGET</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" colspan="2">KUANT/OUTPUT</td>
                        <td class="text-center bold">KUAL/MUTU</td>
                        <td class="text-center bold" colspan="2">WAKTU</td>
                        <td class="text-center bold">BIAYA</td>
                    </tr>
                    @foreach ($formSkp as $item)
                        <tr>
                            <td class="text-center bold">{{$noFormSkp += 1}}</td>
                            <td colspan="2">{{$item->kegiatan_tugas_jabatan_1}}</td>
                            <td class="text-center">{{$item->kegiatan_tugas_jabatan_2}}</td>
                            <td class="text-center">{{$item->ak}}</td>
                            <td class="text-center">{{$item->kuant_output_1}}</td>
                            <td class="text-center">{{$item->kuant_output_2}}</td>
                            <td class="text-center">{{$item->kual_mutu}}</td>
                            @if ($periode->periode === "Setahun")
                                <td class="text-center">12</td>
                            @else
                                <td class="text-center">6</td>
                            @endif
                            <td class="text-center">bulan</td>
                            <td class="text-center">{{$item->biaya}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
