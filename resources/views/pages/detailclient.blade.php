<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Klien</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap">
    <style>
        /* Reset default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto Mono', monospace;
            background-color: #f4f4f4;
            line-height: 1.6;
        }

        section {
            padding: 2rem;
        }

        .portfolio-detail {
            max-width: 1200px;
            margin: 0 auto;
        }

        .carousel {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-image {
            min-width: 100%;
            box-sizing: border-box;
        }

        .carousel-image img {
            width: 100%;
            height: auto;
        }

        .carousel-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-button {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: #fff;
            font-size: 1.5rem;
            padding: 0.5rem;
            cursor: pointer;
            border-radius: 4px;
        }

        .portfolio-info {
            margin-top: 2rem;
        }

        .portfolio-info h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .portfolio-info p {
            font-size: 1.125rem;
            color: #666;
            margin-bottom: 1rem;
        }

        .portfolio-info .category {
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')
    <main>
        <section class="portfolio-detail">
            <div class="carousel" id="carousel">
                <div class="carousel-images">
                    <div class="carousel-image">
                        <img src="{{ config('app.storage_url') . '/Portofolios/' . $detailclient->image }}" alt="{{ $detailclient->name }}">
                    </div>
                </div>
                <div class="carousel-buttons">
                    <button class="carousel-button" id="prev">&lt;</button>
                    <button class="carousel-button" id="next">&gt;</button>
                </div>
            </div>

            <div class="portfolio-info">
                <h1>{{ $detailclient->name }}</h1>
                <p>{{ $detailclient->description }}</p>
                <p class="category">Category: {{ $detailclient->category }}</p>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.getElementById('carousel');
            const carouselImages = carousel.querySelector('.carousel-images');
            const carouselImageCount = carousel.querySelectorAll('.carousel-image').length;
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');

            let currentIndex = 0;

            function showImage(index) {
                const offset = -index * 100;
                carouselImages.style.transform = `translateX(${offset}%)`;
            }

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % carouselImageCount;
                showImage(currentIndex);
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + carouselImageCount) % carouselImageCount;
                showImage(currentIndex);
            });
        });
    </script>
</body>

</html>
