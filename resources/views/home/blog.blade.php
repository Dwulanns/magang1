<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Purnama Kreatifa Blog</title>
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

        .blog-post {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 2rem;
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: transform 0.2s;
        }

        .blog-post:hover {
            transform: scale(1.02);
        }

        .blog-post:nth-child(odd) .blog-post-content {
            order: 1;
            padding-left: 1rem;
        }

        .blog-post:nth-child(odd) .blog-post-image {
            order: 0;
        }

        .blog-post:nth-child(even) .blog-post-content {
            order: 0;
            padding-right: 1rem;
        }

        .blog-post:nth-child(even) .blog-post-image {
            order: 1;
        }

        .blog-post-image {
            flex: 1 1 30%;
            text-align: center;
        }

        .blog-post-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .blog-post-content {
            flex: 1 1 70%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .blog-post-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .blog-post-content p {
            font-size: 1rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            /* Display only 2 lines */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .blog-post-content a {
            text-decoration: none;
            color: #007bff;
            margin-top: 0.5rem;
        }

        @media only screen and (max-width: 767px) {
            .blog-post {
                flex-direction: column;
            }

            .blog-post-content,
            .blog-post-image {
                padding: 0;
            }

            .blog-post-content {
                order: 1 !important;
                padding-top: 1rem;
            }

            .blog-post-image {
                order: 0 !important;
            }
        }

        .sidebar {
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-top: 2rem;
        }

        .sidebar h4 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 0.5rem;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .hidden-buttons {
            display: none;
            margin-top: 1rem;
        }

        .btn-gray {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn-gray:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')

    <div class="container">
        @foreach ($blog as $blogs)
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <button id="toggleButton" class="btn btn-gray w-100 mb-2">Categories</button>
                        <div class="hidden-buttons">
                            <a href="{{ $blogs->id_category }}" class="btn btn-secondary w-100 mb-2">{{ $blogs->id_category }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <img src="{{ $blogs->image }}" alt="Blog Image 1">
                        </div>
                        <div class="blog-post-content">
                            <h3><a href="{{ url('/detailblog' . $blogs->id) }}">{{ $blogs->title }}</a></h3>
                            <p>{!! strip_tags($blogs->content, '<p><a><br><strong><em><img>') !!}</p>
                        </div>
                    </div>
        @endforeach
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleButton = document.getElementById('toggleButton');
            var hiddenButtons = document.querySelector('.hidden-buttons');

            toggleButton.addEventListener('click', function() {
                if (hiddenButtons.style.display === 'none' || hiddenButtons.style.display === '') {
                    hiddenButtons.style.display = 'block';
                } else {
                    hiddenButtons.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
