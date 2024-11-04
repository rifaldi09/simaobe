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
                <div class="card">
                    <div class="card-body">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Minggu 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Minggu 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Minggu 3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox4">Minggu 4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                            <label class="form-check-label" for="inlineCheckbox5">Minggu 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                            <label class="form-check-label" for="inlineCheckbox6">Minggu 6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                            <label class="form-check-label" for="inlineCheckbox7">Minggu 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                            <label class="form-check-label" for="inlineCheckbox8">Minggu 8</label>
                        </div>
                    </div>
                </div>

                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                    </svg>Minggu 3
                </p>
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
                    <div class="card">
                        <div class="card-body overflow-auto" style="max-height: 100px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk1" value="option1">
                                <label class="form-check-label" for="cpmk1">CPMK 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk2" value="option2">
                                <label class="form-check-label" for="cpmk2">CPMK 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk3" value="option3">
                                <label class="form-check-label" for="cpmk3">CPMK 4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                        </div>
                    </div>

                    <p><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/></svg>CPMK 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                {{--* AKhir dari Bagian CPMK --}}

            </div>
        </div>

        {{--* Garis Horizontal --}}
        <hr class="my-3 border-dark w-100" style="height: 2px;">

        {{--* Section Kedua --}}
        <div class="container d-flex flex-column flex-md-row">

            {{--* Bagian Minggu --}}
            <div class="container col-12 col-md-3 mb-3">
                <p class="h3">Minggu</p>
                <div class="card">
                    <div class="card-body">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Minggu 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Minggu 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Minggu 3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox4">Minggu 4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                            <label class="form-check-label" for="inlineCheckbox5">Minggu 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                            <label class="form-check-label" for="inlineCheckbox6">Minggu 6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                            <label class="form-check-label" for="inlineCheckbox7">Minggu 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                            <label class="form-check-label" for="inlineCheckbox8">Minggu 8</label>
                        </div>
                    </div>
                </div>
            </div>
            {{--* Akhir Bagian Minggu --}}


            
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
                    <div class="card">
                        <div class="card-body overflow-auto" style="max-height: 100px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk1" value="option1">
                                <label class="form-check-label" for="cpmk1">CPMK 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk2" value="option2">
                                <label class="form-check-label" for="cpmk2">CPMK 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk3" value="option3">
                                <label class="form-check-label" for="cpmk3">CPMK 4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{--* AKhir dari Bagian CPMK --}}
            </div>
        </div>

        {{--* Tombol hapus di section kedua --}}
        {{--? masih belum ada tag form, jadi harap hati-hati --}}
        <div class="container">
            <button class="btn btn bg-custom-primary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg> Hapus</button>
        </div>

        {{--* Garis Horizontal --}}
    <hr class="my-3 border-dark w-100" style="height: 2px;">

    {{--* Section Ketiga --}}
    <div class="container d-flex flex-column flex-md-row">

            {{--* Bagian Minggu --}}
            <div class="container col-12 col-md-3 mb-3">
                <p class="h3">Minggu</p>
                <div class="card">
                    <div class="card-body">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Minggu 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Minggu 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Minggu 3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox4">Minggu 4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                            <label class="form-check-label" for="inlineCheckbox5">Minggu 5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                            <label class="form-check-label" for="inlineCheckbox6">Minggu 6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                            <label class="form-check-label" for="inlineCheckbox7">Minggu 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                            <label class="form-check-label" for="inlineCheckbox8">Minggu 8</label>
                        </div>
                    </div>
                </div>
            </div>
            {{--* Akhir Bagian Minggu --}}
            
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
                    <div class="card">
                        <div class="card-body overflow-auto" style="max-height: 100px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk1" value="option1">
                                <label class="form-check-label" for="cpmk1">CPMK 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk2" value="option2">
                                <label class="form-check-label" for="cpmk2">CPMK 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cpmk3" value="option3">
                                <label class="form-check-label" for="cpmk3">CPMK 4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{--* AKhir dari Bagian CPMK --}}

            </div>
        </div>

        {{--? masih belum ada tag form, jadi harap hati-hati --}}
        <div class="container d-flex justify-content-between mt-2">
            <div>
                {{--* Tombol tambah di section ketiga --}}
                <button class="btn btn bg-custom-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg> TAMBAH
                </button>
                {{--* Tombol hapus di section ketiga --}}
                <button class="btn btn bg-custom-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg> HAPUS
                </button>
            </div>
            <div>
                {{--* Tombol simpan di section ketiga --}}
                <button class="btn bg-custom-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg> SIMPAN
                </button>
            </div>
        </div>

</main>

@endsection