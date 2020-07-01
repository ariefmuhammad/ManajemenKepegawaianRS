<div id="perilakuKerja" style="display: none;">
    <div class="text-center titlepertab">Buku Catatan Penilaian Perilaku<br /> Pegawai negeri Sipil</div>
@if (empty($perilakuKerjaSkp))
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <table class="mb-0 table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center bold">No</td>
                        <td class="text-center bold" style="width:200px;">Tanggal</td>
                        <td class="text-center bold">Uraian</td>
                        <td class="text-center bold" style="width:300px;">Nama/NIP dan Paraf Pejabat Penilai</td>
                    </tr>
                    <tr>
                        <td class="text-center bold">1</td>
                        <td class="text-center bold">2</td>
                        <td class="text-center bold">3</td>
                        <td class="text-center bold">4</td>
                    </tr>
                    <tr>
                        <td class="text-center bold" rowspan="3">1</td>
                        @if ($periode->periode === "Semester 1")
                            <td class="text-center bold" rowspan="3">Januari s.d Juni {{ $periode->tahun }}</td>
                            <td class="">
                                <table class="table table-borderless">
                                    <tr>
                                        <td colspan="4">
                                            Penilaian SKP periode Januari sampai Juni {{ $periode->tahun }} = <b>{{ $nilaiCapaianSkpFinal1 }} </b>sedangkan penilaian perilaku kerjanya adalah sebagai berikut : <br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:250px;">Orientasi Pelayanan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->orientasi_pelayanan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpOrientasiPelayanan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Integritas</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->integritas }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpIntegritas }}</td>
                                    </tr>
                                    <tr>
                                        <td>Komitmen</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->komitmen }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKomitmen }}</td>
                                    </tr>
                                    <tr>
                                        <td>Disiplin</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->disiplin }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpDisiplin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kerjasama</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kerjasama }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKerjasama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kepemimpinan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kepemimpinan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKepemimpinan }}</td>
                                    </tr>
                                </table>
                            </td>
                        @elseif ($periode->periode === "Semester 2")
                            <td class="text-center bold" rowspan="3">Juli s.d Desember {{ $periode->tahun }}</td>
                            <td class="">
                                <table class="table table-borderless">
                                    <tr>
                                        <td colspan="4">
                                            Penilaian SKP periode Juli sampai Desember {{ $periode->tahun }} = <b>{{ $nilaiCapaianSkpFinal1 }} </b>sedangkan penilaian perilaku kerjanya adalah sebagai berikut : <br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:250px;">Orientasi Pelayanan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->orientasi_pelayanan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpOrientasiPelayanan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Integritas</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->integritas }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpIntegritas }}</td>
                                    </tr>
                                    <tr>
                                        <td>Komitmen</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->komitmen }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKomitmen }}</td>
                                    </tr>
                                    <tr>
                                        <td>Disiplin</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->disiplin }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpDisiplin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kerjasama</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kerjasama }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKerjasama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kepemimpinan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kepemimpinan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKepemimpinan }}</td>
                                    </tr>
                                </table>
                            </td>
                        @else
                            <td class="text-center bold" rowspan="3">Januari s.d Desember {{ $periode->tahun }}</td>
                            <td class="">
                                <table class="table table-borderless">
                                    <tr>
                                        <td colspan="4">
                                            Penilaian SKP periode Januari sampai Desember {{ $periode->tahun }} = <b>{{ $nilaiCapaianSkpFinal1 }} </b>sedangkan penilaian perilaku kerjanya adalah sebagai berikut : <br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:250px;">Orientasi Pelayanan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->orientasi_pelayanan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpOrientasiPelayanan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Integritas</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->integritas }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpIntegritas }}</td>
                                    </tr>
                                    <tr>
                                        <td>Komitmen</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->komitmen }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKomitmen }}</td>
                                    </tr>
                                    <tr>
                                        <td>Disiplin</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->disiplin }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpDisiplin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kerjasama</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kerjasama }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKerjasama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kepemimpinan</td>
                                        <td style="width:77px;">=</td>
                                        <td class="bold">{{ $perilakuKerjaSkp->kepemimpinan }}</td>
                                        <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpKepemimpinan }}</td>
                                    </tr>
                                </table>
                            </td>
                        @endif
                        <td class="text-center bold" rowspan="3">
                            Kasubbag Rumah Tangga<br /><br /><br /><br /><br /><u>Mohd. Nuh</u><br />19640417 198303 1 001
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table table-borderless">
                                <tr>
                                    <td style="width:250px;">Jumlah</td>
                                    <td style="width:77px;">=</td>
                                    <td class="bold">{{ $perilakuKerjaSkpJumlah }}</td>
                                    <td class="bold" style="width:103px;"></td>
                                </tr>
                                <tr>
                                    <td>Nilai Rata-rata</td>
                                    <td style="width:77px;">=</td>
                                    <td class="bold">{{ $perilakuKerjaSkpRata }}</td>
                                    <td class="bold" style="width:103px;">{{ $perilakuKerjaSkpRatarata }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
