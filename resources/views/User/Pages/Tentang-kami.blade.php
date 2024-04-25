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
                <h1 data-aos="fade-up">"Mendidik Generasi Emas, Membangun Masa Depan."</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">memberikan pendidikan yang luar biasa kepada generasi muda,
                    meyakini bahwa investasi dalam pendidikan adalah kunci membangun masa depan yang cerah.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#tentang_kami"
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
<section id="tentang_kami" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="/assets-user/img/blog/blog-1.jpg" alt="" class="text-center"
                            style="width: 100%; height: auto;">
                    </div>

                    <h2 class="entry-title text-center mt-5">
                        <a href="">Selamat datang di SMK Bhakti Praja Margasari</a>
                    </h2>

                    <div class="entry-content">
                        <p> 
                            Kami di SMK Bhakti Praja Margasari dengan bangga mempersembahkan diri sebagai pusat
                            pendidikan yang
                            berdedikasi untuk membentuk generasi masa depan yang cerdas, kreatif, dan berkomitmen untuk
                            kemajuan. Sejak didirikan, SMK Bhakti Praja Margasari telah menjadikan pendidikan sebagai
                            prioritas
                            utama kami. Kami berkomitmen untuk memberikan pengalaman pendidikan yang memadai dan
                            berkelanjutan, yang memungkinkan setiap siswa tumbuh sebagai individu yang kompeten dan
                            berempati.
                        </p>

                        <p>
                            Di SMK Bhakti Praja Margasari, kami memegang teguh nilai-nilai inklusi dan kerjasama. Kami
                            menciptakan
                            lingkungan belajar yang inklusif, yang mendorong semua siswa untuk mengejar minat mereka
                            dengan antusiasme. Kurikulum kami yang komprehensif, fasilitas modern, dan tim pengajar yang
                            berpengalaman semua berperan dalam membentuk lingkungan belajar yang inspiratif. Kami
                            bersemangat untuk bekerja sama dengan siswa, orangtua, dan komunitas untuk mencapai
                            pencapaian akademik dan pribadi yang luar biasa.
                        </p>
                        <p>
                            Terima kasih telah memilih SMK Bhakti Praja Margasari sebagai mitra pendidikan Anda. Kami
                            berharap dapat
                            berbagi pengalaman pendidikan yang bermakna dan produktif bersama Anda. Untuk informasi
                            lebih lanjut tentang kami, jangan ragu untuk menghubungi kami. Selamat bergabung dengan
                            SMK Bhakti Praja Margasari
                        </p>

                        <h2 class="entry-title text-center mt-5">
                            <a href="">Visi</a>
                        </h2>

                        <blockquote>
                            <p>
                                “Menjadi pusat pendidikan dan pelatihan untuk membentuk sumber daya manusia yang berjiwa
                                Pancasila dan unggul”.
                            </p>
                        </blockquote>
                    </div>
                </article><!-- End blog entry -->
            </div><!-- End blog entries list -->
        </div>
    </div>
</section><!-- End Blog Single Section -->

<section id="features" class="features">

    <div class="container" data-aos="fade-up">

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <h3>Misi</h3>

            <div class="row">

                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="/assets-user/img/features-3.png" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-line-chart-line"></i>
                            <div>
                                <h4>01</h4>
                                <p>Menyiapakan lulusan pelajar Pancasila yang mampu menegembangkan diri sesuai dengan
                                    perkembangan zaman.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="ri-stack-line"></i>
                            <div>
                                <h4>02</h4>
                                <p>Mengembangkan kultur sekolah untuk memberdayakan peserta didik agar mejadi insan yang
                                    berakhlak mulia, berkarakter, kreatif dan kompetitif;
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="ri-brush-4-line"></i>
                            <div>
                                <h4>03</h4>
                                <p>Meningkatkan mutu kompetensi pendidik dan tenaga kependidikan yang profesional;</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-magic-line"></i>
                            <div>
                                <h4>04</h4>
                                <p>Mengembangkan sarana dan prasarana yang memadai untuk mendukung proses pembelajaran
                                    yang bermutu, ramah lingkungan, serta mencegah terjadinya pencemaran dan kerusakan
                                    lingkungan.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="ri-command-line"></i>
                            <div>
                                <h4>05</h4>
                                <p>Meningkatkan pelayanan prima kepada masyarakat sesuai dengan standar pelayanan dan
                                    pengelolaan yang sesuai dengan sistem menejemen mutu.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- End Feature Icons -->
    </div>
</section>



@endsection
