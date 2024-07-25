<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    @include('home.css')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
        }

        .main-content {
            flex: 1;
            min-width: 0;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .blog-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .blog-header p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .blog-header .separator {
            margin: 0 10px;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .blog-content h2 {
            font-size: 2rem;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .blog-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .back-to-home {
            margin-top: 20px;
            text-align: center;
        }

        .back-to-home a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .back-to-home a:hover {
            background-color: #0056b3;
        }

        .sidebar {
            width: 250px;
            margin-left: 20px;
        }

        .recent-posts {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            background-color: #fff;
            margin-bottom: 20px;
        }

        .recent-posts h4 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .recent-posts ul {
            list-style: none;
            padding: 0;
        }

        .recent-posts li {
            margin-bottom: 10px;
        }

        .recent-posts a {
            text-decoration: none;
            color: #007bff;
        }

        .recent-posts a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }

            .sidebar {
                margin-left: 0;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')
    
    <div class="container">
        <div class="content">
            <div class="main-content">
                @foreach ($post as $posts)
                    <div class="blog-header">
                        <h1>{{ $posts->post_title }}</h1>
                        <p>{{ $posts->post_author }} <span class="separator">|</span> {{ $post->post_date }}</p>
                    </div>

                    <div class="blog-content">
                        <img src="{{ $posts->post_mime_type }}" alt="Blog Image">
                        <p>{!! nl2br(e($posts->post_content))!!}</p>
                    </div>

                    <div class="back-to-home">
                        <a href="{{ url('/blog') }}">Back to Blog</a>
                    </div>
                @endforeach
            </div>
            <div class="sidebar">
                <div class="recent-posts">
                    <h4>Recent Posts</h4>
                    <ul>
                        @foreach ($recentPosts as $recent)
                            <li><a href="{{ url('/blog', $recent->id) }}">{{ $recent->post_title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')

</body>

</html>
