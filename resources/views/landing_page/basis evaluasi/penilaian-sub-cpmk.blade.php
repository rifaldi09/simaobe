@extends('layout.main')
@section('content')
@include('landing_page.basis evaluasi.components.header')
<main>
    <div class="container mt-3">
        <h2>Rubrik Penilaian SUB CPMK</h2>
    </div>
    <hr class="border border-2 border-dark">
    <div class="container">
        <h3>Sub CPMK</h3>
        <select name="subcpmk" id="subcpmk" class="form-control w-50">
            <option hidden class="text-muted">--No Selection--</option>
            <option value="">Sub CPMK1 - Lorem ipsum dolor sit.</option>
            <option value="">Sub CPMK2 - Lorem ipsum dolor sit.</option>
        </select>
        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="card rounded-4 bg-custom-primary-2">
                    <div class="card-body text-center">
                        <h4>Penilaian 1</h4>
                        <div class="d-flex justify-content-between mx-5">
                            <input type="number" name="" id="" class="form-control w-50 me-2" placeholder="min">
                            <p><i class="bi bi-dash text-light"></i></p>
                            <input type="number" name="" id="" class="form-control w-50 ms-2" placeholder="max">
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="text" name="" id="" class="form-control w-75 mt-3"
                                placeholder="indikator Pencapaian">
                        </div>
                        <div class="d-flex justify-content-center">
                            <textarea name="" id="" class="form-control w-75" cols="30" rows="5"
                                placeholder="Dekripsi"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <i class="bi bi-plus-circle fs-3 cursor-pointer" onclick="addPenilaian()"></i>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center align-items-center h-100">
            &nbsp;
        </div> --}}
        <div class="text-center">
            <button class="btn bg-custom-primary text-light rounded-pill px-5 py-2 mt-2">Simpan</button>
        </div>
    </div>
</main>
@endsection