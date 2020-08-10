@extends("layouts.main")
@section("title")
    Data Daerah Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <a href="{{route("kategori_wisata_add")}}" class="btn btn-primary btn-md"> Tambah Kategori Wisata</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
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
                            <td>{{$value->nama_kategori_wisata}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <a href="{{route("kategori_wisata_edit", $value->manage_kategori_wisata_id)}}" class="btn btn-info btn-sm btn-block">EDIT</a>
                                <a href="{{route("kategori_wisata_deletet", $value->manage_kategori_wisata_id)}}" class="btn btn-danger btn-sm btn-block">HAPUS</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection