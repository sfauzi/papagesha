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
                min-height: 50vh !important;
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
                height: 90px !important;
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
                min-height: 35vh !important;
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
                min-height: 35vh !important;
                margin-top: 10px !important;
            }
            .bungkus {
                min-height: 50vh !important;
            }
            .hero-judul {
                font-size: 40px !important; /* Ukuran lebih kecil untuk HP */
            }
        }

        .order-card {
            border: 1px solid #006041;
            border-radius: 15px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 80%;
        }
        .order-info {
            flex-grow: 1;
        }
        .order-image {
            width: 80px;
            height: auto;
        }
        .order-price {
            color: #A64B2A;
            font-weight: bold;
            font-size: 18px;
        }
        .order-quantity {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #006041;
            border-radius: 50px;
            padding: 5px 10px;
            width: 100px;
        }
        .order-quantity button {
            border: none;
            background: none;
            font-size: 20px;
            font-weight: bold;
            color: #006041;
            cursor: pointer;
        }
        .order-note {
            border: 1px solid #006041;
            border-radius: 50px;
            padding: 5px 10px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Pastikan ukuran normal di desktop */
        .pilih-pembayaran {
            border-color: #006041;
            background-color: #E32121 !important;
            padding: 10px 20px; /* Ukuran default untuk desktop */
        }
        .pilih-pembayaran-btn {
            font-size: 20px; /* Ukuran teks default untuk desktop */
        }

        /* Mode Mobile (<576px) */
        @media (max-width: 576px) {
            .pilih-pembayaran {
                padding: 6px 12px; /* Kurangi padding hanya di mobile */
            }
            .pilih-pembayaran-btn {
                font-size: 14px; /* Perkecil teks hanya di mobile */
            }
        }

        /* Default: Desktop (tetap w-50) */
        .responsive-width {
            width: 50%;
        }

        .img-alert {
            width: 80px; /* Gambar lebih kecil di mobile */
        }
        
        /* Ukuran lebih kecil untuk mobile */
        @media (max-width: 768px) {
            .responsive-width {
                width: 100%;
            }

            .btn-back {
                display: none !important;
            }

            .img-alert {
                width: 50px; /* Gambar lebih kecil di mobile */
            }
            .text-alert {
                font-size: 14px; /* Font lebih kecil di mobile */
            }
            .btn-small {
                font-size: 14px; /* Tombol lebih kecil */
                padding: 6px 12px;
            }
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white box-shadow-bottom" style="height: 90px;">
        <div class="container">
            <img src="assets/landing/landing-nav.png" alt="" width="80px" height="70px">

            <!-- Tombol "Meja 1" (Mobile) -->
            <a class="btn text-center d-lg-none" style="font-size: 14px; font-weight: 700; color: #006041; width: 150px; height: 40px; 
                border: 1px solid #006041; border-radius: 100px;">
                Meja 1
            </a>

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

    <section class="hero text-center position-relative" style="height: 30vh; margin: 0; padding: 0; background-color: #fff;">
        <!-- Tombol Back (Disembunyikan di Mobile) -->
        <a href="confirm" class="position-absolute top-0 start-0 m-3 text-dark btn-back" 
        style="font-size: 24px; font-weight: bold; text-decoration: none; z-index: 2;">
            <img src="assets/confirm/chevron-left-outline.png" alt="">
        </a>

        <!-- Konten -->
        <div class="d-flex flex-column flex-lg-row" style="position: relative; z-index: 1; height: 30vh; width: 100%; margin: 0; padding: 0;">
            <!-- Bagian Kiri -->
            <div class="col-lg-12 d-flex justify-content-center" style="height: 100%; padding: 20px;">
                <div style="max-width: 800px; padding: 20px; text-align: center; margin: 0 auto;">
                    <div style="overflow: hidden;">
                        <span class="hero-judul" style="font-weight: 800; font-size: 70px; color: #006041;">Checkout</span>
                    </div>
                    <br><br>
                    <div class="p-1" style="max-width: 400px; border-radius: 20px; border: 2px dashed #B5C269; padding: 10px; margin: 0 auto;">
                        <span style="font-size: 22px; font-weight: 500; color: #373D1A;">Dine In</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="about-section d-flex flex-column justify-content-center align-items-center mx-2 lg-mx-5" style="min-height: 100vh; margin: 0; padding: 0;">
        <div class="container row m-4 responsive-width justify-content-center">
            <div class="col-12 p-3">
                <!-- Informasi Outlet -->
                <div>
                    <p class="mb-3 text-md-start" style="font-size: 20px; font-weight: 600; color: #222126;">
                        Outlet
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="assets/landing/landing-footer-loc.png" alt="" width="23px" height="23px" class="me-2 mt-2">
                        <p class="mb-0" style="font-size: 28px; font-weight: 600; color: rgba(34, 33, 38, 1);">
                            Papagesha Majalengka
                        </p>
                    </div>
                </div>

                <!-- Detail Pesanan -->
                <div class="d-flex flex-row w-100 mt-3 align-items-center justify-content-between">
                    <div class="d-flex align-items-start">
                        <img src="assets/confirm/record-fill.png" alt="" width="23px" height="23px" class="me-2 mt-2">
                        <p class="mb-0" style="font-size: 28px; font-weight: 600; color: rgba(34, 33, 38, 1);">
                            Dine In &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Meja 1
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-column justify-content-center align-items-center py-3">
                <!-- Card -->
                <div class="border rounded p-3 w-100">
                    <table class="table">
                        <thead>
                            <tr class="border-bottom">
                                <th>Pesan</th>
                                <th class="text-end" style="color: rgba(34, 33, 38, 0.53);">Total 3 Items</th>
                            </tr>
                        </thead>
                        <tbody style="font-weight: 700; font-size: 17px; color: rgba(34, 33, 38, 1);">
                            <tr style="border-bottom: 1px solid transparent;">
                                <td>1× Iced Kopi Susu Papa (Reguler)</td>
                                <td class="text-end" style="font-weight: 600;">Rp.15.000</td>
                            </tr>
                            <tr style="border-bottom: 1px solid transparent;">
                                <td>1× Iced Choco Papa (Grande)</td>
                                <td class="text-end" style="font-weight: 600;">Rp.20.000</td>
                            </tr>
                            <tr style="border-bottom: 1px solid transparent;">
                                <td>1× Croissant Chocolate</td>
                                <td class="text-end" style="font-weight: 600;">Rp.30.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Total di luar tabel -->
                <div class="w-100 d-flex justify-content-between mt-2 p-3" style="font-weight: 700; font-size: 17px; color: rgba(34, 33, 38, 1);">
                    <p class="fw-bold mb-0">Total</p>
                    <p class="text-end mb-0" style="color: rgba(34, 33, 38, 0.76);">Rp.65.000</p>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center align-items-center py-2">
                <div class="alert d-flex align-items-center w-100 p-2 p-md-3" 
                    style="background-color: #D3E4CD; color: #222; border-radius: 10px;">
                    <img src="assets/confirm/warning.png" alt="warning" class="me-2 img-alert">
                    <strong class="fw-bold text-alert">
                        Pesanan akan diantar ke <span class="text-uppercase">MEJA 1</span>. 
                        Jangan pindah meja sebelum pesanan selesai ya.
                    </strong>
                </div>
            </div>
            
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center align-items-center py-4">
                <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
                    <div class="d-flex align-items-center">
                        <img src="assets/confirm/warning-bw.png" alt="warning" class="me-2 img-alert">
                        <p class="mb-0 fw-bold text-alert">Berubah pikiran?</p>
                    </div>
                    <a href="confirm">
                    <button class="btn btn-outline-danger btn-small mt-2 mt-md-0">Batalkan</button>
    </a>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center" style="height: 15vh !important;">
                <div class="text-center w-100 h-100">
                    <a href="finish">
                        <button class="btn btn-danger w-100 h-100 py-2" style="border-radius: 10px; font-size: 35px; font-weight: 600;">Bayar di Kasir</button>
                    </a>
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