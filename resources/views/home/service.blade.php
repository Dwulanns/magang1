<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @include('home.css')
    <style>
        * {
            font-family: 'Roboto Mono', monospace;
        }

        .service-card {
            border: 1px solid #00A9FF;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            background-color: #00A9FF;
            color: black;
            margin-bottom: 1rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInAnimation 0.5s ease forwards;
            opacity: 0;
            height: 220px;
        }

        .service-card:before,
        .service-card:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            z-index: 1;
        }

        .service-card:hover:before,
        .service-card:hover:after {
            opacity: 1;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card i {
            font-size: 4rem;
            color: white;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .service-card h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: white;
            position: absolute;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            transition: color 0.3s ease;
            width: 100%;
        }

        .service-card p {
            font-size: 1rem;
            color: white;
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translate(-50%, 0);
            width: 90%;
            text-align: center;
            z-index: 2;
            padding: 0 15px;
        }

        .service-card:hover p {
            opacity: 0.8;
            transform: translate(-50%, 0);
        }

        .service-card:hover i,
        .service-card:hover h5 {
            opacity: 0;
            transform: translateY(-50px);
        }

        @keyframes fadeInAnimation {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .our-title {
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
            color: #212b52;
            margin-top: 5rem;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <div>
        <div class="container">
            <h1 class="our-title">Our Services</h1>
            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @foreach ($service->chunk(3) as $chunk)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <div class="row">
                                @foreach ($chunk as $services)
                                    <div class="col-md-4">
                                        <div class="service-card">
                                            {!! strip_tags($services->icon, '<i>') !!}
                                            <h5>{{ $services->name }}</h5>
                                            <p class="service-card-details">{{ $services->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');

            serviceCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
                card.classList.add('animated', 'fadeInUp');
            });
        });
    </script>
</body>

</html>
