<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #f2f2f2;
    }

    @keyframes slide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .logos {
        overflow: hidden;
        padding: 60px 0;
        background: white;
        white-space: nowrap;
        position: relative;
    }

    .logos:before,
    .logos:after {
        position: absolute;
        top: 0;
        width: 250px;
        height: 100%;
        content: "";
        z-index: 2;
    }

    .logos:before {
        left: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
    }

    .logos:after {
        right: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
    }

    .logos:hover .logos-slide {
        animation-play-state: paused;
    }

    .logos-slide {
        display: inline-block;
        animation: 35s slide infinite linear;
    }

    .logos-slide img {
        height: 100px;
        /* Adjust the height to make images larger */
        margin: 0 30px;
        /* Adjust the margin to fit the larger images */
    }
</style>
</head>

<body>
    <div class="logos">
        <div class="logos-slide">
            @foreach ($client as $clients)
                <img src="{{ config('app.storage_url') . '/clients/' . $clients->image }}" />
            @endforeach
        </div>

        <div class="logos-slide">
            @foreach ($client as $clients)
                <img src="{{ config('app.storage_url') . '/clients/' . $clients->image }}" />
            @endforeach
        </div>
    </div>
</body>
