@extends("layouts.main")
@section("title")
    Data Kategori Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <a href="{{route("daerah_wisata_add")}}" class="btn btn-primary">Tambah kategori Wisata</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kategori Wisata</th>
                        <th>Tanggal Buat</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->nama_daerah}}</td>
                            <td><span class="badge badge-success">{{$value->created_at}}</span></td>
                            <td>
                                <a href="{{route('daerah_wisata_edit', $value->manage_daerah_id)}}" class="btn btn-sm btn-info">EDIT</a>
                                <a href="{{route('daerah_wisata_deleted', $value->manage_daerah_id)}}" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection