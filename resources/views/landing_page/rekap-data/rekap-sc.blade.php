<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Data OBE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .bg-custom-blue {
            background-color: #415788;
        }
        .text-custom-blue {
            color: #415788;
        }
        .btn-custom-blue {
            background-color: #415788;
            color: white;
        }
        .btn-custom-blue:hover {
            background-color: #344a6e;
            color: white;
        }
        .table-custom {
            border: 1px solid #dee2e6;
        }
        .table-custom thead {
            background-color: #415788;
            color: white;
        }
        .table-custom tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Judul -->
        <h1 class="text-center text-custom-blue mb-4">Rekap Data OBE</h1>

        <!-- Tabel Rekap Data -->
        <div class="card shadow">
            <div class="card-header bg-custom-blue text-white">
                <h5 class="card-title mb-0">Rekap Capaian OBE Mahasiswa per Kelas Mata Kuliah</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Kelas</th>
                                <th>Capaian OBE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456</td>
                                <td>John Doe</td>
                                <td>A1</td>
                                <td>85%</td>
                            </tr>
                            <tr>
                                <td>234567</td>
                                <td>Jane Smith</td>
                                <td>A2</td>
                                <td>90%</td>
                            </tr>
                            <tr>
                                <td>345678</td>
                                <td>Alice Johnson</td>
                                <td>B1</td>
                                <td>78%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-custom-blue me-2">Unduh Rekap</button>
            <button class="btn btn-outline-custom-blue">Kembali</button>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>