<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Live Stream</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f0e7ff; /* Light purple background */
        }
        .hero {
            padding: 50px 0;
            background: linear-gradient(to right, rgba(204, 204, 255, 0.8), rgba(255, 255, 255, 0.8));
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .intro {
            padding: 20px;
        }
        .camera-container {
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        video {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Camera Live Stream</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cameras">CCTV Cameras</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="home" class="hero text-center">
        <h1>Welcome to Live Camera Streams</h1>
        <p>Stay connected with our high-quality camera streams.</p>
    </div>

    <div id="cameras" class="container">
        <h2 class="my-4 text-center">Live CCTV Camera Streams</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card camera-container">
                    <div class="card-body">
                        <h5 class="card-title">Dahua Camera</h5>
                        <video controls>
                            <source src="http://your-camera-1-url/stream.m3u8" type="application/x-mpegURL">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card camera-container">
                    <div class="card-body">
                        <h5 class="card-title">HKVision Camera</h5>
                        <video controls>
                            <source src="http://your-camera-2-url/stream.m3u8" type="application/x-mpegURL">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary my-3">Refresh Streams</a>
    </div>

    <!-- Smooth scrolling script -->
    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // Smooth scrolling for navigation links
            $('a.nav-link').on('click', function(event) {
                // Prevent the default behavior
                event.preventDefault();
                // Get the target section
                const target = $(this).attr('href');
                // Animate the scrolling to the target section
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 500); // Duration in milliseconds
            });
        });
    </script>
</body>
</html>
