@extends("layouts.main")
@section("title")
    Tambah Kategori Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <form action="{{route("kategori_wisata_save")}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Kategori Wisata</label>
                    <input type="text" name="nama_kategori_wisata" class="form-control" placeholder="Ketik kategori Wisata" required>
                </div>
                <div class="from-group">
                    <button class="btn btn-primary">SAVE <span class="fa fa-download"></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection