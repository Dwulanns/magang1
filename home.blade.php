<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Purnama Kreatifa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @include('home.css')
    <style>
        * {
            font-family: 'Roboto Mono', monospace;
        }

        .bg-dark {
            background-color: #333 !important;
        }

        .carousel-item {
            height: 100vh;
            min-height: 300px;
        }

        .carousel-caption {
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
            text-align: center;
        }

        .carousel-caption h5 {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
            font-size: 55px;
            font-weight: bold;
        }

        .carousel-caption p {
            width: 60%;
            margin: auto;
            font-size: 24px;
            line-height: 1.9;
            font-weight: bold;
        }

        .carousel-caption a {
            text-decoration: none;
            background: #00A9FF;
            padding: 12px 25px;
            display: inline-block;
            color: #fff;
            margin-top: 6px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .w-100 {
            height: 100vh;
        }

        .android-development {
            background-color: #f8f9fa;
            padding: 3rem 0;
        }

        .android-development h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            color: #333;
        }

        .android-development .content {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }

        .android-development .content p,
        .android-development .content ul {
            margin-bottom: 1rem;
        }

        .android-development .content ul {
            padding-left: 20px;
        }

        .android-development .content ul li {
            margin-bottom: 0.5rem;
        }

        .android-development .image-container {
            text-align: center;
        }

        .android-development .image-container img {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
        }

        @media only screen and (max-width: 767px) {
            .carousel-item {
                height: 80vh;
                min-height: 150px;
            }

            .carousel-caption h5 {
                font-size: 32px;
            }

            .carousel-caption p {
                font-size: 18px;
            }

            .carousel-caption a {
                padding: 10px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    
    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $home->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight" style="animation-delay: 1s;">DEVELOPMENT</h5>
                        <p class="animated bounceInLeft d-md-block" style="animation-delay: 2s;">System
                            Development, Android Apps, Website, Desktop Apps, Web Based Apps, Macro / Scripting.</p>
                        <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="{{ url('/services') }}">Learn
                                More</a></p>
                    </div>
                </div>    
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    @include('home.service')
    <div class="android-development">
        <div class="container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="20" data-aos-duration="400"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-center">
            <h2>Android Development</h2>
            <div class="row">
                <div class="col-md-6 content">
                    <p>Beberapa Instansi ternama baik Swasta maupun Negeri telah
                        mempercayakan kebutuhan Android
                        Development kepada kami. Mulai dari Pembuatan hingga Pengembangan Aplikasi E-Shipping sebuah
                        perusahaan ternama di Surabaya berbasis Android. Kami berharap dengan adanya proyek yang
                        telah terselesaikan ini dapat membantu kami untuk mendukung proyek-proyek lainnya.</p>

                    <h3>Aplikasi E-Shipping</h3>
                    <p>Berikut adalah beberapa detail tentang proyek Aplikasi
                        E-Shipping:</p>
                    <ul>
                        <li>Nama: E-Shipping</li>
                        <li>Deskripsi: Aplikasi berbasis Android untuk manajemen pengiriman barang.</li>
                        <li>Lokasi: Surabaya</li>
                        <li>Fitur: Pelacakan pengiriman, Notifikasi, Integrasi dengan sistem logistik</li>
                    </ul>
                </div>
                <div class="col-md-6 image-container">
                    <img src="image/e-shipping.png" class="img-fluid" alt="E-Shipping">
                </div>
            </div>
        </div>

    </div>

    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
