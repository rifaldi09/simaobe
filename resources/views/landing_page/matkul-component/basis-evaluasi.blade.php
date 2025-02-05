@extends('layout.main')
@section('content')
@include('landing_page.basis evaluasi.components.header')

<div class="container mt-5">
    @if (!empty($validasi))
    <p>{{ $validasi }}</p>
    @endif
    <div class="text-center">
        <h1 class="fw-bold font-outfit">{{ $nama_matkul }}</h1>
    </div>
    <h4><b>Komponen Penilaian</b></h4>
    <hr class="border border-2 border-dark">
    <div class="container mt-4">
        <h4><b>Form Penilaian</b></h4>

        @php
        $selectedComponents = array_column($data, 'KomponenPenilaian');
        @endphp

        <div class="row">
            <div class="col-md-6">
                <h5><b>Sikap</b></h5>
                @foreach (['Aktifitas Partisipatif', 'Team Based Project (TBP)', 'Case Based Method', 'Presensi'] as
                $sikap)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sikap{{ $loop->index }}" value="{{ $sikap }}"
                        @if(in_array($sikap, $selectedComponents)) checked @endif>
                    <label class="form-check-label" for="sikap{{ $loop->index }}"><b>{{ $sikap }}</b></label>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <h5><b>Kognitif</b></h5>
                @foreach (['Tugas', 'Quis', 'UTS', 'UAS'] as $kognitif)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kognitif{{ $loop->index }}"
                        value="{{ $kognitif }}" @if(in_array($kognitif, $selectedComponents)) checked @endif>
                    <label class="form-check-label" for="kognitif{{ $loop->index }}"><b>{{ $kognitif }}</b></label>
                </div>
                @endforeach
            </div>
        </div>

        <h4><b>Table Penilaian</b></h4>
        <table class="table table-bordered mt-3" id="penilaianTable">
            <thead>
                <tr>
                    <th>CPMK</th>
                    <!-- Kolom untuk komponen penilaian akan ditambahkan di sini -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="penilaianRow" data-cpmk="{{ $item['KodeCPMK'] }}">
                    <td>{{ $item['KodeCPMK'] }}</td>
                    <!-- Nilai BobotPenilaian akan ditambahkan oleh JavaScript -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll('.form-check-input');
        const tableHeader = document.querySelector('#penilaianTable thead tr');
        const tableRows = document.querySelectorAll('#penilaianTable .penilaianRow');
        const data = @json($data);

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateTable);
        });

        function updateTable() {
            // Bersihkan header
            tableHeader.innerHTML = '<th>CPMK</th>';
            
            // Dapatkan komponen terpilih
            const selectedComponents = Array.from(
                document.querySelectorAll('.form-check-input:checked')
            ).map(cb => cb.value);

            // Update header
            selectedComponents.forEach(component => {
                const th = document.createElement('th');
                th.textContent = component;
                tableHeader.appendChild(th);
            });

            // Update isi tabel
            tableRows.forEach(row => {
                // Hapus kolom kecuali CPMK
                const cells = row.querySelectorAll('td');
                cells.forEach((cell, index) => {
                    if (index > 0) cell.remove();
                });

                // Tambahkan kolom baru
                const cpmk = row.dataset.cpmk;
                selectedComponents.forEach(component => {
                    const td = document.createElement('td');
                    const nilai = data.find(
                        item => item.KodeCPMK === cpmk && 
                        item.KomponenPenilaian === component
                    )?.BobotPenilaian || '';
                    
                    td.textContent = nilai;
                    row.appendChild(td);
                });
            });
        }

        updateTable(); // Inisialisasi pertama
    });
    </script>

    @endsection