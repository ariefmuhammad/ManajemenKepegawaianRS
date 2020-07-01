<div id="dataSkp" style="">
    <div class="text-center titlepertab">Data Sasaran Kerja Pegawai</div>
    @if (empty($skp))
        <h5 class="text-center" style="color: red;">PEGAWAI BELUM MENGISI DATA SKP PADA PERIODE {{$periode->tahun}} {{$periode->periode}}</h5>
    @else
        <div class="margintop20">
            <h5 style="font-weight: bold;">YANG DINILAI</h5>
            <table class="mb-0 table table-striped">
                <tbody>
                    <tr>
                        <th scope="row" class="sidetable">NAMA</th>
                        <td>{{$pegawai->user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">NIP</th>
                        <td>{{$pegawai->nip_baru}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$pegawai->golongan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">JABATAN</th>
                        <td>{{$pegawai->nama_jabatan}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">UNIT KERJA</th>
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
                        <th scope="row" class="sidetable">NAMA</th>
                        <td>{{$skp->nama_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">NIP</th>
                        <td>{{$skp->nip_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">JABATAN</th>
                        <td>{{$skp->jabatan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">UNIT KERJA</th>
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
                        <th scope="row" class="sidetable">NAMA</th>
                        <td>{{$skp->nama_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">NIP</th>
                        <td>{{$skp->nip_atasan_pejabat_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">PANGKAT / GOLONGAN RUANG</th>
                        <td>{{$skp->pangkat_golongan_ruang_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">JABATAN</th>
                        <td>{{$skp->jabatan_atasan_penilai}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="sidetable">UNIT KERJA</th>
                        <td>{{$skp->unit_kerja_atasan_penilai}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
