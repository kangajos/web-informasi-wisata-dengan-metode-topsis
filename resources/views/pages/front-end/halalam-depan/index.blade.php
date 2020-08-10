@extends("layouts.front-end")
@section("hasil")
    <div class="site-section courses-title" id="courses-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">REKOMENDASI WISARA TERBAIK</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">

                <div class="owl-carousel col-12 nonloop-block-14">
                    @foreach($data_hasil as $data)
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="{{url('gambar')}}/{{$data-foto_wisata}}"
                                                                  alt="Image"
                                                                  class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">Rp {{$data->harga_tiket_wisata}}</span>
                                <div class="meta"><span class="icon-clock-o"></span> {{$data->updated_at}}</div>
                                <h3><a href="#">{{$data->nama_wisata}}</a></h3>
                                <p>Daerah {{$data->daerah_wisata}}, {{$data->kategori_wisata}} </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> {{$data->pengunjung_wisata}}</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> {{$data->score}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-7 text-center">
                    <button class="customPrevBtn btn btn-primary m-1">Prev</button>
                    <button class="customNextBtn btn btn-primary m-1">Next</button>
                </div>
            </div>
        </div>
    </div>
@endsection