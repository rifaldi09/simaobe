@extends('layout.main')
@section('content')
@include('landing_page.basis evaluasi.components.header')

<div class="container mt-5">
  @if (!empty($validasi))
    <p>{{ $validasi }}</p>
  @endif
  <h4><b>Komponen Penilaian</b></h4>
  <hr class="border border-2 border-dark">
  <div class="row mb-4">
    <div class="col-md-6">
      <h5><b>Sikap</b></h5>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sikap1">
        <label class="form-check-label" for="sikap1"><b>Aktifitas Partisipatif</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sikap2">
        <label class="form-check-label" for="sikap2"><b>Team Based Project (TBP)</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sikap3">
        <label class="form-check-label" for="sikap3"><b>Case Based Project (CBP)</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="sikap4">
        <label class="form-check-label" for="sikap4"><b>Presensi</b></label>
      </div>
    </div>
    <div class="col-md-6">
      <h5><b>Kognitif</b></h5>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="kognitif1">
        <label class="form-check-label" for="kognitif1"><b>Tugas</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="kognitif2">
        <label class="form-check-label" for="kognitif2"><b>Quis</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="kognitif3">
        <label class="form-check-label" for="kognitif3"><b>UTS</b></label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="kognitif4">
        <label class="form-check-label" for="kognitif4"><b>UAS</b></label>
      </div>
    </div>
  </div>

  
<form action="/create-kp" method="post">
  @csrf
  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>No</th>
        <th>Komponen Penilaian</th>
        <th>Subcpmk 01</th>
        <th>Subcpmk 02</th>
        <th>Subcpmk 03</th>
        <th>Bobot</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th colspan="5"></th>
        <td><input type="text" class="form-control text-center" value="0" readonly></td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-end mb-3">
    <button class="btn text-white font-outfit" style="background-color: #072C7D;">SIMPAN</button>
  </div>
</form>

</div>

@push('scripts')
<script>
    // Debug script loading
    console.log('View loaded');
</script>
<script src="{{ asset('assets_landing/js/komponen-penilaian.js') }}"></script>
@endpush


@endsection