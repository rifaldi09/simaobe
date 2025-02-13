{{--* Seluruh halaman sudah responsif --}}
@extends('layout.main')
@section('content')
<header>
    <div class="text-center">
        <h1 class="fw-bold font-outfit">Daftar Kelas Mata Kuliah</h1>
        <h1 class="fw-bold font-outfit">Dosen Pengampu</h1>
    </div>
    <div class="tabs-bg float-start py-2 w-100 mb-3">
        
    </div>
</header>

<main>
    
  <div class="container">
    <div class="container row row-cols-auto justify-content-center">
        @foreach ($data as $datas)
        <a href="/table-nilai-mk/{{ $datas["IDCourseClass"] }}" class="text-reset text-decoration-none">
          <div class="container col my-3 ">
              <div class="card"  style="width: 200px;">
                <div class="card-body text-center">
                  <h5 class="card-title">{{ $datas['MataKuliah'] }}</h5>
                  <p class="card-text">{{ $datas['Hari'] }}</p>
                  <p class="card-text">{{ $datas['JamMulai'] }} - {{ $datas['JamSelesai'] }}</p>
                </div>
              </div>
          </div>
        </a>
        @endforeach
    </div>
</div>

</main>

@endsection