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
        <tr class="text-center">
            <th rowspan="2">No</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Nama Mahasiswa</th>
            @foreach ($dataP as $key => $value)
                <th colspan="{{ count($value) }}">{{ $key }}</th>
            @endforeach
        </tr>
    
        <tr class="text-center">
            @foreach ($dataP as $key => $value)
                @foreach ($value as $cpmk)
                    <th>{{ $cpmk }}</th>
                @endforeach
            @endforeach
        </tr>
        @foreach ($data as $key => $value)
        <tr class="text-center">
                <td>{{ ++$key }}</td>
                <td>{{ $value["NIM"] }}</td>
                <td>{{ $value["Mahasiswa"] }}</td>
                @foreach ($dataP as $key => $item)
                    @foreach ($item as $cpmk)
                        <td>{{ $value[$key . '_' . $cpmk] ?? '-' }}</td>
                    @endforeach
                @endforeach
            </tr>
        @endforeach
    </table>
</main>



@endsection