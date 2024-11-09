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
        </div>
    </main>
@endsection