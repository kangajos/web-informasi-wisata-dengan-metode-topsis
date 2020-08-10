@extends("layouts.main")
@section("title")
    Edit Data Wisata
@endsection
@section("content")
    <div class="card">
        <div class="card-body">
            <form action="{{route("wisata_update")}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="wisata_id" value="{{$data->wisata_id}}" required>
                <div class="form-group">
                    <label for="">Pilih Nama Daerah</label>
                    <select name="daerah_wisata" id="" class="form-control" required>
                        <option value="">pilih</option>
                        @foreach($daerah as $value)
                            <option value="{{$value->nama_daerah}}" {{$data->daerah_wisata == $value->nama_daerah ? 'selected' : ''}}>
                                {{$value->nama_daerah}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih Kategori Objek Wisata</label>
                    <select name="kategori_wisata" id="" class="form-control" required>
                        <option value="">pilih</option>
                        @foreach($kategori as $value)
                            <option value="{{$value->nama_kategori_wisata}}" {{$data->kategori_wisata == $value->nama_kategori_wisata ? 'selected' : ''}}>
                                {{$value->nama_kategori_wisata}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Objek Wisata</label>
                    <input type="text" name="nama_wisata" class="form-control" value="{{$data->nama_wisata}}"
                           placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Pengunjung</label>
                    <input type="number" name="pengunjung_wisata" class="form-control"
                           value="{{$data->pengunjung_wisata}}" placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Fasilitas Wisata (%)</label>
                    <input type="number" name="fasilitas_wisata" class="form-control"
                           value="{{$data->fasilitas_wisata}}" placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Pelayanan Wisata (%)</label>
                    <input type="number" name="pelayanan_wisata" class="form-control"
                           value="{{$data->pelayanan_wisata}}" placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Jarik dari Kota Pusat (m)</label>
                    <input type="number" name="jarak_wisata" class="form-control" value="{{$data->jarak_wisata}}"
                           placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Harga Tiket Wisata (Rp)</label>
                    <input type="number" name="harga_tiket_wisata" class="form-control"
                           value="{{$data->harga_tiket_wisata}}" placeholder="ketitk disini.." required>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Wisata</label>
                    <textarea name="deskripsi_wisata" id="" class="form-control" rows="5" placeholder="Ketik deskripsi wisata.." required>{{$data->deskripsi_wisata}}</textarea>
                </div>
                <div class="form-group">
                    <a href="{{route("wisata")}}" class="btn btn-warning"><span class="fa fa-arrow-left"></span>
                        Back</a>
                    <button class="btn btn-primary" type="submit">Update <span class="fa fa-download"></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection