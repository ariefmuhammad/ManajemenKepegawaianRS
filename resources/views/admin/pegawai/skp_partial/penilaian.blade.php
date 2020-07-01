<div id="penilaian" style="display:none;">
    <div class="text-center titlepertab">Penilaian Prestasi Kerja<br /> Pegawai negeri Sipil</div>
@if (empty($perilakuKerjaSkp))
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <h5 style="font-weight: bold;">YANG DINILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$pegawai->user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$pegawai->nip_baru}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$pegawai->golongan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$pegawai->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>RS. Universitas Tanjungpura</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">PEJABAT PENILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$skp->nama_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$skp->nip_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$skp->jabatan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>{{$skp->unit_kerja_penilai}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">ATASAN PENJABAT PENILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable350">NAMA</th>
                        <td class="width1000">{{$skp->nama_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">NIP</th>
                        <td>{{$skp->nip_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">JABATAN</th>
                        <td>{{$skp->jabatan_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable350">UNIT KERJA</th>
                        <td>{{$skp->unit_kerja_atasan_penilai}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">UNSUR YANG DINILAI</h5>
            <table class="mb-0 table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center bold" colspan="4">UNSUR YANG DINILAI</td>
                        <td class="text-center bold">JUMLAH</td>
                    </tr>
                    <tr>
                        <td colspan="2">a. Sasaran Kerja Pegawai (SKP)</td>
                        <td class="text-center bold" colspan="2">{{ $nilaiCapaianSkpFinal1 }} X 60%</td>
                        <td class="text-center bold">{{ $penilaianSasaranKerjaPegawai }}</td>
                    </tr>
                    <tr>
                        <td rowspan="9">b. Perilaku Kerja</td>
                        <td>1. Orientasi Pelayanan</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->orientasi_pelayanan }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpOrientasiPelayanan }}</td>
                    </tr>
                    <tr>
                        <td>2. Integritas</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->integritas }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpIntegritas }}</td>
                    </tr>
                    <tr>
                        <td>3. Komitmen</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->komitmen }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpKomitmen }}</td>
                    </tr>
                    <tr>
                        <td>4. Disiplin</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->disiplin }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpDisiplin }}</td>
                    </tr>
                    <tr>
                        <td>5. Kerjasama</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->kerjasama }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpKerjasama }}</td>
                    </tr>
                    <tr>
                        <td>6. Kepemimpinan</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkp->kepemimpinan }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpKepemimpinan }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td class="text-center bold" colspan="2">{{ $perilakuKerjaSkpJumlah }}</td>
                    </tr>
                    <tr>
                        <td>Nilai Rata-Rata</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpRata }}</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpRatarata }}</td>
                    </tr>
                    <tr>
                        <td>Nilai Perilaku Kerja</td>
                        <td class="text-center bold">{{ $perilakuKerjaSkpRata }}</td>
                        <td class="text-center bold">X 40%</td>
                        <td class="text-center bold">{{ $penilaianNilaiPerilakuKerja }}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" colspan="4" rowspan="2">Nilai Prestasi Kerja</td>
                        <td class="text-center bold">{{ $penilaianNilaiPrestasiKerja }}</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">{{ $penilaianNilaiPrestasiKerja2 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">KEBERATAN DARI PEGAWAI NEGERI SIPIL YANG DINILAI (APABILA ADA)</h5>
            <table class="mb-0 table table-borderless">
                <tbody>
                    <tr>
                        @if(empty($penilaianSkp->keberatan_pegawai))
                            <td></td>
                        @else
                            <td class="" style="width:100%;">{{$penilaianSkp->keberatan_pegawai}}</td>
                        @endif
                    </tr>
                    <tr>
                        @if(empty($penilaianSkp->tanggal_keberatan_pegawai))
                            <td style="text-align:right;">Tanggal ...........</td>
                        @else
                            <td style="text-align:right;">Tanggal {{ $penilaianSkp->tanggal_keberatan_pegawai }}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">TANGGAPAN PEJABAT PENILAI ATAS KEBERATAN</h5>
            <table class="mb-0 table table-borderless">
                <tbody>
                    <tr>
                        @if(empty($penilaianSkp->tanggapan_pejabat))
                            <td></td>
                        @else
                            <td class="" style="width:100%;">{{$penilaianSkp->tanggapan_pejabat}}</td>
                        @endif
                    </tr>
                    <tr>
                        @if(empty($penilaianSkp->tanggal_tanggapan_pejabat))
                            <td style="text-align:right;">Tanggal ...........</td>
                        @else
                            <td style="text-align:right;">Tanggal {{ $penilaianSkp->tanggal_tanggapan_pejabat }}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">KEPUTUSAN ATASAN PEJABAT PENILAI ATAS KEBERATAN</h5>
            <table class="mb-0 table table-borderless">
                <tbody>
                    <tr>
                        @if(empty($penilaianSkp->keputusan_atasan_pejabat))
                            <td></td>
                        @else
                            <td class="" style="width:100%;">{{$penilaianSkp->keputusan_atasan_pejabat}}</td>
                        @endif
                    </tr>
                    <tr>
                        @if(empty($penilaianSkp->tanggal_keputusan_atasan_pejabat))
                            <td style="text-align:right;">Tanggal ...........</td>
                        @else
                            <td style="text-align:right;">Tanggal {{ $penilaianSkp->tanggal_keputusan_atasan_pejabat }}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="margintop20">
            <h5 style="font-weight: bold;">REKOMENDASI</h5>
            <table class="mb-0 table table-borderless">
                <tbody>
                    <tr>
                        @if(empty($penilaianSkp->rekomendasi))
                            <td></td>
                        @else
                            <td class="" style="width:100%;">{{$penilaianSkp->rekomendasi}}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
