<div id="basis-evaluasi" class="cotainer mx-5 mt-3">
    <div class="container">
        <a href="{{ route('penilaian_subcpmk') }}" class="text-decoration-none"><i class="bi bi-plus-circle"></i> Tambah</a>
        <table class="table table-bordered table-responsive mt-2" id="table-subCPMK">
            <thead>
                <tr>
                    <th>Sub-CPMK</th>
                    <th>Sangat Baik</th>
                    <th class="text-center">Baik</th>
                    <th class="text-center">Cukup</th>
                    <th class="text-center">Kurang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sub-CPMK01</td>
                    <td></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td>Sub-CPMK02</td>
                    <td></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td>Sub-CPMK03</td>
                    <td></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td>Sub-CPMK04</td>
                    <td></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="{{ route('komponenPenilaian') }}" class="btn btn-primary">Tambah Komponen Penilaian</a>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered table-responsive">
            <thead id="thead-tableKomponen">
                <tr>
                    <th class="text-center">No</th>
                    <th>Komponen Penilaian</th>
                </tr>
            </thead>
            <tbody>
                <tr id="table-row">
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-danger float-end" type="button">Hapus</button>
    </div>
</div>

<script>

    // Melakukan function ketika halaman di buka
    document.addEventListener("DOMContentLoaded", addColumnRow);

    function addColumnRow() {
        // Menginisialisasi table sub-CPMK
        const s_CPMKtable = document.getElementById('table-subCPMK').getElementsByTagName('tbody')[0];
        const jumlahRowCPMK = s_CPMKtable.rows.length;

        // Menginisialisasi Head Column table komponen Penilaian
        const tableHeadKomponen_p = document.getElementById('thead-tableKomponen').getElementsByTagName('tr')[0];
        const table2Row = document.getElementById('table-row');
        
        for (let i = 1; i <= jumlahRowCPMK; i++) {
            
            // Head Table Komponen Penilaian
            const newHeader = document.createElement('th');
            newHeader.textContent = `Sub-CPMK0${i}`;
            newHeader.classList.add('text-center')
            tableHeadKomponen_p.appendChild(newHeader);

            const newCell = document.createElement('td');

            // Isi Sub-CPMK table komponen penilaian
            newCell.innerHTML = ``;
            table2Row.appendChild(newCell);
            table2Row.classList.add('text-center')
        }
        
        // Untuk menambahkan column Bobot
        const newHeader = document.createElement('th');
        newHeader.textContent = `Bobot`;
        newHeader.classList.add('text-center')
        tableHeadKomponen_p.appendChild(newHeader);

        const newCell = document.createElement('td');

        // Isi Bobot Komponen Peniliaian
        newCell.innerHTML = ``;
        table2Row.appendChild(newCell);
    }
</script>