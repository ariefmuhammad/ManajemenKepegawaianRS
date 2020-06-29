<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="dasarB">Dasar</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pendidikan_formalB">Riwayat Pendidikan Formal</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_fungsionalB">Riwayat Diktal Fungsional</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_teknisB">Riwayat Diklat Teknis</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_penjenjanganB">Riwayat Diklat Penjenjangan</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_kepangkatanB">Riwayat Kepangkatan</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_strukturalB">Riwayat Jabatan Struktural</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_fungsionalB">Riwayat Jabatan Fungsional</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pekerjaanB">Riwayat Pekerjaan/Jabatan Teknis</button>
@if ($pegawai->jenis_kelamin === 'W')
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Suami</button>
@else
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Istri</button>
@endif
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="anakB">Anak</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="seminarB">Seminar/Lokakarya/Simposium</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="jasaB">Tanda Jasa/Penghargaan</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="hukumB">Hukuman Disiplin</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="organisasiB">Keanggotaan Organisasi</button>
<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="keluargaB">Keluarga</button>
@if(auth()->user()->level == 'ADMIN')
    <a href="/it/pegawai/{{$pegawai->id}}/skp"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active">SKP</button></a>
@else
    <a href="/admin/pegawai/{{$pegawai->id}}/skp"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active">SKP</button></a>
@endif
