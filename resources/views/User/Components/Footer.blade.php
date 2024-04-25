        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Hubungi Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>JL. Lugu Margasari, Margasari, 52463, Margasari, Kec. Margasari, Kabupaten Tegal, Jawa
                                Tengah 52463</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telpon</h3>
                                    <p>(0283) 4691088</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Alamat Email</h3>
                                    <p>smkbpmgs@yahoo.co.id</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Pelayanan</h3>
                                    <p>Senin - Sabtu<br>07:00 - 17:00 WIB</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="{{ url('/aspirasi/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-lg-12 text-center">
                                    <h4>Pengaduan & Saran</h4>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="topik yang ingin disampaikan" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="pesan anda"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>


                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="{{ url ('/user/dashboard') }}" class="logo d-flex align-items-center">
                                <img src="/assets-user/img/logo-smk.png" alt="">
                                <span>B'Smart</span>
                            </a>
                            <p>"Dalam era sekolah digital, ilmu adalah cahaya yang membimbing kita menuju masa depan
                                yang cerah. Jadilah pelajar yang gigih, terampil, dan terbuka untuk terus belajar."</p>
                            <div class="social-links mt-3">
                                <a href="https://www.tiktok.com/@bhapama_official?_t=8frzOtExtQo&_r=1" class="tiktok"><i class="bi bi-tiktok"></i></a>
                                <a href="https://www.facebook.com/bhapama?mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/bhapama.official2020?igshid=MWZjMTM2ODFkZg==" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://youtube.com/@smkbhaktiprajamargasari?si=AW_Nq3RaqqH8cIJw" class="youtube"><i class="bi bi-youtube"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ url ('/user/dashboard') }}">Home</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">E-Learning</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ url ('/user/fasilitas-sekolah') }}">Fasilitas Sekolah</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/user/prestasi') }}">Prestasi</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Prodi</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Organisasi</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Unit Usaha</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/user/tentang-kami') }}">Tentang Kami</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact Us</h4>
                            <p>
                                JL. Lugu Margasari, Margasari, 52463, Margasari, Kec. Margasari, Kabupaten Tegal, Jawa
                                Tengah 52463<br><br>
                                <strong>Phone:</strong> (0283) 4691088<br>
                                <strong>Email:</strong> smkbpmgs@yahoo.co.id<br>
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>BHAPAMA</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                    Designed by <a href="{{ url ('/user/dashboard') }}">SMK Bhakti Praja Margasari</a>
                </div>
            </div>
        </footer><!-- End Footer -->
