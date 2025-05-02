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

        /* Desktop View (Tampilkan hanya di layar besar) */
        .desktop-view {
            display: flex !important;
        }

        .mobile-view {
            display: none !important;
        }

        /* Mobile View (Tampilkan hanya di layar kecil) */
        @media (max-width: 768px) {
            .desktop-view {
                display: none !important;
            }

            .mobile-view {
                display: flex !important;
            }
        }
    </style>
</head>

<body>
    <!-- Desktop View -->
    <div class="desktop-view d-flex w-100" style="height: 100vh; overflow: hidden;">
        <div style="width: 60%; height: 100vh; display: flex; align-items: center; justify-content: center;">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">
                <img src="assets/auth/landing-nav.png" alt="" style="width: 261px; height: 221px; margin-bottom: 40px;">

                <div class="form-group" style="width: 100%; max-width: 400px; text-align: left; margin-bottom: 20px;">
                    <label style="color: #006041; font-weight: 600; font-size: 17px; margin-bottom: 5px;" for="nomor_telephone">
                        Nomor Telephone
                    </label>
                    <input style="color: #006041; font-weight: 600; font-size: 17px; border: 1px solid #006041; width: 100%;"
                        type="text" id="nomor_telephone" class="form-control" name="nomor_telephone" required />
                </div>

                <div class="form-group" style="width: 100%; max-width: 400px; text-align: left; margin-bottom: 30px;">
                    <select class="form-control nomor_meja"
        name="nomor_meja"
        style="color: #006041; font-weight: 600; font-size: 17px; border: 1px solid #006041; width: 100%;" required>
    <option value="" disabled selected>Pilih Meja</option>
    @for ($i = 1; $i <= 15; $i++)
        <option value="Meja {{ $i }}">Meja {{ $i }}</option>
    @endfor
</select>
                </div>

                <div class="form-group" style="text-align: center; margin-bottom: 40px;">
                    <a href="main">
                        <button type="submit"
                            style="width: 149px; height: 42px; background-color: rgba(0, 96, 65, 0.1); border-radius: 50px; border: none;">
                            <span style="color: #006041; font-weight: 700;">Masuk</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div style="width: 40%; height: 100vh; background-color: rgba(0, 96, 65, 0.3); display: flex; align-items: center; justify-content: center;">
            <div style="padding: 20px;">
                <span style="font-size: 70px; font-weight: 800; color: #006041;">Welcome <br>Papagesha!</span>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="mobile-view d-flex flex-column align-items-center justify-content-center text-center p-4">
        <div class="mb-4 text-center">
            <span style="font-size: 30px; font-weight: 800; color: #006041;">Welcome Papagesha!</span>
        </div>

        <img src="assets/auth/landing-nav.png" alt="" style="width: 200px; height: auto; margin-bottom: 30px;">

        <div class="form-group text-start w-75 mb-3">
            <label style="color: #006041; font-weight: 600; font-size: 17px;" for="nomor_telephone">Nomor Telephone</label>
            <input style="color: #006041; font-weight: 600; font-size: 17px; border: 1px solid #006041; width: 100%;"
                type="text" id="nomor_telephone" class="form-control" name="nomor_telephone" required />
        </div>

        <div class="form-group text-start w-75 mb-4">
            <select class="form-control nomor_meja"
        name="nomor_meja"
        style="color: #006041; font-weight: 600; font-size: 17px; border: 1px solid #006041; width: 100%;" required>
    <option value="" disabled selected>Pilih Meja</option>
    @for ($i = 1; $i <= 15; $i++)
        <option value="Meja {{ $i }}">Meja {{ $i }}</option>
    @endfor
</select>

        </div>

        <div class="form-group text-center">
            <a href="main">
                <button type="submit"
                    style="width: 149px; height: 42px; background-color: rgba(0, 96, 65, 0.1); border-radius: 50px; border: none;">
                    <span style="color: #006041; font-weight: 700;">Masuk</span>
                </button>
            </a>
        </div>
    </div>
</body>

<script src="asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')"></script>

</html>