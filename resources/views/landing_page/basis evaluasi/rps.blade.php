@extends('layout.main')
@section('content')
@include('landing_page.basis evaluasi.components.header1')

<main>
    <div class="container mt-4">
        <form>
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-4">
                    <div class="container mt-5">
                    <p class="h3">Minggu</p>
                    <select class="form-select" id="multiple-select-field" data-placeholder="" multiple>
                        <option>Minggu 1</option>
                        <option>Minggu 2</option>
                        <option>Minggu 3</option>
                        <option>Minggu 4</option>
                        <option>Minggu 5</option>
                        <option>Minggu 6</option>
                        <option>Minggu 7</option>
                    </select>
                </div>

                <div class="container mt-5">
                    <p class="h3">Model Pembelajaran</p>
                        <select class="form-select">
                            <option>Contextual Learning</option>
                        </select>
                    </div>

                    <div class="container mt-5">
                        <p class="h3 text-start mb-2">Syntax Pembelajaran</p>
                        <div id="syntaxContainer">
                            <div class="input-group mb-2">
                                <select class="form-select mb-5">
                                    <option></option>
                                </select>
                                <button class="btn btn-outline-secondary mb-5 border-0 add-syntax" type="button">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <button type="button" class="btn btn-primary me-2">TAMBAH</button>
                        <button type="button" class="btn btn-primary">HAPUS</button>
                    </div>
                </div>

                <!-- Kolom Tengah -->
                <div class="col-md-4">
                    <div class="container mt-5">
                        <p class="h3 text-start mb-4">Kegiatan Pembelajaran</p>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-3">
                                <label class="form-label text-dark mb-3" style="width: 70px;">Luring</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label class="form-label text-dark mb-3" style="width: 70px;">Daring</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <label class="form-label text-dark mb-3" style="width: 70px;">Hybrid</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="container mt-1">
                        <p class="h3 text-start mb-2">Indikator Pencapaian</p>
                        <div id="indikatorContainer">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="indikator[]">
                                <button class="btn btn-outline-secondary border-0 mb-3 add-indikator" type="button">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Kolom Kanan -->
            <div class="col-md-4">
                <div class="container mt-5">
                    <div class="container mt-5">
                        <p class="h3 text-start">Waktu</p>
                        <div class="input-group mb-2">
                            <input type="number" class="form-control">
                            <span class="input-group-text form-label text-dark bg-transparent  border-0 mb-3">Menit</span>
                        </div>
                    </div>
                

                    <div class="container mt-1">
                        <p class="h3 text-start mb-2">Kreteria Penilaian</p>
                        <div id="kriteriaContainer">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="kriteria[]">
                                <button class="btn btn-outline-secondary border-0 mb-3 add-kriteria" type="button">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="text-center mt-3">
                <button type="button" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
    </div>
</main>
@endsection