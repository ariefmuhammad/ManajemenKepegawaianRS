<div id="str">
    <div class="text-center titlepertab">Data SKP Pegawai Yang Belum Mengisi</div>
    <div class="margintop20">
        @foreach($tidak_lengkap as $item)
            <table class="mb-0 table table-striped table-bordered" style="display:none;" id="{{$item['periode']}}">
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
                    @foreach ($item['pegawai'] as $no => $value)
                        <tr>
                            <th class="text-center">{{$no+1}}</th>
                            <td class="text-center">{{$value->nip_baru}}</td>
                            <td>{{$value->user->name}}</td>
                            <td>{{$value->nama_jabatan}}</td>
                            <td class="text-center">{{$value->ruangan->ruangan}}</td>
                            @if(auth()->user()->level == 'ADMIN')
                                <td class="text-center"><a href="/it/pegawai/{{$value->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                            @else
                                <td class="text-center"><a href="/admin/pegawai/{{$value->id}}"><button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info"><i class="fa fa-eye"></i></button></a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
</div>
