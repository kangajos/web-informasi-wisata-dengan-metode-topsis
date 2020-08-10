<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
<head>
    <title>Wisata | TOPSIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{url("front-end")}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url("front-end")}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url("front-end")}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url("front-end")}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url("front-end")}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url("front-end")}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{url("front-end")}}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{url("front-end")}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{url("front-end")}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{url("front-end")}}/css/aos.css">

    <link rel="stylesheet" href="{{url("front-end")}}/css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="site-logo mr-auto w-25"><a href="{{url("")}}">Aneka Wisata</a></div>

                <div class="mx-auto text-center">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="#courses-section" class="nav-link">Wisata</a></li>
                            {{--                            <li><a href="#programs-section" class="nav-link">Programs</a></li>--}}
                            {{--                            <li><a href="#teachers-section" class="nav-link">Teachers</a></li>--}}
                        </ul>
                    </nav>
                </div>

                <div class="ml-auto w-25">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                            <li class="cta"><a href="#contact-section" class="nav-link"><span>Kontak</span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="intro-section" id="home-section">

        <div class="slide-1" style="background-image: url({{url("gambar/0_untuk_home.jpg")}});"
             data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4">
                                <h1 data-aos="fade-up" data-aos-delay="100">Wisata Alam dan Buatan</h1>
                                <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Wisata merupakan tempat orang berlibur, dimana tempat tersebut dapat menambah wawasan dan dapat kebahagian tersendiri.</p>
                                <p data-aos="fade-up" data-aos-delay="300"><a href="#courses-section"
                                                                              class="btn btn-primary py-3 px-5 btn-pill">Jelajahi Wisata</a></p>

                            </div>

                            <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                <form action="{{route("topsis")}}" method="post" class="form-box">
                                    {{csrf_field()}}
                                    <h3 class="h4 text-center text-black mb-4">Cari Wisata Terbaik Anda</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="kategori" id="" class="form-control input-sm">
                                                    <option value="">Pilih Kategori Wisata</option>
                                                     @foreach($kategori as $value)
                                                        <option value="{{$value->nama_kategori_wisata}}">{{$value->nama_kategori_wisata}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="daerah" id="" class="form-control">
                                                    <option value="">Pilih Daerah Wisata</option>
                                                    @foreach($daerah as $value)
                                                        <option value="{{$value->nama_daerah}}">{{$value->nama_daerah}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="harga" id="" class="form-control">
                                                    <option value="">Pilih Harga Tiket</option>
                                                    <option value="murah">Murah</option>
                                                    <option value="Sedang">Sedang</option>
                                                    <option value="Mahal">Mahal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="pelayanan" id="" class="form-control">
                                                    <option value="">Pilih Pelayanan</option>
                                                    <option value="baik">Baik</option>
                                                    <option value="cukup">Cukup</option>
                                                    <option value="kurang">Kurang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="fasilitas" id="" class="form-control">
                                                    <option value="">Pilih Fasilitas</option>
                                                    <option value="baik">Baik</option>
                                                    <option value="cukup">Cukup</option>
                                                    <option value="kurang">Kurang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="jarak" id="" class="form-control">
                                                    <option value="">Pilih jarak</option>
                                                    <option value="dekat">Dekat</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="jauh">Jauh</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="pengunjung" id="" class="form-control">
                                                    <option value="">Pilih Jumlah pengunjung</option>
                                                    <option value="ramai">Ramai</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="sepi">Sepi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="customPrevBtn btn btn-primary m-1 btn-block">Cari
                                                    Sekarang
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <button class="customPrevBtn btn btn-primary m-1 btn-block">Cari Sekarang</button>--}}
                                    {{--                                    </div>--}}
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


{{--    @yield("hasil")--}}
    <div class="site-section courses-title" id="courses-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">REKOMENDASI WISATA TERBAIK</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">

                <div class="owl-carousel col-12 nonloop-block-14">
                    @foreach($data_hasil as $key => $data)
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="{{url('gambar')}}/{{$data->foto_wisata}}"
                                                                  alt="Image"
                                                                  class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">Rp {{number_format($data->harga_tiket_wisata)}}</span>
                                <div class="meta"><span class="icon-clock-o"></span> {{$data->updated_at}}</div>
                                <h3><a href="{{route("detail_wisata",$data->wisata_id."#programs-section")}}">{{$data->nama_wisata}}</a></h3>
                                <p>Daerah {{$data->daerah_wisata}}, {{$data->kategori_wisata}}</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-eye"></span> {{$data->pengunjung_wisata}} Orang</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"> {{number_format(\App\TopsisModel::CountKomen(array("wisata_id" =>$data->wisata_id)))}}</span></div>
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

{{--    <div class="site-section" id="programs-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5 justify-content-center">--}}
{{--                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">--}}
{{--                    <h2 class="section-title">Our Programs</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus--}}
{{--                        sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam,--}}
{{--                        illum sed veniam!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mb-5 align-items-center">--}}
{{--                <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <img src="{{url("front-end")}}/images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <h2 class="text-black mb-4">We Are Excellent In Education</h2>--}}
{{--                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro--}}
{{--                        possimus fugiat quo molestiae illo.</p>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap mb-3">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>--}}
{{--                        <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>--}}
{{--                        <div><h3 class="m-0">150 Universities Worldwide</h3></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row mb-5 align-items-center">--}}
{{--                <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <img src="{{url("front-end")}}/images/undraw_teaching.svg" alt="Image" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <h2 class="text-black mb-4">Strive for Excellent</h2>--}}
{{--                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro--}}
{{--                        possimus fugiat quo molestiae illo.</p>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap mb-3">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>--}}
{{--                        <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>--}}
{{--                        <div><h3 class="m-0">150 Universities Worldwide</h3></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row mb-5 align-items-center">--}}
{{--                <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <img src="{{url("front-end")}}/images/undraw_teacher.svg" alt="Image" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <h2 class="text-black mb-4">Education is life</h2>--}}
{{--                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro--}}
{{--                        possimus fugiat quo molestiae illo.</p>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap mb-3">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>--}}
{{--                        <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex align-items-center custom-icon-wrap">--}}
{{--                        <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>--}}
{{--                        <div><h3 class="m-0">150 Universities Worldwide</h3></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="site-section" id="teachers-section">--}}
{{--        <div class="container">--}}

{{--            <div class="row mb-5 justify-content-center">--}}
{{--                <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">--}}
{{--                    <h2 class="section-title">Our Teachers</h2>--}}
{{--                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque!--}}
{{--                        Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas--}}
{{--                        quibusdam ullam, illum sed veniam!</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}

{{--                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="teacher text-center">--}}
{{--                        <img src="{{url("front-end")}}/images/person_1.jpg" alt="Image"--}}
{{--                             class="img-fluid w-50 rounded-circle mx-auto mb-4">--}}
{{--                        <div class="py-2">--}}
{{--                            <h3 class="text-black">Benjamin Stone</h3>--}}
{{--                            <p class="position">Physics Teacher</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus--}}
{{--                                enim iusto tempora, adipisci at provident.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="teacher text-center">--}}
{{--                        <img src="{{url("front-end")}}/images/person_2.jpg" alt="Image"--}}
{{--                             class="img-fluid w-50 rounded-circle mx-auto mb-4">--}}
{{--                        <div class="py-2">--}}
{{--                            <h3 class="text-black">Katleen Stone</h3>--}}
{{--                            <p class="position">Physics Teacher</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus--}}
{{--                                enim iusto tempora, adipisci at provident.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="teacher text-center">--}}
{{--                        <img src="{{url("front-end")}}/images/person_3.jpg" alt="Image"--}}
{{--                             class="img-fluid w-50 rounded-circle mx-auto mb-4">--}}
{{--                        <div class="py-2">--}}
{{--                            <h3 class="text-black">Sadie White</h3>--}}
{{--                            <p class="position">Physics Teacher</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus--}}
{{--                                enim iusto tempora, adipisci at provident.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center align-items-center">--}}
{{--                <div class="col-md-8 text-center testimony">--}}
{{--                    <img src="{{url("front-end")}}/images/person_4.jpg" alt="Image"--}}
{{--                         class="img-fluid w-25 mb-4 rounded-circle">--}}
{{--                    <h3 class="mb-4">Jerome Jensen</h3>--}}
{{--                    <blockquote>--}}
{{--                        <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius--}}
{{--                            necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo--}}
{{--                            provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="site-section pb-0">--}}

{{--        <div class="future-blobs">--}}
{{--            <div class="blob_2">--}}
{{--                <img src="{{url("front-end")}}/images/blob_2.svg" alt="Image">--}}
{{--            </div>--}}
{{--            <div class="blob_1">--}}
{{--                <img src="{{url("front-end")}}/images/blob_1.svg" alt="Image">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">--}}
{{--                <div class="col-lg-7 text-center">--}}
{{--                    <h2 class="section-title">Why Choose Us</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">--}}

{{--                    <div class="p-4 rounded bg-white why-choose-us-box">--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span--}}
{{--                                            class="icon icon-graduation-cap"></span></span></div>--}}
{{--                            <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>--}}
{{--                            </div>--}}
{{--                            <div><h3 class="m-0">150 Universities Worldwide</h3></div>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span--}}
{{--                                            class="icon icon-graduation-cap"></span></span></div>--}}
{{--                            <div><h3 class="m-0">Top Professionals in The World</h3></div>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>--}}
{{--                            </div>--}}
{{--                            <div><h3 class="m-0">Expand Your Knowledge</h3></div>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span--}}
{{--                                            class="icon icon-graduation-cap"></span></span></div>--}}
{{--                            <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">--}}
{{--                            <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>--}}
{{--                            </div>--}}
{{--                            <div><h3 class="m-0">Best Teachers</h3></div>--}}
{{--                        </div>--}}

{{--                    </div>--}}


{{--                </div>--}}
{{--                <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">--}}
{{--                    <img src="{{url("front-end")}}/images/person_transparent.png" alt="Image" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="site-section bg-light" id="contact-section">--}}
{{--        <div class="container">--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-7">--}}


{{--                    <h2 class="section-title mb-3">Message Us</h2>--}}
{{--                    <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam--}}
{{--                        temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>--}}

{{--                    <form method="post" data-aos="fade">--}}
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 mb-3 mb-lg-0">--}}
{{--                                <input type="text" class="form-control" placeholder="First name">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input type="text" class="form-control" placeholder="Last name">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="text" class="form-control" placeholder="Subject">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="email" class="form-control" placeholder="Email">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <textarea class="form-control" id="" cols="30" rows="10"--}}
{{--                                          placeholder="Write your message here."></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6">--}}

{{--                                <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"--}}
{{--                                       value="Send Message">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <footer class="footer-section bg-white" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>About OneSchool</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et
                        veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit
                        quaerat dicta.</p>
                </div>

                <div class="col-md-3 ml-auto">
                    <h3>Links</h3>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Teachers</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h3>Subscribe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto
                        architecto? Numquam, natus?</p>
                    <form action="#" class="footer-subscribe">
                        <div class="d-flex mb-5">
                            <input type="text" class="form-control rounded-0" placeholder="Email">
                            <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                        </div>
                    </form>
                </div>

            </div>

            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart"
                                                                                aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div> <!-- .site-wrap -->

<script src="{{url("front-end")}}/js/jquery-3.3.1.min.js"></script>
<script src="{{url("front-end")}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{url("front-end")}}/js/jquery-ui.js"></script>
<script src="{{url("front-end")}}/js/popper.min.js"></script>
<script src="{{url("front-end")}}/js/bootstrap.min.js"></script>
<script src="{{url("front-end")}}/js/owl.carousel.min.js"></script>
<script src="{{url("front-end")}}/js/jquery.stellar.min.js"></script>
<script src="{{url("front-end")}}/js/jquery.countdown.min.js"></script>
<script src="{{url("front-end")}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{url("front-end")}}/js/jquery.easing.1.3.js"></script>
<script src="{{url("front-end")}}/js/aos.js"></script>
<script src="{{url("front-end")}}/js/jquery.fancybox.min.js"></script>
<script src="{{url("front-end")}}/js/jquery.sticky.js"></script>


<script src="{{url("front-end")}}/js/main.js"></script>

</body>
</html>