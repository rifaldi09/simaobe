@extends('layout.main')
@section('content')
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
                <p class="text-white display-6 fw-bold">Struktur Mata Kuliah</p>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container mt-4">
        <form action="">
            <div class="w-100">
                <div class="d-flex">
                    <table class="table table-borderless">
                        <tr>
                            <td>Mata Kuliah</td>
                            <td>:</td>
                            <td>Nama Mata Kuliah</td>
                        </tr>
                        <tr>
                            <td>Kode</td>
                            <td>:</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>Rumpun</td>
                            <td>:</td>
                            <td>Prodi</td>
                        </tr>
                    </table>
                    <table class="table table-borderless">
                        <tr>
                            <td>Bobot</td>
                            <td>:</td>
                            <td>2 SKS</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>6</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="mt-3">
                <h4 class="text-decoration-underline">Bahan Kajian Pembelajaran</h4>
                <div class="row">
                    <div class="col-md-3">
                        Bahan Kajian
                    </div>
                    <div class="col-md-9">
                        <select name="" id="bahan-kajian" class="form-control" multiple="multiple">
                            @foreach ($response as $respon)
                                <option value="{{ $respon['BKID'] }}">{{ $respon['KeteranganBK'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        Materi
                    </div>
                    <div class="col-md-9">
                        <textarea name="" id="materi" cols="30" rows="5" class="form-control" placeholder="Materi"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="text-decoration-underline">Pustaka</h4>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-3">
                        Utama
                    </div>
                    <div class="col-md-9">
                        <textarea name="" id="pustaka-utama" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-3">
                        Pendukung
                    </div>
                    <div class="col-md-9">
                        <textarea name="" id="pustaka-pendukung" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="text-decoration-underline">Media Pembelajaran</h4>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-3">
                        Perangkat Lunak
                    </div>
                    <div class="col-md-9">
                        <textarea name="" id="perangkat-lunak" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-3">
                        Perangkat Keras
                    </div>
                    <div class="col-md-9">
                        <textarea name="" id="perangkat-keras" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 gap-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</main>
@endsection