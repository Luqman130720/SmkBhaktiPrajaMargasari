@extends('User.Layout.Index')
@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">"Hasil tertinggi pendidikan adalah toleransi.</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Kecerdasan ditambah dengan karakter merupakan tujuan
                    dari pendidikan sejati.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#blog"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets-user/img/hero-4.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach ($intoduction as $data )

            <div class="col-lg-12 entries">

                <article class="entry entry-single">

                    <div class="mb-5">
                        <img src="{{ asset('storage/'. $data->image) }}" alt="" class=""
                            style="width: 100%; height: auto;">
                    </div>

                    <h2 class="entry-title">
                        <a href="">{{ $data->organisasi }}</a>
                    </h2>

                    <div class="entry-content">
                        <p>
                            {{ $data->desk_1 }}
                        </p>

                        <blockquote>
                            <p>
                                {{ $data->moto_organisasi }}
                            </p>
                        </blockquote>

                        <p>
                            {{ $data->desk_2 }}
                        </p>


                    </div>

                </article><!-- End blog entry -->

            </div><!-- End blog entries list -->

            @endforeach



        </div>

    </div>
</section><!-- End Blog Single Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Blog</h2>
            <p>Recent posts form our Blog</p>
        </header>

        <div class="row">
            @foreach ($events as $event)

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('storage/'. $event->image) }}" class="img-fluid" alt="">
                    </div>
                    <h3 class="post-title text-center">{{ $event->judul }}</h3>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</section>
<!-- End Recent Blog Posts Section -->
@endsection
