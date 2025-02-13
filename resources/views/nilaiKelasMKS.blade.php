{{--* Seluruh halaman sudah responsif --}}
@extends('layout.main')
@section('content')
<header>
    <div class="text-center">
        <h1 class="fw-bold font-outfit">Table Nilai Mata Kuliah</h1>
    </div>
    <div class="tabs-bg float-start py-2 w-100 mb-3">
        
    </div>
</header>

<main>
    
    <table class="table">
        
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Nama Mahasiswa</th>
            @foreach ($datas as $key => $value)
            <th colspan="3">{{ $value }}</th>
            @endforeach
        </tr>
        <tr>
            <th>cpmk</th>
            <th>cpmk</th>
            <th>cpmk</th>
            <th>cpmk</th>
            <th>cpmk</th>
        </tr>
        <tr>
            <td>1</td>
            <td>23123423</td>
            <td>Holder</td>
        </tr>
    </table>
</main>



@endsection