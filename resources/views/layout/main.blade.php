<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- membuat title menjadi dinamis dan di set di controller --}}
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets_landing/css/style.css') }}">

</head>
<body>
    {{-- yield berguna untuk menentukan bagian konten yang akan diisi --}}
    {{-- Penamaaan tidak harus 'content' --}}
    @yield('content')

    {{-- Bagian Footer agar bisa digunakan untuk halaman lain --}}
    <footer class="footer mt-auto">
        <div class="container text-center">
            <p class="mb-0">Developed by Informatics Engineering</p>
        </div>
    </footer>


    <!-- Hanya memuat bootstrap.bundle.min.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">

</body>
</html>