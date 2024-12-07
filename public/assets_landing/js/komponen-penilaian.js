// Tambahkan console.log untuk debugging
document.addEventListener('DOMContentLoaded', function() {
    console.log('Script loaded!');

    // State untuk menyimpan data
    let formData = {
        rows: []
    };

    // Ambil semua checkbox
    const sikapCheckboxes = document.querySelectorAll('#sikap1, #sikap2, #sikap3, #sikap4');
    const kognitifCheckboxes = document.querySelectorAll('#kognitif1, #kognitif2, #kognitif3, #kognitif4');
    const tbody = document.querySelector('tbody');

    console.log('Sikap checkboxes:', sikapCheckboxes.length);
    console.log('Kognitif checkboxes:', kognitifCheckboxes.length);
    console.log('Table body:', tbody);

    // Mapping nama komponen
    const componentMapping = {
        'sikap1': 'Aktifitas Partisipatif',
        'sikap2': 'Team Based Project (TBP)',
        'sikap3': 'Case Based Project (CBP)',
        'sikap4': 'Presensi',
        'kognitif1': 'Tugas',
        'kognitif2': 'Quis',
        'kognitif3': 'UTS',
        'kognitif4': 'UAS'
    };

    // Event listener untuk semua checkbox
    [...sikapCheckboxes, ...kognitifCheckboxes].forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            console.log('Checkbox changed:', this.id);
            const komponenName = componentMapping[this.id];
            console.log('Komponen name:', komponenName);
            
            if (this.checked) {
                addNewRow(komponenName);
            } else {
                removeRow(komponenName);
            }
            
            updateTable();
        });
    });

    // function untuk mengubah input menjadi disabled
    function toggleInputs(disabled) {
        const allInputs = tbody.querySelectorAll('input[type="number"]:not([readonly])');
        allInputs.forEach(input => {
            input.disabled = disabled;
        })
    }

    function addNewRow(komponenName) {
        console.log('Adding new row for:', komponenName);
        const newRow = {
            komponen: komponenName,
            values: [0, 0, 0],
            bobot: 0
        };
        formData.rows.push(newRow);
        console.log('Current formData:', formData);
    }

    function removeRow(komponenName) {
        console.log('Removing row for:', komponenName);
        formData.rows = formData.rows.filter(row => row.komponen !== komponenName);
        console.log('Current formData after remove:', formData);
    }

    function getRowIndex(row) {
        const komponenName = row.querySelector('td:nth-child(2)').textContent.trim();
        return formData.rows.findIndex(r => r.komponen === komponenName);
    }

    function updateTable() {
        console.log('Updating table');
        // Clear existing rows except the last total row
        while (tbody.children.length > 1) {
            tbody.removeChild(tbody.firstChild);
        }

        // Add rows for each component
        formData.rows.forEach((row, index) => {
            const tr = document.createElement('tr');

            if(row.bobot > 100) {
                row.bobot = 100;
            }

            tr.innerHTML = `
                <td><b>${index + 1}</b></td>
                <td><textarea class="form-control" cols="5" rows="1" disabled >${row.komponen}</textarea></td>
                <td><input type="number" class="form-control" value="${row.values[0]}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${row.values[1]}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${row.values[2]}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${row.bobot}" readonly></td>
            `;
            tbody.insertBefore(tr, tbody.lastElementChild);
        });

        // Update total
        const totalBobot = formData.rows.reduce((sum, row) => sum + row.bobot, 0);
        const totalRow = tbody.lastElementChild;
        if (totalRow && totalRow.querySelector('input[type="text"]')) {
            totalRow.querySelector('input[type="text"]').value = totalBobot;
        }

        // membuat input menjadi disabled ketika total bobot sama dengan 100
        toggleInputs(totalBobot >= 100);

        console.log('Table updated, total bobot:', totalBobot);
    }

    // Event delegation untuk input nilai
    document.addEventListener('input', function(e) {
        if (e.target.matches('input[type="number"]') && e.target.closest('tr')) {
            console.log('Input changed');
            const row = e.target.closest('tr');
            if (!row.querySelector('td:last-child input[readonly]')) return;

            const inputs = Array.from(row.querySelectorAll('input[type="number"]:not([readonly])'));
            const rowIndex = getRowIndex(row);

            // validasi input agar jika input lebih dari 100 maka nilai akan otomatis jadi 100
            inputs.forEach(input => {
                if (parseFloat(input.value) > 100) {
                    input.value = 100;
                }
            });

            // Update nilai di formData
            if (rowIndex !== -1) {
                const values = inputs.map(input => parseFloat(input.value) || 0);
                formData.rows[rowIndex].values = values;
                formData.rows[rowIndex].bobot = values.reduce((sum, val) => sum + val, 0);
                console.log('Updated values:', values);
                console.log('Updated bobot:', formData.rows[rowIndex].bobot);
            }

            updateTable();
        }
    });

    // Initialize table with any checked checkboxes
    const checkedBoxes = [...sikapCheckboxes, ...kognitifCheckboxes].filter(cb => cb.checked);
    console.log('Initially checked boxes:', checkedBoxes.length);
    checkedBoxes.forEach(cb => {
        const komponenName = componentMapping[cb.id];
        addNewRow(komponenName);
    });
    if (checkedBoxes.length > 0) {
        updateTable();
    }
});