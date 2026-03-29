<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Nuralisse Florist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .card-flower:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
    </style>
    @yield('styles') {{-- ✅ tambahkan di sini --}}
</head>

<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
