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
        <br>
        <p class="card-text">INF11118</p>
        <h5 class="card-title">2 SKS</h5>
        <h5 class="card-title mb-5">Teknik Informatika</h5>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-5">
    <div class="card02 w-50 mx-5">
      <div class="card-body">
        <h6 class="card-title">Pengisian komponen Penilaian</h6>
        <div class="table-container m-3" >
            <table class="table table-borderless table-primary">
                <tr>
                    <th>No</th>
                    <th>Komponen penilaian</th>
                    <th>Bobot penilaian</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>AKTIVITAS PARTISIPATIF</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TEAM BASE PROJECT</td>
                    <td>55%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>TUGAS</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>UJIAN TENGAH SEMESTER</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>UJIAN AKHIR SEMESTER</td>
                    <td>15%</td>
                </tr>
                <tr class="total-row">
                    <td colspan="2">TOTAL</td>
                    <td>100%</td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
  
</main>
       
@endsection