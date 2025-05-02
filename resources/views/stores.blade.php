<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papagesha</title>
    <link rel="icon" type="image/png" href="assets/auth/landing-nav.png">
    <link href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        .hero {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .about-section {
            padding: 80px 0;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .responsive-img {
            max-width: 100%;
            /* Default untuk mobile */
            height: auto;
            overflow: hidden;
            border-radius: 50px;
        }

        @media (min-width: 992px) {
            .responsive-img {
                max-width: 70%;
                /* Untuk mode laptop */
            }
        }

        .box-shadow-bottom {
            z-index: 1;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3) !important; 
        }

        @media (min-width: 992px) {
            .hero {
                min-height: 70vh !important;
                /* Ubah tinggi untuk tampilan laptop */
            }

            .hero .d-flex {
                min-height: 70vh !important;
            }

            .hero .hero-overlay {
                min-height: 70vh !important;
            }

            .tentang-kami {
                text-align: left !important;
            }

            .pict-tentang-kami {
                margin-bottom: 100px !important;
            }
        }

        /* Sembunyikan footer mobile di desktop */
        .footer-mobile {
            display: none !important;
        }

        /* Sembunyikan footer desktop di mobile */
        @media (max-width: 768px) {
            .footer-desktop {
                display: none !important;
            }

            .footer-mobile {
                display: flex !important;
            }

            .navbar {
                height: 150px !important;
            }
        }

        .store-card {
            height: 7vh !important;
            border-radius: 10px;
            border: 1px solid #ddd;
            display: flex;
            align-items: end;
            text-align: right;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .store-card-mobile {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .store-image {
            width: 200px;
            height: 200px;
            border-radius: 10px;
            margin-right: 15px;
            position: relative;
            top: 170px;
            left: 40px;
        }

        .store-image-mobile {
            width: 200px;
            height: 200px;
            border-radius: 10px;
            object-fit: cover;
        }

        .store-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 11px;
            vertical-align: middle;
        }

        .store-address, .store-hours {
            font-size: 14px;
            color: #666;
            display: flex;
            align-items: center;
        }

        .store-address svg, .store-hours svg {
            margin-right: 5px;
            color: green;
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 50vh !important;
                margin-top: 10px !important;
            }
            .bungkus {
                min-height: 50vh !important;
            }
            .hero-judul {
                font-size: 50px !important; /* Kurangi ukuran teks di mobile */
            }
        }

        @media (max-width: 480px) {
            .hero {
                min-height: 50vh !important;
                margin-top: 10px !important;
            }
            .bungkus {
                min-height: 50vh !important;
            }
            .hero-judul {
                font-size: 40px !important; /* Ukuran lebih kecil untuk HP */
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white box-shadow-bottom" style="height: 90px;">
        <div class="container">
            <img src="assets/landing/landing-nav.png" alt="" width="80px" height="70px">

            <!-- Tombol "Meja 01" (Mobile) -->
            <a class="btn text-center d-lg-none" style="font-size: 14px; font-weight: 700; color: #006041; width: 150px; height: 40px; 
                border: 1px solid #006041; border-radius: 100px;">
                Meja 01
            </a>

            <!-- Daftar Menu (Mobile) - Langsung Ditampilkan -->
            <ul class="navbar-nav text-center mt-2 d-block d-lg-none w-100 d-flex flex-row justify-content-center">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="about" style="font-size: 16px; font-weight: 600; color: #006041;">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="main" style="font-size: 16px; font-weight: 600; color: #006041;">Menu</a>
                </li>
                <li class="nav-item mx-2" style="border-bottom: 2px solid #3CAD51;">
                    <a class="nav-link" style="font-size: 16px; font-weight: 600; color: #006041;">Stores</a>
                </li>
            </ul>

            <!-- Daftar Menu (Desktop) -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="about" style="font-size: 16px; font-weight: 600; color: #006041;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="main" style="font-size: 16px; font-weight: 600; color: #006041;">Menu</a>
                    </li>
                    <li class="nav-item" style="border-bottom: 2px solid #3CAD51;">
                        <a class="nav-link text-center" style="font-size: 16px; font-weight: 600; color: #006041;">Stores</a>
                    </li>
                </ul>
            </div>

            <!-- Tombol "Meja 1" (Desktop) -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-center" style="font-size: 14px; font-weight: 700; color: #006041; width: 150px; height: 40px; 
                            border: 1px solid #006041; border-radius: 100px;">
                            Meja 1
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero text-center" style="position: relative; min-height: 100vh; margin: 0; padding: 0; background-color: #fff;">
        <div class="bungkus d-flex flex-column justify-content-center align-items-center mt-3" style="position: relative; z-index: 1; min-height: 100vh; width: 100%; text-align: center;">
            <span class="hero-judul" style="font-weight: 900; font-size: 90px; color: #006041;">Our Stores</span>
            <img src="assets/stores/map.png" alt="" style="max-width: 100%; height: auto; margin-top: 20px;">
        </div>
    </section>

    <section id="about" class="about-section d-flex flex-column justify-content-center align-items-center mx-2 lg-mx-5 class=" style="min-height: 100vh;">
        <div class="container row m-4 footer-desktop">
            <div class="col-12 col-md-6" style="height: 30vh !important;">
                <div class="store-card">
                    <img src="assets/stores/majalengka.png" alt="Store Image" class="store-image" 
                    class="store-image" style="margin-left: -10px;">
                    <div class="store-info">
                        <div class="store-title text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Papagesha Majalengka</div>
                    </div>
                </div>
                

                <!-- Bagian yang dipindahkan ke pojok kanan -->
                <div class="d-flex flex-column justify-content-end align-items-end w-50 ms-auto mt-3" style="margin-right: 50px;">
                    <!-- Alamat -->
                    <div class="store-address d-flex align-items-stretch w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                        </div>
                        <div class="d-flex align-items-start">
                            <span>Papagesha Majalengka - Jl. Pemuda No.156, <br>Cijati, Kec. Majalengka, Kabupaten <br>Majalengka, Jawa Barat 45417</span>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="store-hours mt-2 d-flex align-items-center w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/jam.png" alt="">
                        </div>
                        <div class="d-flex align-items-start">09:00 - 22:00</div>    
                    </div>
                </div>
            </div>
            <!-- Papagesha Rajagaluh -->
            <div class="col-12 col-md-6" style="height: 30vh !important;">
                <div class="store-card">
                    <img src="assets/stores/aeon.png" alt="Store Image" class="store-image"
                    class="store-image" style="margin-left: -10px;">
                    <div class="store-info">
                        <div class="store-title text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Papagesha Rajagaluh</div>
                    </div>
                </div>

                <!-- Bagian yang dipindahkan ke pojok kanan -->
                <div class="d-flex flex-column justify-content-end align-items-end w-50 ms-auto mt-3" style="margin-right: 50px;">
                    <!-- Alamat Rajagaluh -->
                    <div class="store-address d-flex align-items-stretch w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                        </div>
                        <div class="d-flex align-items-start">
                            <span>Papagesha Rajagaluh-Jl. Pangeran Muhamad <br>No.37, Rajagaluh, Kec. Rajagaluh, Kabupaten <br>Majalengka, Jawa Barat 45472</span>
                        </div>
                    </div>

                    <!-- Jam Operasional Rajagaluh -->
                    <div class="store-hours mt-2 d-flex align-items-center w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/jam.png" alt="">
                        </div>
                        <div class="d-flex align-items-start">10:00 - 21:00</div>    
                    </div>
                </div>
            </div>
            <!-- Papagesha Kadipaten -->
            <div class="col-12 col-md-6" style="height: 30vh !important; margin-top: 90px;">
                <div class="store-card">
                    <img src="assets/stores/kadipaten.png" alt="Store Image" class="store-image"
                    class="store-image" style="margin-left: -10px;">
                    <div class="store-info">
                        <div class="store-title text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Papagesha Kadipaten</div>
                    </div>
                </div>

                <!-- Bagian yang dipindahkan ke pojok kanan -->
                <div class="d-flex flex-column justify-content-end align-items-end w-50 ms-auto mt-3" style="margin-right: 50px;">
                    <!-- Alamat Kadipaten -->
                    <div class="store-address d-flex align-items-stretch w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                        </div>
                        <div class="d-flex align-items-start">
                            <span>Papagesha Kadipaten-Jl. Majalengka- <br>Kadipaten, Kadipaten, Kec. Kadipaten, <br>Kabupaten Majalengka, Jawa Barat</span>
                        </div>
                    </div>

                    <!-- Jam Operasional Kadipaten -->
                    <div class="store-hours mt-2 d-flex align-items-center w-100">
                        <div class="me-2 d-flex align-items-start justify-content-center">
                            <img src="assets/stores/jam.png" alt="">
                        </div>
                        <div class="d-flex align-items-start">09:00 - 21:00</div>    
                    </div>
                </div>
            </div>
        </div>

        <div class="container row m-4 footer-mobile">
            <div class="col-12">
                <div class="store-card-mobile row">
                    <div class="col-12 text-center">
                        <img src="assets/stores/majalengka.png" alt="Store Image" class="store-image-mobile">
                        <br><br>
                    </div>
                    <div class="col-12">
                        <div class="store-info">
                            <div class="store-title text-center">Papagesha Majalengka</div>
                        </div>
                    </div>
                   <div class="col-12">
                    <!-- Alamat Majalengka -->
                        <div class="store-address align-items-stretch w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                            </div>
                            <div class="align-items-start">
                                <span>Papagesha Majalengka - Jl. Pemuda No.156, <br>Cijati, Kec. Majalengka, Kabupaten <br>Majalengka, Jawa Barat 45417</span>
                            </div>
                        </div>
                   </div>
                    <!-- Jam Operasional Majalengka -->
                    <div class="col-12">
                        <div class="store-hours mt-2 align-items-center w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/jam.png" alt="">
                            </div>
                            <div class="align-items-start">09:00 - 22:00</div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="store-card-mobile row">
                    <div class="col-12 text-center">
                        <img src="assets/stores/aeon.png" alt="Store Image" class="store-image-mobile"
                        class="store-image" style="margin-left: -10px;">
                        <br><br>
                    </div>
                    <div class="col-12">
                        <div class="store-info">
                        <div class="store-title text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Papagesha Rajagaluh</div>
                        </div>
                    </div>
                   <div class="col-12">
                        <div class="store-address align-items-stretch w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                            </div>
                            <div class="align-items-start">
                                <span>Papagesha Rajagaluh-Jl. Pangeran Muhamad <br>No.37, Rajagaluh, Kec. Rajagaluh, Kabupaten <br>Majalengka, Jawa Barat 45472</span>
                            </div>
                        </div>
                   </div>
                    <!-- Jam Operasional -->
                    <div class="col-12">
                        <div class="store-hours mt-2 align-items-center w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/jam.png" alt="">
                            </div>
                            <div class="align-items-start">10:00 - 21:00</div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="store-card-mobile row">
                    <div class="col-12 text-center">
                        <img src="assets/stores/kadipaten.png" alt="Store Image" class="store-image-mobile">
                        <br><br>
                    </div>
                    <div class="col-12">
                        <div class="store-info">
                            <div class="store-title text-center">Papagesha Kadipaten</div>
                        </div>
                    </div>
                   <div class="col-12">
                        <div class="store-address align-items-stretch w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/lokasi.png" alt="" class="mt-1 img-fluid">
                            </div>
                            <div class="align-items-start">
                                <span>Papagesha Kadipaten-Jl. Majalengka- <br>Kadipaten, Kadipaten, Kec. Kadipaten, <br>Kabupaten Majalengka, Jawa Barat</span>
                            </div>
                        </div>
                   </div>
                    <!-- Jam Operasional -->
                    <div class="col-12">
                        <div class="store-hours mt-2 align-items-center w-100">
                            <div class="me-2 align-items-start justify-content-center">
                                <img src="assets/stores/jam.png" alt="">
                            </div>
                            <div class="align-items-start">09:00 - 21:00</div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-desktop d-flex footer align-items-center justify-content-center" style="position: relative; height: 273px; margin: 0; padding: 0;">

        <!-- Background Overlay -->
        <div style="
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        background-color: rgba(0, 96, 65, 0.1);">
        </div>

        <!-- Konten Footer -->
        <div class="row d-flex align-items-center justify-content-center p-3 w-65"
            style="position: absolute; top: 0; z-index: 1; color: #006041; 
               display: inline-flex; width: auto; border-radius: 10px; align-self: flex-start;">

            <div class="col">
                <div style="margin-right: 50px;">
                    <img src="assets/landing/landing-footer.png" alt="" width="148px" height="138px">
                </div>
            </div>

            <div class="col">
                <div style="text-align: left; margin-right: 15px;">
                    <b style="margin-bottom: 10px;">Contact Us</b>
                    <div style="margin-bottom: 10px;">
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                        <span>Papagesha Majalengka</span>
                    </div>
                    <div>
                        <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                        <span>085182245177</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div style="text-align: left; margin-right: 15px;">
                    <b style="margin-bottom: 10px;"><br></b>
                    <div style="margin-bottom: 10px;">
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                        <span>Papagesha Rajagaluh</span>
                    </div>
                    <div>
                        <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                        <span>085182245176</span>
                    </div>
                </div>
            </div>

            <div class="col" style="text-align: left;">
                <b style="margin-bottom: 10px;"><br></b>
                <div style="margin-bottom: 10px;">
                    <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                    <span>Papagesha Kadipaten</span>
                </div>
                <div>
                    <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                    <span>085182245175</span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>

                <div class="col" style="text-align: right;">
                    <img src="assets/landing/landing-footer-link-1.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-2.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-3.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-4.png" alt="" style="margin: 0 5px;">
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer-mobile d-flex flex-column align-items-center justify-content-center"
        style="position: relative; height: auto; margin: 0; padding: 20px 0;">

        <!-- Background Overlay -->
        <div style="
        position: absolute; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        background-color: rgba(0, 96, 65, 0.1);">
        </div>

        <!-- Konten Footer -->
        <div class="container position-relative text-center text-lg-start" style="z-index: 1; color: #006041;">
            <div class="row align-items-center justify-content-center gy-3">

                <!-- Logo -->
                <div class="col-12 col-lg-3 text-center text-lg-start">
                    <img src="assets/landing/landing-footer.png" alt="" width="148px" height="138px">
                </div>

                <!-- Contact Us 1 -->
                <div class="col-12 col-sm-6 col-lg-3 text-center text-lg-start">
                    <b>Contact Us</b>
                    <div>
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                        <span>Papagesha Majalengka</span>
                    </div>
                    <div>
                        <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                        <span>085182245177</span>
                    </div>
                </div>

                <!-- Contact Us 2 -->
                <div class="col-12 col-sm-6 col-lg-3 text-center text-lg-start">
                    <b><br></b>
                    <div>
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                        <span>Papagesha Rajagaluh</span>
                    </div>
                    <div>
                        <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                        <span>085182245176</span>
                    </div>
                </div>

                <!-- Contact Us 3 -->
                <div class="col-12 col-sm-6 col-lg-3 text-center text-lg-start">
                    <b><br></b>
                    <div>
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px">
                        <span>Papagesha Kadipaten</span>
                    </div>
                    <div>
                        <img src="assets/landing/landing-footer-wa.png" alt="" width="23px" height="23px">
                        <span>085182245175</span>
                    </div>
                </div>

            </div>

            <br>
            <!-- Social Media Links -->
            <div class="row mt-3 text-center">
                <div class="col">
                    <img src="assets/landing/landing-footer-link-1.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-2.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-3.png" alt="" style="margin: 0 5px;">
                    <img src="assets/landing/landing-footer-link-4.png" alt="" style="margin: 0 5px;">
                </div>
            </div>
        </div>
    </footer>

    <script src="asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')"></script>
</body>

</html>