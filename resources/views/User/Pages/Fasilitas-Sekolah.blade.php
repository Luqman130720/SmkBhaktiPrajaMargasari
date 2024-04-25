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
                <h1 data-aos="fade-up">"Berkembang Bersama, Menginspirasi Masa Depan."</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">komitmen sekolah untuk memberikan pendidikan yang mendukung
                    perkembangan holistik siswa, sekaligus memberi mereka inspirasi untuk mencapai potensi tertinggi.
                </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#fasilitas_sekolah"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets-user/img/hero-2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Fasilitasi Sekolah Section ======= -->
<section id="fasilitas_sekolah" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Fasilitas Sekolah</h2>
            <p>Fasilitas Sekolah</p>
        </header>

        <div class="row">
            @foreach ($fasilitass as $fasilitas)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        <img src="{{ asset('storage/' . $fasilitas->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">{{ $fasilitas->fasilitas }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>

</section>
<!-- End Fasilitas Sekolah Section -->

@endsection
