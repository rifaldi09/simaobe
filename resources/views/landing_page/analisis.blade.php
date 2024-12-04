{{--* Seluruh halaman sudah responsif --}}
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
                    <p class="text-white display-6 fw-bold">Analisis Proses Pembelajaran</p>
                </div>

            </div>
        </div>
        <div class="container border-bottom mt-3">
            <p class="text-center display-6">Mata Kuliah : Interaksi Manusia dan Komputer - 2 SKS</p>
        </div>
    </header>

    {{--! Bagian Body --}}
    <main class="mt-4">

        {{--* Section Pertama --}}
        <div class="container d-flex flex-column flex-md-row">

            {{--* Bagian Minggu --}}
            <div class="container col-12 col-md-3 mb-3">
                <p class="h3">Minggu</p>
                <select name="" id="selectMultipleMinggu1" class="form-control" multiple="multiple">
                    <option value="1">Minggu 1</option>
                    <option value="2">Minggu 2</option>
                    <option value="3">Minggu 3</option>
                    <option value="4">Minggu 4</option>
                </select>
            </div>
            {{--* Penutup Bagian Minggu --}}

            <div class="container col-12 col-md-9">
                <div class="container d-flex justify-content-center flex-column flex-md-row">

                    {{--* Bagian Materi Perkuliahan --}}
                    <div class="container mb-3">
                        <p class="h3">Materi Perkuliahan</p>
                        <div class="card">
                            <div class="card-body">
                                {{--! Masih belum ada tag form, jadi harap hati-hati --}}
                                <textarea class="form-control" style="height: 200px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, cum. Adipisci eligendi nobis commodi explicabo ab cum accusamus quod aperiam.</textarea>
                            </div>
                        </div>
                    </div>
                    {{--* Akhir Bagian Materi Perkuliahan --}}

                    {{--* Bagian Sub-CPMK --}}
                    <div class="container mb-3">
                        <p class="h3">Sub-CPMK</p>
                        <div class="card">
                            <div class="card-body">
                                {{--! Masih belum ada tag form, jadi harap hati-hati --}}
                                <textarea class="form-control" style="height: 200px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, cum. Adipisci eligendi nobis commodi explicabo ab cum accusamus quod aperiam.</textarea>
                            </div>
                        </div>
                    </div>
                    {{--* Akhir Bagian Sub-CPMK --}}
                </div>
    
                {{--* Bagian CPMK --}}
                <div class="container mt-1 justify-content-center">
                    <p class="h3">CPMK</p>
                    <select name="" id="selectMultipleCPMK1" class="form-control" multiple="multiple">
                        <option value="1">CPMK1</option>
                        <option value="2">CPMK2</option>
                        <option value="3">CPMK3</option>
                        <option value="4">CPMK4</option>
                    </select>
                </div>
                {{--* AKhir dari Bagian CPMK --}}

            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-primary" onclick="addAnalisis()">Tambah</button>
            </div>
        </div>

        {{--* Garis Horizontal --}}
        <hr class="my-3 border-dark w-100" style="height: 2px;">
        <div id="newAnalisis"></div>
</main>

@endsection

