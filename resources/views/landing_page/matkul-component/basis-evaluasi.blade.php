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
        $namaKelompok = array_unique(array_column($dataKP, 'KelompokPenilaian'))
        @endphp

        <div class="row">
            @foreach ($namaKelompok as $Kelompok)
                <div class="col-md-6">
                    <h5><b>{{ $Kelompok }}</b></h5>
                    @foreach ($dataKP as $dataKomponen)
                        @if ($dataKomponen['KelompokPenilaian']===$Kelompok)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sikap{{ $loop->index }}" value="{{ $dataKomponen['KomponenPenilaian'] }}"
                                    @if(in_array($dataKomponen['KomponenPenilaian'] , $selectedComponents)) checked @endif>
                                <label class="form-check-label" for="sikap{{ $loop->index }}"><b>{{ $dataKomponen['KomponenPenilaian'] }}</b></label>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
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
                const cells = row.querySelectorAll('td');
                cells.forEach((cell, index) => {
                    if (index > 0) cell.remove();
                });

                const cpmk = row.dataset.cpmk;

                selectedComponents.forEach(component => {
                    const td = document.createElement('td');
                    const nilai = data.find(
                        item => item.KodeCPMK === cpmk &&
                        item.KomponenPenilaian === component
                    )?.BobotPenilaian || '';

                    const input = document.createElement('input');
                    input.type = 'number';
                    input.className = 'form-control';
                    input.value = nilai;
                    input.dataset.cpmk = cpmk;
                    input.dataset.component = component;

                    // Perbarui total global setiap kali input berubah
                    input.addEventListener('input', updateGlobalTotal);

                    td.appendChild(input);
                    row.appendChild(td);
                });
            });

            addGlobalTotalRow();
        }

        function addGlobalTotalRow() {
            let totalRow = document.querySelector('#penilaianTable tfoot');
            if (!totalRow) {
                totalRow = document.createElement('tfoot');
                const totalRowElement = document.createElement('tr');
                const totalTd = document.createElement('td');
                totalTd.colSpan = tableHeader.children.length;
                totalTd.className = 'text-center fw-bold';
                totalTd.id = 'globalTotalCell';
                totalRowElement.appendChild(totalTd);
                totalRow.appendChild(totalRowElement);
                document.querySelector('#penilaianTable').appendChild(totalRow);
            }
            updateGlobalTotal(); // Hitung total pertama kali
        }

        function updateGlobalTotal() {
            let totalValue = 0;
            const inputs = document.querySelectorAll('#penilaianTable input[type="number"]');

            inputs.forEach(input => {
                totalValue += parseFloat(input.value) || 0;
            });
            
            const allInputs = document.querySelectorAll('#penilaianTable tbody input[type="number"]');

            if (totalValue >= 100) {
                allInputs.forEach(input => {
                    input.disabled = true;
                });
            } else {
                allInputs.forEach(input => {
                    input.disabled = false;
                });
            }

            const totalCell = document.querySelector('#globalTotalCell');
            if (totalCell) {
                totalCell.textContent = `Total Keseluruhan Nilai: ${totalValue.toFixed(2)}`;
            }
        }


        updateTable(); // Inisialisasi pertama
    });
    </script>

    @endsection