@foreach ($seminar as $no => $item)
    <div class="modal fade bd-example-modal-lg" id="seminar_show_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Seminar/Lokakarya/Simposium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row" class="sidetable">NAMA KEGIATAN</th>
                                <td>{{$item->nama_kegiatan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">LOKASI KEGIATAN</th>
                                <td>{{$item->lokasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TEMPAT KEGIATAN</th>
                                <td>{{$item->tempat_kegiatan}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">PENYELENGGARA</th>
                                <td>{{$item->penyelenggara}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">TAHUN</th>
                                <td>{{$item->tahun_seminar}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="sidetable">KEDUDUKAN DALAM SEMINAR</th>
                                <td>{{$item->kedudukan_dalam_seminar}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="fa fa-fw" aria-hidden="true" title="Copy to use times"></i> Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
