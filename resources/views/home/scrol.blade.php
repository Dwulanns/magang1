<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll to Top</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Mono', monospace;
        }

        /* Styles for scroll-to-top button */
        #scrollToTopBtn {
            position: fixed;
            bottom: 5.2rem; /* Distance from the bottom */
            right: 20px;
            display: none; /* Hide initially */
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%; /* Ensure round shape */
            width: 40px; /* Adjusted width for smaller circle */
            height: 40px; /* Adjusted height for smaller circle */
            padding: 0; /* Remove padding */
            font-size: 16px; /* Adjust font size for the icon */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s ease; /* Smooth transition */
            display: flex; /* Center the icon */
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }

        #scrollToTopBtn:hover {
            background-color: #3572EF; /* Change color on hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            transform: scale(1.1); /* Slight zoom effect */
        }

        /* Style for the icon */
        #scrollToTopBtn i {
            font-size: 14px; /* Adjust icon size */
        }
    </style>
</head>
<body>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="btn btn-primary">
        <i class="bi bi-caret-up-fill"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the scroll to top button
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            // Show or hide the scroll to top button
            window.addEventListener('scroll', function () {
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = 'flex'; /* Use flex to ensure icon is centered */
                } else {
                    scrollToTopBtn.style.display = 'none';
                }
            });

            // Scroll to top on button click
            scrollToTopBtn.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
