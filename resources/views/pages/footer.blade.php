<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-dSCSU9BuUb28B99D/sGoF4v9mUEsPdnUj3Fds3HbwaBx5zGpFFeL1u0tJDx6Fdx0thVVR+o3tF0ZtTQPsAoS+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
            margin: 0;
            padding: 0;

        }

        .bg-lightblue {
            background-color: #000;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .contact-info {
            text-align: center;
            padding: 15px;
            margin-bottom: 0;
            /* Hapus margin bawah */
        }

        .contact-info h3 {
            color: #fff;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .contact-info p {
            margin: 8px 0;
            line-height: 1.6;
        }

        .contact-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            padding: 15px;
        }

        .contact-item {
            flex: 1;
            min-width: 280px;
            padding: 15px;
            border-radius: 10px;
            background-color: #000;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            color: #fff;
            text-decoration: none;
            font-size: 2em;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #aaa;
        }

        footer {
            text-align: center;
            font-size: 1.2em;
            padding: 10px;
            color: #fff;
            background-color: #000;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="bg-lightblue">
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p>
                Hubungi kami Tim Kreatifa untuk informasi produk atau jasa, dan keluhan pelanggan.
                Kami selalu berusaha melakukan yang terbaik untuk meningkatkan kepuasan pelanggan
                dan memastikan bahwa keluhan Anda telah ditangani dengan baik.
            </p>

            <div class="contact-row">
                @foreach ($footer as $footers)
                    <div class="contact-item">
                        <h5>Alamat</h5>
                        <p>{{ $footers->alamat }}</p>
                    </div>

                    <div class="contact-item">
                        <h5>Phone</h5>
                        <p>{{ $footers->telp }} (No. Tlp)<br>{{ $footers->wa }} (WA Only)</p>
                        <h5>Email</h5>
                        <p><a href="mailto:kreatif.purnama@gmail.com">{{ $footers->email }}</a></p>
                    </div>
                @endforeach

                <div class="contact-item">
                    <h5>Social Links</h5>
                    <div class="social-links">
                        <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 All Rights Reserved. CV Purnama Kreatifa</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
