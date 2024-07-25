<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purnama Kreatifa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        /* Carousel */
        .carousel-inner img {
            width: 100%;
            height: 80vh;
            object-fit: cover;
            clip-path: inset(0 0 10% 0); /* Crops 10% from the bottom of the image */
        }

        .carousel-caption {
            position: absolute;
            top: 50%; /* Center vertically */
            transform: translate(10%, -50%); /* Adjust to center */
            text-align: center;
            color: #fff; /* Ensure text color contrasts well with background */
            width: 80%; /* Adjust width as needed */
            max-width: 800px; /* Optional: Adjust maximum width */
            padding: 0 20px; /* Optional: Add padding for better spacing */
        }

        .carousel-caption h5 {
            font-size: 3.5rem; /* Increase font size */
            font-weight: bold;
            animation: bounceInRight 1s;
            animation-delay: 1s;
            margin-bottom: 15px; /* Add space below heading */
        }

        .carousel-caption p {
            font-size: 1.5rem; /* Increase font size */
            animation: bounceInLeft 1s;
            animation-delay: 2s;
            margin-bottom: 15px; /* Add space below paragraph */
        }

        .carousel-caption a {
            display: inline-block;
            background-color: #3ABEF9; /* Light blue color */
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            animation: bounceInRight 1s;
            animation-delay: 3s;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        /* Android Development Section */
        .android-development {
            background-color: #EEEEEE;
            padding: 60px 20px;
        }

        .android-development .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .android-development h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            color: #333;
        }

        .android-development .row {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            align-items: flex-start;
            justify-content: space-between;
        }

        .android-development .content {
            flex: 1;
            padding-right: 20px;
            text-align: justify; /* Justify text alignment */
        }

        .android-development .content p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #555;
        }

        .android-development .content h3 {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        .android-development .content ul {
            list-style: disc;
            padding-left: 20px;
            color: #555;
        }

        .android-development .content ul li {
            margin-bottom: 10px;
        }

        .android-development .image-container {
            flex: 1;
            text-align: center;
        }

        .android-development .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Animations */
        @keyframes bounceInRight {
            from {
                opacity: 0;
                transform: translateX(1000px);
            }
            60% {
                opacity: 1;
                transform: translateX(-30px);
            }
            80% {
                transform: translateX(10px);
            }
            100% {
                transform: translateX(0);
            }
        }

        @keyframes bounceInLeft {
            from {
                opacity: 0;
                transform: translateX(-1000px);
            }
            60% {
                opacity: 1;
                transform: translateX(30px);
            }
            80% {
                transform: translateX(-10px);
            }
            100% {
                transform: translateX(0);
            }
        }

        /* Service Section */
        .service-section {
            margin-top: 4rem; /* Add space between carousel and service section */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .carousel-caption{
                position: absolute;
                top: 50%; /* Center vertically */
                transform: translate(-5%, -50%); /* Adjust to center */
                text-align: center;
                color: #fff; /* Ensure text color contrasts well with background */
                width: 80%; /* Adjust width as needed */
                max-width: 800px; /* Optional: Adjust maximum width */
                padding: 0 20px; /* Optional: Add padding for better spacing */
            }
            .carousel-caption h5 {
                font-size: 2.5rem; /* Adjust font size for smaller screens */
            }

            .carousel-caption p {
                font-size: 1.2rem; /* Adjust font size for smaller screens */
            }

            .android-development h2 {
                font-size: 2rem; /* Adjust font size for smaller screens */
            }

            .android-development .content p {
                font-size: 1rem; /* Adjust font size for smaller screens */
            }

            .android-development .row {
                flex-direction: column; /* Stack content and image vertically */
                align-items: center; /* Center items horizontally */
            }

            .android-development .content {
                padding-right: 0;
                padding-bottom: 20px; /* Add space below content */
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
                @foreach($home as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ config('app.storage_url') . '/banners/' . $banner->image }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption text-center">
                        <h5 class="animated bounceInRight" style="animation-delay: 1s;">DEVELOPMENT</h5>
                        <p class="animated bounceInLeft d-md-block" style="animation-delay: 2s;" id="overlay">System
                            Development, Android Apps, Website, Desktop Apps, Web Based Apps, Macro / Scripting.</p>
                        <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="{{ url('/services') }}">Learn
                                More</a></p>
                    </div>
                </div>
                @endforeach
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

    <div class="service-section">
        @include('home.service')
    </div>

    @include('home.client')
    <div class="android-development">
        <div class="container">
          <h2>{{ $andro->title }}</h2> 
          <div class="row">
            <div class="col-md-6 content">
              
                <p>{!! strip_tags($andro->description, '<p><a><br><strong><em><img>') !!}</p>

            </div>
            <div class="col-md-6 image-container">
              <img src="{{ config('app.storage_url') . '/banners/' . $andro->image }}" class="img-fluid" alt="{{ $andro->title }}">
            </div>
          </div>
        </div>
      </div>
    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')

</body>

</html>
