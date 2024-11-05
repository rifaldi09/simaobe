@extends('layout.main')

@section('content')
<header>
    <div class="text-center">
        <h1 class="fw-bold font-outfit">NAMA MATA KULIAH</h1>
    </div>
    <div class="tabs-bg">
        <div class="tabMatkul d-flex justify-content-between fw-bold font-outfit mx-2 mx-md-5">
            <span id="analisis" class="cursor-pointer text-outline-yellow">Analisis Proses Pembelajaran</span>
            <span id="rencana-pembelajaran" class="cursor-pointer">Rencana Pembelajaran Semester</span>
            <span id="basis-evaluasi" class="cursor-pointer">Basis Evaluasi Penilaian</span>
        </div>
    </div>
</header>

<main>
    {{-- Menambah komponen dengan include --}}
    {{-- agar kode tidak terlalu panjang --}}
    @include('landing_page.matkul-component.analisis')
    @include('landing_page.matkul-component.rencana-pembelajaran')
    @include('landing_page.matkul-component.basis-evaluasi')
</main>
@endsection