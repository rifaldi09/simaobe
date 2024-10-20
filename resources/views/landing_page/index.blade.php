<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets_landing/css/style.css">
</head>

<body>
    <header>
        <div class="navbar navbar-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <div>
                        <span class="title">Sistem Manajemen</span>
                        <span class="subtitle">Kurikulum OBE</span>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="btn p-0" type="button" id="userIcon" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets_landing/images/user.png" alt="User Icon" class="user-icon">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userIcon">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <main class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Interaksi Manusia dan Komputer</h5>
                        <p class="card-code">INF11103</p>
                        <p class="card-sks">2 SKS</p>
                        <p class="card-prodi">Teknik Informatika</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Pemrograman Berorientasi Objek</h5>
                        <p class="card-code">INF11103</p>
                        <p class="card-sks">3 SKS</p>
                        <p class="card-prodi">Teknik Informatika</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Praktikum Pemrograman Berorientasi Objek</h5>
                        <p class="card-code">INF11105</p>
                        <p class="card-sks">1 SKS</p>
                        <p class="card-prodi">Teknik Informatika</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Analisis dan Desain Berorientasi Objek</h5>
                        <p class="card-code">INF11105</p>
                        <p class="card-sks">2 SKS</p>
                        <p class="card-prodi">Teknik Informatika</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

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