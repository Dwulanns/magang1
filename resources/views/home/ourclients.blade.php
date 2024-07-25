<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap">
    <style>
        /* Reset default styles */
        body,
        h1,
        h2,
        p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto Mono', monospace;
            line-height: 1.6;
        }

        .portfolio {
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: calc(20% - 1rem);
            display: flex;
            flex-direction: column;
            height: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 1rem;
            text-decoration: none;
            /* Remove underline from links */
            color: inherit;
            /* Inherit text color */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 40%;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .card {
                width: calc(50% - 1rem);
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            .card {
                width: calc(100% - 1rem);
                height: 200px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')
    <main>
        <div class="portfolio">
            @foreach ($ourclient as $client)
                <a href="{{ route('detail.client', ['id' => $client->id]) }}" class="card">
                    <img src="{{ config('app.storage_url') . '/clients/' . $client->image }}" alt="{{ $client->name }}"
                        class="card-image">
                    <div class="card-content">
                        <h2 class="card-title">{{ $client->name }}</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')
</body>

</html>
