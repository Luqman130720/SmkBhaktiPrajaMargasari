@extends('User.Layout.Index')
@section('content')



<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">

        @if(session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">"Hasil tertinggi pendidikan adalah toleransi."</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Kecerdasan ditambah dengan karakter merupakan tujuan
                    dari pendidikan sejati.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#index"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets-user/img/hero-1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->


<main id="main">

    <!-- ======= Pembukaan Section ======= -->
    <section id="index" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content text-center" data-aos="fade-up">
                        <h2>Keluarga besar SMK Bhakti Praja Margasari mengucapkan selamat datang dan selamat
                            bergabung menjadi
                            bagian dari keluarga ini.</h2>
                        <p>
                            SMK Bhakti Praja Margasari memiliki 4 Program Keahlian dengan peluang kerja tanpa batas.
                            Program Keahlian SMK Bhakti Praja Margasari meliputi: Multimedia, Akuntansi dan Keuangan
                            Lembaga, Otomatisasi dan Tata Kelola Perkantoran, dan Bisnis Daring dan Pemasaran.
                        </p>
                    </div>
                </div>


                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="/assets-user/img/kepsek.png" class="img-fluid" alt="">
                </div>

            </div>
            {{-- <div class="blog-author d-flex align-items-center">
                    <img src="/assets-user/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                    <div>
                        <h4>Jane Smith</h4>
                        <div class="social-links">
                            <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                        </div>
                        <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium.
                            Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium
                            ut unde voluptas.
                        </p>
                    </div>
                </div> --}}
        </div>

    </section>
    <!-- End Pembukaan Section -->

    <!-- ======= Porodi/Jurusan Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>prodi</h2>
                <p>Program Studi / Jurusan</p>
            </header>
            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box h-100 d-flex flex-column align-items-center justify-content-center">
                        <!-- Logo above -->
                        <div class="logo_prodi">
                            <img src="/assets-user/img/logo_prodi/dkv.png" alt="Logo" style="width: 100%;">
                        </div>
                        <!-- Caption above -->
                        <div class="mt-2">
                            <span class="text-center"> DKV</span>
                            <p class="text-center text-center-mobile">Desain Komunikasi Visual</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box h-100 d-flex flex-column align-items-center justify-content-center">
                        <!-- Logo above -->
                        <div class="logo_prodi">
                            <img src="/assets-user/img/logo_prodi/bd.png" alt="Logo" style="width: 100%;">
                        </div>
                        <!-- Caption above -->
                        <div class="mt-2">
                            <span class="text-center"> BD</span>
                            <p class="text-center text-center-mobile">Bisnis Digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box h-100 d-flex flex-column align-items-center justify-content-center">
                        <!-- Logo above -->
                        <div class="logo_prodi">
                            <img src="/assets-user/img/logo_prodi/akl.png" alt="Logo" style="width: 100%;">
                        </div>
                        <!-- Caption above -->
                        <div class="mt-2">
                            <span class="text-center"> AKL</span>
                            <p class="text-center text-center-mobile">Administrasi & Keuangan Lembaga</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box h-100 d-flex flex-column align-items-center justify-content-center">
                        <!-- Logo above -->
                        <div class="logo_prodi">
                            <img src="/assets-user/img/logo_prodi/mplb.png" alt="Logo" style="width: 100%;">
                        </div>
                        <!-- Caption above -->
                        <div class="mt-2">
                            <span class="text-center"> MP</span>
                            <p class="text-center text-center-mobile">Management Perkantoran dan Layanan Bisnis</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same structure for other columns -->
                <!-- ... -->

            </div>
        </div>
    </section>
    <!-- End Prodi/Jurusan Section -->


    <!-- ======= YTB Section ======= -->
    <section id="video" class="pt-5">
        <header class="section-header">
            <h2>ruang lingkup sekolah</h2>
            <p>SMK BHAKTI PRAJA MARGASARI</p>
        </header>
        <div class="container-fluid">
            <div class="embed-responsive embed-responsive-16by9">
                <!-- Replace 'VIDEO_ID' with the actual YouTube video ID -->
                <iframe width="100%" height="632" src="https://www.youtube.com/embed/QioBceNe9vY"
                    title="Serba Serbi Family Gathering SMK Bhakti Praja Margasari Tahun 2023 - Goes To Bandung"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- End YTB Section -->

    <!-- ======= Guru Produktif Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Team</h2>
                <p>Ketua Program Studi</p>
            </header>

            <div class="row gy-4">
                @foreach ($kaprodis as $kaprodi )

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('storage/' . $kaprodi->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $kaprodi->name }}</h4>
                            <span>{{ $kaprodi->program_studi }}</span>
                            <p>{{ $kaprodi->visi_misi }}</p>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>

    </section>
    <!-- End Guru Produktif Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>informasi</h2>
                <p>Data Sekolah</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="839" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Siswa</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Guru</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Prodi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Unit Usaha</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Lulusan Sekolah Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Job Seekers</h2>
                <p>Lulusan Smk Bhakti Praja Margasari</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">

                <div class="swiper-wrapper">
                    @foreach ($prospekkerjas as $data )

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                {{ $data->introduction }}
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('storage/' . $data->image) }}" class="testimonial-img" alt="">
                                <h3>{{ $data->name }}</h3>
                                <h4>{{ $data->Pekerjaan }}</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- End Lulusan Sekolah Section -->


    <!-- ======= MOU Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>MOU</h2>
                <p>Bekerja Sama Dengan</p>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="/assets-user/img/clients/aha_id.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="/assets-user/img/clients/pos.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="/assets-user/img/clients/m2art.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Berita Acara</h2>
                <p>Pusat Informasi Sekolah</p>
            </header>


            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($informasis as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('storage/'. $data->image) }}" class="img-fluid rounded" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $data->tanggal }}</h4>
                            <p>{{ $data->berita }}</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('storage/'. $data->image) }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox rounded"
                                    title="{{ $data->tanggal }}  <br> {{ $data->berita }} <br>{{ $data->deskripsi }}"><i
                                        class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Portfolio Section -->
</main>



@endsection
