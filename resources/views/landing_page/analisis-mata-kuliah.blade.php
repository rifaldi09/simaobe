@extends('layout.main')

@section('content')
<header>
    <div class="text-center">
        <h1 class="fw-bold font-outfit">NAMA MATA KULIAH</h1>
    </div>
    <div class="tabs-bg float-start py-2 w-100 mb-3">
        <span id="analisis" class="ms-5 text-outline-yellow">Analisis Proses Pembelajaran</span>
    </div>
</header>

<main>
    {{-- Menambah komponen dengan include --}}
    {{-- agar kode tidak terlalu panjang --}}
    @include('landing_page.matkul-component.analisis')
</main>
@endsection