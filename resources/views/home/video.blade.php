<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Grid</title>
    @include('home.css')
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #video {
            padding: 4% 2%;
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .video-card {
            flex: 1 1 calc(33.333% - 1rem); /* 3 items per row with spacing */
            box-sizing: border-box;
        }

        .card {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%; /* Ensure cards take full height */
            max-height: 400px; /* Fixed height for consistency */
        }

        .card iframe {
            width: 100%;
            height: 200px; /* Fixed height for iframes */
            border: none;
        }

        .card-body {
            padding: 10px;
            text-align: center;
            font-size: 16px;
            color: #333;
            flex: 1; /* Ensure card body fills available space */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .video-card {
                flex: 1 1 calc(100% - 1rem); /* Full width for smaller screens */
            }

            .card iframe {
                height: 150px; /* Adjust height for smaller screens */
            }

            .card-body {
                font-size: 14px; /* Adjust font size for smaller screens */
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')
    <div id="video">
        <div class="video-container">
            @foreach ($mediavideo as $video)
                <div class="video-card">
                    <div class="card">
                        <iframe src="{{ $video->link }}" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')
</body>

</html>
