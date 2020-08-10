@extends("layouts.main")
@section("title")
    Tambah Kategori Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <form action="{{route("daerah_wisata_save")}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nama Daerah</label>
                    <input type="text" name="nama_daerah" class="form-control" placeholder="Ketik . ." required>
                </div>
                <div class="form-grpup">
                    <button class="btn btn-primary" type="submit">Save <span class="fa fa-download"></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection