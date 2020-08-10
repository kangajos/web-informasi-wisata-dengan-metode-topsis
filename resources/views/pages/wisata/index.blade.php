@extends("layouts.main")
@section("title")
    Data Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <a href="{{route('wisata_add')}}" class="btn btn-primary">Tambah Wisata Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <thead class="bg-white">
                    <tr>
                        <th>#</th>
                        <th>Nama Daerah</th>
                        <th>Kategori</th>
                        <th>Objek Wisata</th>
                        <th>Jumlah Pengunjung</th>
                        <th>Fasilitas (%)</th>
                        <th>Pelayanan (%)</th>
                        <th>jarak dari Pusat Kota (m)</th>
                        <th>Harga Tiket (Rp)</th>
                        <th>Deskripsi Wisata</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $value)
                        <tr>
                            <td>{{($key+1)}}</td>
                            <td>{{$value->daerah_wisata}}</td>
                            <td>{{$value->kategori_wisata}}</td>
                            <td>{{$value->nama_wisata}}</td>
                            <td><span class="badge badge-info">{{$value->pengunjung_wisata}} Orang</span></td>
                            <td><span class="badge badge-info">{{$value->fasilitas_wisata}}%</span></td>
                            <td><span class="badge badge-info">{{$value->pelayanan_wisata}}%</span></td>
                            <td><span class="badge badge-info">{{$value->jarak_wisata}} Meter</span></td>
                            <td><span class="badge badge-success">Rp{{number_format($value->harga_tiket_wisata)}}</span>
                            <td>
                                {!! strlen($value->deskripsi_wisata) > 25 ? substr($value->deskripsi_wisata,0,25)." . . ." : $value->deskripsi_wisata !!}
                            </td>
                            <td>
                                <a href="{{route("wisata_edit",$value->wisata_id)}}"
                                   class="btn btn-sm btn-info btn-block">EDIT</a>
                                <a onclick="return confirm('Anda yakin ?')"
                                   href="{{route("wisata_deleted", $value->wisata_id)}}"
                                   class="btn btn-sm btn-danger btn-block">HAPUS</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection