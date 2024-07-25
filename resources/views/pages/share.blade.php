<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share This Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            height: 100vh;
            position: relative;
        }

        .container {
            text-align: center;
        }

        .share-button {
            font-size: 1.5rem; /* Size of the main share button */
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s ease;
            position: fixed;
            bottom: 20px;
            left: 20px;
            border-radius: 50%;
            background-color: #fff;
            padding: 10px; /* Adjusted padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .share-button:hover {
            color: #0056b3;
        }

        .share-buttons {
            display: none;
            margin-top: 20px;
            gap: 10px;
            justify-content: center;
            position: fixed;
            bottom: 80px; /* Adjust based on the size of the share button */
            left: 20px;
            flex-direction: column;
        }

        .share-buttons a {
            text-decoration: none;
            color: #fff;
            width: 40px; /* Adjusted width */
            height: 40px; /* Adjusted height */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            font-size: 1rem; /* Size of the icons */
        }

        .share-buttons .facebook {
            background-color: #3b5998;
        }

        .share-buttons .twitter {
            background-color: #55acee;
        }

        .share-buttons .linkedin {
            background-color: #0077b5;
        }

        .share-buttons .whatsapp {
            background-color: #25d366;
        }

        .share-buttons .facebook:hover {
            background-color: #2d4373;
        }

        .share-buttons .twitter:hover {
            background-color: #2795e9;
        }

        .share-buttons .linkedin:hover {
            background-color: #005582;
        }

        .share-buttons .whatsapp:hover {
            background-color: #1da851;
        }
    </style>
</head>

<body>
    <div class="container">
        <i class="fas fa-share-alt share-button" id="shareButton"></i>
        <div class="share-buttons" id="shareButtons">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}" target="_blank" class="facebook" title="Share on Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ url()->full() }}&text=Check%20this%20out!" target="_blank" class="twitter" title="Share on Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}" target="_blank" class="linkedin" title="Share on LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://wa.me/?text={{ url()->full() }}" target="_blank" class="whatsapp" title="Share on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('shareButton').addEventListener('click', function() {
            var shareButtons = document.getElementById('shareButtons');
            if (shareButtons.style.display === 'none' || shareButtons.style.display === '') {
                shareButtons.style.display = 'flex';
            } else {
                shareButtons.style.display = 'none';
            }
        });
    </script>
</body>

</html>
