@extends('layout.main')
@section('content')
@include('landing_page.basis evaluasi.components.header')

<main>
  <div class="container mt-3">
    <h2>&nbsp;</h2>
  </div>
  <hr class="border border-2 border-dark">
  <div class="d-flex justify-content-center">
    <div class="card01 w-75">
      <div class="card-body">
        <h6 class="card-title mb-5">Interaksi Manusia dan Komputer</h6>
        <p class="card-text">INF11118</p>
        <h6 class="card-title">2 SKS</h6>
        <h6 class="card-title mb-5">Teknik Informatika</h6>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <div class="card02 w-100 mx-5">
      <div class="card-body">
        <h6 class="card-title">Pengisian komponen Penilaian</h6>
        <div class="table-container m-3">
          <table class="table table-primary table-border-less">
            <tr>
              <th>No</th>
              <th>Komponen penilaian</th>
              <th>Bobot penilaian</th>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <td>1</td>
              <td><input type="text" class="form-control" placeholder="Input Komponen penilaian"></td>
              <td><input type="text" class="form-control" placeholder="0-100%"></td>
              <td>
                <button class="btn btn-outline-primary border-0"><i class="bi bi-bookmark-check"></i></button>
                <button class="btn btn-outline-danger border-0"><i class="bi bi-x-octagon"></i></button>
              </td>
            </tr>
            <tr>
              <td>Total</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>


</main>

@endsection