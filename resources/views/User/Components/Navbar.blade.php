    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url ('/user/dashboard') }}" class="logo d-flex align-items-center">
                <img src="/assets-user/img/logo-smk.png" alt="">
                <span>BHAPAMA</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown">
                        <a href=""><span>E-Learning</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('https://sim.pijarsekolah.id/smkbhapama/login') }}">Pijar Sekolah (Guru)</a>
                            </li>
                            <li><a href="{{ url('https://siswa.pijarsekolah.id/smkbhapama/login') }}">Pijar Sekolah (Siswa)</a>
                            </li>
                            <li><a href="{{ url('http://36.64.209.65:8154/') }}">E-Raport</a>
                            </li>
                        </ul>
                        
                        {{-- <ul>
                            <li><a href="{{ url('http://36.64.209.65:8154/') }}">E-Raport</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url ('/user/fasilitas-sekolah') }}">Fasilitas Sekolah</a>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('/user/prestasi') }}">Prestasi</a></li>
                    <li class="dropdown">
                        <a href=""><span>Prodi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($prodis as $prodi)
                            <li><a href="{{ url('/user/event-prodi', $prodi) }}">{{ $prodi->kepanjangan_prodi }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href=""><span>Organisasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($organisasis as $organisasi)
                            <li><a
                                    href="{{ url('/user/event-organisasi', $organisasi) }}">{{ $organisasi->organisasi }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href=""><span>Unit Usaha</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($unitusahas as $unitusaha)
                            <li><a href="{{ url('/user/unit-usaha', $unitusaha) }}">{{ $unitusaha->unit_usaha }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="{{ url('/user/tentang-kami') }}">Tentang Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
