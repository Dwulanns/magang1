<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Photo Carousel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    @include('home.css')
    <style>
        .carousel-item {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .carousel-inner {
            display: flex;
            flex-wrap: nowrap;
            overflow: hidden;
        }

        .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px;
            display: none;
        }

        .carousel-item:hover .carousel-caption {
            display: block;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }

        @media (min-width: 992px) {
            .carousel-item {
                flex: 0 0 33.3333%;
            }
        }

        @media (max-width: 991px) {
            .carousel-item {
                flex: 0 0 50%;
            }
        }

        @media (max-width: 576px) {
            .carousel-item {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')
    <div id="photoCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            @foreach ($mediafoto as $index=>$foto)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ config('app.storage_url') . '/fotos/' . $foto->image }}" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <p>{{ $foto->alt }}</p>
                    </div> 
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#photoCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#photoCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')

</body>

</html>
