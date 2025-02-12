{{--* Seluruh halaman sudah responsif --}}
@extends('layout.main')
@section('content')

<div class="container">
    <div class="container row row-cols-3">
        @foreach ($data as $datas)
        <div class="container col mt-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $datas['MataKuliah'] }}</h5>
                <p class="card-text">{{ $datas['Hari'] }}</p>
                <p class="card-text">{{ $datas['JamMulai'] }} - {{ $datas['JamSelesai'] }}</p>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection