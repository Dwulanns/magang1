<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Purnama Kreatifa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @include('home.css')
    <style>
        body,
        html {
            font-family: 'Roboto Mono', monospace;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .map_container h3 {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
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

        .contact_section {
            padding: 100px 0;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            min-height: calc(100vh - 40px);
        }

        .contact_section .heading_container {
            margin-bottom: 50px;
            width: 100%;
            text-align: center;
        }

        .contact_section .heading_container h2 {
            font-weight: bold;
        }

        .contact_section .container-bg {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .contact_section .map_container,
        .contact_section form {
            flex: 1 1 50%;
            height: 600px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact_section .map-responsive {
            width: 100%;
            height: 100%;
        }

        .contact_section form {
            padding: 20px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        .contact_section form h1 {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact_section form label {
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .contact_section form input,
        .contact_section form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.8rem;
        }

        .contact_section form .message-box {
            height: 150px;
        }

        .contact_section form button {
            padding: 10px 20px;
            border: none;
            background-color: #3ABEF9;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            align-self: flex-end;
            width: fit-content;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .contact_section .container-bg {
                flex-direction: column;
            }

            .contact_section .map_container,
            .contact_section form {
                flex: 2 2 100%;
                max-width: 100%;
                height: 100px;
                margin-bottom: 20px;
            }

            .contact_section .map_container iframe {
                height: 400px;
                width: 640px;
            }

            .contact_section form {
                padding: 20px;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                align-items: stretch;
            }

            .contact_section form .message-box {
                height: 150px;
            }

            .contact_section form input,
            .contact_section form textarea {
                width: 600px;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 0.8rem;
            }

            .contact_section form button {
                padding: 15px 60px;
                border: none;
                background-color: #3ABEF9;
                border-radius: 10px;
                cursor: pointer;
                width: fit-content;
                align-self: flex-end;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    @include('home.header')
    @include('home.hero')

    <section class="contact_section">
        <div class="heading_container">
            <h2>Contact Us</h2>
        </div>
        <div class="container-bg">
            <div class="map_container">
                <h3>Lokasi Kami</h3>
                @foreach ($information as $informations)
                    <div class="map-responsive">
                        <iframe src="{{ $informations->link_map }}" width="100%" height="100%" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                @endforeach
            </div>
            <form action="#">
                <h1>Hubungi Kami</h1>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Enter your country" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" class="message-box" placeholder="Write your message" required></textarea>

                <button type="submit">SEND</button>
            </form>
        </div>
    </section>

    @include('home.footer')
    @include('home.wa')
    @include('home.scrol')
    @include('home.share')
</body>

</html>
