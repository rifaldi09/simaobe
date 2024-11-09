@extends('layout.main')
@section('content')
    {{--! Bagian Navbar --}}
    <header>
        <div class="navbar navbar-dark shadow-sm">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <div class="d-flex align-items-center col-12 col-md-3 container">
                    <div>
                        <span class="title">Sistem Manajemen</span>
                        <span class="subtitle">Kurikulum OBE</span>
                    </div>
                </div>

                <div class="container d-flex align-items-center col-md-9 text-center mt-3 mt-md-0">
                    <p class="text-white display-6 fw-bold">Basis Evaluasi Penilaian</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container mt-3">
            <h2>Rubrik Penilaian SUB CPMK</h2>
        </div>
        <hr class="border border-2 border-dark">
        <div class="container">
            <h3>Sub CPMK</h3>
            <select name="subcpmk" id="subcpmk"></select>
        </div>
    </main>
@endsection