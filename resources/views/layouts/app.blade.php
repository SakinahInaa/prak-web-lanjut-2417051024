<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Academic Portal' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .bg-star-blue-light {
            background-color: #eef2ff;
        }

        .text-star-blue {
            color: #3b82f6;
        }

        .btn-star-blue {
            background-color: #3b82f6;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-star-blue:hover {
            background-color: #2563eb;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
                <i class="fa-solid fa-graduation-cap me-2"></i>PWL 2417051024
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.index') }}">
                            <i class="fa-solid fa-clipboard-list me-1"></i> List User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.create') }}">
                            <i class="fa-solid fa-user-plus me-1"></i> Tambah User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('matakuliah.index') }}">
                            <i class="fa-solid fa-book me-1"></i> List Mata Kuliah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('matakuliah.create') }}">
                            <i class="fa-solid fa-square-plus me-1"></i> Tambah Mata Kuliah
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>