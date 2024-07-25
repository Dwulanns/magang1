<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software</title>
    <style>
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto Mono', monospace;
            line-height: 1.6;
        }

        .category-bar {
            margin: 2rem 0;
            text-align: center;
        }

        .category-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 1rem;
            cursor: pointer;
            margin: 0 1rem;
            font-size: 1rem;
        }

        .carousel {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1200px; /* Adjust as needed */
            margin: 0 auto;
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-card {
            min-width: 100%;
            box-sizing: border-box;
            padding: 1rem;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            position: relative;
        }

        .carousel-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
        }

        .carousel-caption {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
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
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 1rem;
            cursor: pointer;
        }

        .carousel-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <main>
        {{-- <section class="category-bar">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="my-5">Categories</h1>
                </div>
            </div>
            <div class="row">
                @foreach($category as $categories)
                <div class="col pb-2">
                    <a href="{{ route('category', ['id_client'=> $id]) }}"></a>
                </div>
                @endforeach
            </div>
        </section> --}}

        <section class="carousel" id="carousel">
            <div class="carousel-images">
                <!-- Display images dynamically -->
                @foreach ($software as $item)
                    <div class="carousel-card">
                        <img src="{{ config('app.storage_url') . '/portofolios/' . $item->image }}" alt="{{ $item->title }}">
                        <div class="carousel-caption">{{ $item->title }}</div>
                    </div>
                @endforeach
            </div>
            <div class="carousel-buttons">
                <button class="carousel-button" id="prev">&lt;</button>
                <button class="carousel-button" id="next">&gt;</button>
            </div>
        </section>
    </main>

    <script>
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const carouselImages = document.querySelector('.carousel-images');
        const carouselImagesCount = carouselImages.children.length;
        let currentIndex = 0;
        let carouselInterval;

        function updateCarousel() {
            carouselImages.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function startCarousel() {
            carouselInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % carouselImagesCount;
                updateCarousel();
            }, 3000); // Change slide every 3 seconds
        }

        function stopCarousel() {
            clearInterval(carouselInterval);
        }

        prevButton.addEventListener('click', () => {
            stopCarousel();
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
            startCarousel();
        });

        nextButton.addEventListener('click', () => {
            stopCarousel();
            if (currentIndex < carouselImagesCount - 1) {
                currentIndex++;
                updateCarousel();
            }
            startCarousel();
        });

        document.addEventListener('DOMContentLoaded', () => {
            startCarousel();
        });
    </script>
</body>
</html>
