<!DOCTYPE html>
<html lang="id" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --star-blue: #548fdc;
            --star-blue-hover: #1e6ace;
            --star-blue-light: #e8f0fe;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
        .btn-star-blue {
            background-color: var(--star-blue);
            color: #ffffff;
            border: none;
            transition: all 0.2s ease;
        }
        .btn-star-blue:hover {
            background-color: var(--star-blue-hover);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(26, 115, 232, 0.25);
        }
        .text-star-blue { color: var(--star-blue) !important; }
        .bg-star-blue-light { background-color: var(--star-blue-light) !important; }
        .card-custom {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    @include('components.navbar')

    <main class="flex-shrink-0 my-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>