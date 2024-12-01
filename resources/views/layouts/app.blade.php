<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xabarnomalar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        nav {
            background-color: #343a40;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        nav a:hover {
            color: #f8d7da;
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Hover effect on container cards (if you have any cards inside the content) */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        body {
            background: linear-gradient(135deg, #f0f4f8, #cfe3ff);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            flex: 1;
        }

        .navbar {
            background: linear-gradient(135deg, #007bff, #0056b3);
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        footer {
            background: #00264d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('notifications.index') }}">
                <i class="bi bi-bell-fill"></i> Xabarnoma
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('notifications.index') }}">
                            <i class="bi bi-house-door-fill"></i> Bosh sahifa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notifications.create') }}">
                            <i class="bi bi-plus-circle-fill"></i> Yangi Xabarnoma
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} Xabarnoma Ilovasi. Barcha huquqlar himoyalangan.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
