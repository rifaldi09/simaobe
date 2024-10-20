<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets_login/css/style.css') }}">
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
            </div>
        </div>
    </header>

        <!-- Main Content -->
    <div class="login-container">
        <!-- Logo -->
        <img src="logo.png" alt="Logo" class="logo">
        
        <!-- Login Box -->
        <div class="login-box">
            <h2 class="login-title">LOGIN</h2>
            <form>
                <div class="mb-3">
                    <label for="userId" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="userId">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn-masuk">Masuk</button>
                <a href="#" class="forgot-password">Lupa Password ?</a>
            </form>
        </div>
    </div>


    

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