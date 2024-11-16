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
            <h4 class="text-decoration-underline">Otorisasi</h4>
            <div class="row w-100">
                <div class="col-md-6">
                    <label for="dosen-pengembang">Dosen Pengembang</label>
                    <select name="" id="dosen-pengembang" class="form-control">
                        <option hidden></option>
                        <option value="Dosen 1">Dosen 1</option>
                        <option value="Dosen 2">Dosen 2</option>
                        <option value="Dosen 3">Dosen 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="dosen-pengembang">Dosen Pengampu</label>
                    <select name="" id="dosen-pengampu" class="form-control" multiple="multiple">
                        <option value="Dosen 1">Dosen 1</option>
                        <option value="Dosen 2">Dosen 2</option>
                        <option value="Dosen 3">Dosen 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h4 class="text-decoration-underline">Deskripsi Singkat Mata Kuliah</h4>
            <textarea name="" class="form-control w-100" id="" cols="30" rows="5" placeholder="Deskripsi"></textarea>
        </div>
        <div class="mt-3">
            <h4 class="text-decoration-underline">Bahan Kajian Pembelajaran</h4>
            <div class="row">
                <div class="col-md-3">
                    Bahan Kajian
                </div>
                <div class="col-md-9">
                    <select name="" id="bahan-kajian" class="form-control" multiple="multiple">
                        <option value="1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam, dolore tempore voluptatibus impedit distinctio fuga laboriosam natus enim nihil. Voluptatum velit sequi earum reprehenderit quam nam eius voluptatibus nesciunt maiores dolore dolorum tempora veritatis, in officia ut temporibus perspiciatis est, consequatur quas nihil molestias praesentium! Minus natus fuga quibusdam asperiores veritatis voluptas numquam aspernatur sed inventore ullam animi repellat, distinctio vel eum esse?</option>
                        <option value="2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eum quod, fuga laudantium ipsam veniam laborum delectus nisi.</option>
                        <option value="3">Lorem ipsum dolor sit.</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    Materi
                </div>
                <div class="col-md-9">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Materi"></textarea>
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
                <div class="col-md-6">
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-md-3">
                    <button type="button" class="border-0 bg-transparent" onclick="addPustakaUtama()"><i class="bi bi-plus-circle text-primary"></i></button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection