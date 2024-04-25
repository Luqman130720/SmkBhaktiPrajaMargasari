@extends('User.Layout.Index')
@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">"Pendidikan Berkualitas, Karakter Unggul."</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">menekankan pentingnya kombinasi pendidikan berkualitas
                    tinggi dengan pengembangan karakter yang kuat, mempersiapkan siswa untuk menjadi individu yang
                    bijaksana dan beretika.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#prestasi"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets-user/img/hero-3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Portfolio Section ======= -->
<section id="prestasi" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Prestasi</h2>
            <p>Prestasi & Kejuaraan</p>
        </header>


        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($prestasis as $prestasi)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset('storage/'. $prestasi->image) }}" class="img-fluid rounded" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>{{ $prestasi->prestasi }}</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('storage/'. $prestasi->image) }}" data-gallery="portfolioGallery"
                                class="portfokio-lightbox rounded" title="{{ $prestasi->prestasi }}"><i
                                    class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section><!-- End Portfolio Section -->


@endsection
