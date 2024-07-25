<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purnama Kreatifa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <style>
        body,
        html {

            margin: 0;
            padding: 0;
            height: 100%;
        }

        .hero_area {
            position: relative;
            width: 100%;
            height: 60vh;
            overflow: hidden;
        }

        .hero_area img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #33425B;
            opacity: 0.6;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    <div class="hero_area">
        <a class="navbar-brand" href="#">
            <img src="{{ config('app.storage_url') . '/banners/' . $hero->image }}" alt="hero" class="hero">
        </a>
        <div class="overlay"></div>
        <div class="content">
            <h1>Tentang Kami</h1>
            <h3>Selamat datang di website kreatifa.</h3>
            <p>Web ini merupakan web resmi dari perusahaan CV. Purnama Kreatifa.</p>
        </div>
    </div>

</body>

</html>
