document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".form-check-input");
    const tableBody = document.getElementById("table-body");

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            const checkboxValue = this.value;
            const rowId = "row-" + this.id;

            if (this.checked) {
                // Jika checkbox dicentang, tambahkan baris jika belum ada
                if (!document.getElementById(rowId)) {
                    const newRow = document.createElement("tr");
                    newRow.setAttribute("id", rowId);
                    newRow.innerHTML = `
                        <td></td>
                        <td>${checkboxValue}</td>
                        <td><input type="text" class="form-control text-center" name="subcpmk_01"></td>
                        <td><input type="text" class="form-control text-center" name="subcpmk_02"></td>
                        <td><input type="text" class="form-control text-center" name="subcpmk_03"></td>
                        <td><input type="text" class="form-control text-center" name="bobot"></td>
                    `;
                    tableBody.appendChild(newRow);
                }
            } else {
                // Jika checkbox di-uncheck, hapus baris yang sesuai
                const existingRow = document.getElementById(rowId);
                if (existingRow) {
                    tableBody.removeChild(existingRow);
                }
            }
        });
    });
});