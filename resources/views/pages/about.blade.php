    @include('home.css')
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
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

        .about-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 5rem;
        }

        .about-section img {
            max-width: 80%; /* Adjust width as needed */
            max-height: 500px; /* Increase maximum height */
            height: auto;
            margin: 0 auto;
            border-radius: 8px; /* Optional: Add border-radius for rounded corners */
            object-fit: cover; /* Maintain aspect ratio while covering the area */
        }

        .about-section .text-content {
            flex: 1;
            padding: 20px;
            text-align: justify;
        }

        .about-section.reverse {
            flex-direction: row-reverse;
        }

        .why-different {
            text-align: center;
            padding: 5rem 2rem;
            background-color: #F6F5F5;
        }

        .why-different h2 {
            font-weight: bold;
            margin-bottom: 2rem;
            display: inline-block;
            border-right: 0.15em solid #000;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 5s steps(40, end) infinite, blink-caret 0.75s step-end infinite;
        }

        .why-different .feature {
            margin-bottom: 1rem;
        }

        @keyframes typing {
            0% {
                width: 0;
            }

            50% {
                width: 60%;
            }

            100% {
                width: 0;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: black;
            }
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
            }

            .about-section.reverse {
                flex-direction: column;
            }

            .why-different {
                padding: 3rem 1rem;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    @include('home.hero')

    <div class="container mt-5">
        <div class="about-section">
            <img class="img_deg" src="{{ config('app.storage_url') . '/banners/' . $about->image}}">
            <div class="text-content">
                <h2>{{$about->title}}</h2>
                <p>{!! $text !!}</p>
            </div>
        </div>
    </div>

    <div class="why-different">
        <h2>Why We Are Different!!!</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 0.2s;">
                    <i class="bi bi-check-circle" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Attention to Every Detail</h5>
                </div>
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 0.4s;">
                    <i class="bi bi-building-fill-gear" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Visual Layout Builder</h5>
                </div>
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 0.6s;">
                    <i class="bi bi-window-stack" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Shortcodes & Widgets</h5>
                </div>
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 0.8s;">
                    <i class="bi bi-app-indicator" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Ready-Made Skins</h5>
                </div>
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 1s;">
                    <i class="bi bi-phone" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Responsive & Retina-Ready</h5>
                </div>
                <div class="col-md-4 feature animated fadeInUp" style="animation-delay: 1.2s;">
                    <i class="bi bi-emoji-smile" style="font-size: 2rem; color: #00A9FF;"></i>
                    <h5>Fast & Friendly Support</h5>
                </div>
            </div>
        </div>
    </div>

    @include('home.service')
    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')


</body>

</html>
