@extends("layouts.main")
@section("title")
    Edit Kategori Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <form action="{{route("kategori_wisata_updated")}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Kategori Wisata</label>
                    <input type="hidden" name="id" value="{{$edit->manage_kategori_wisata_id}}" required>
                    <input type="text" name="nama_kategori_wisata" value="{{$edit->nama_kategori_wisata}}" class="form-control" placeholder="Ketik kategori Wisata" required>
                </div>
                <div class="from-group">
                    <button class="btn btn-primary">UPDATE <span class="fa fa-download"></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection