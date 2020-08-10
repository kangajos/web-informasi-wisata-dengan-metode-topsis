@extends("layouts.main")
@section("title")
    Edit Kategori Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <form action="{{route("daerah_wisata_updated")}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nama Daerah</label>
                    <input type="hidden" name="manage_daerah_id" value="{{$data->manage_daerah_id}}" required>
                    <input type="text" name="nama_daerah" value="{{$data->nama_daerah}}" class="form-control" placeholder="Ketik . ." required>
                </div>
                <div class="form-grpup">
                    <button class="btn btn-primary" type="submit">Update <span class="fa fa-download"></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection