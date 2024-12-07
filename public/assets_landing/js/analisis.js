let mingguId = document.getElementById("selectMultipleMinggu1").id;
let cpmkId = document.getElementById("selectMultipleCPMK1").id;

let m_id = mingguId.match(/\d+$/)[0];
let c_id = cpmkId.match(/\d+$/)[0];
// console.log(mrp_id);

$(document).ready(function () {
    $(`#selectMultipleMinggu${m_id}`).select2();
    $(`#selectMultipleCPMK${c_id}`).select2();
});

$(document).on("click", ".remove_analisis", function () {
    const mingguSelect = $(this)
        .closest(".child_analisis")
        .find('[id^="selectMultipleMinggu"]');
    const removedValues = mingguSelect.val(); // Ambil nilai yang akan dihapus

    selectedMinggu = selectedMinggu.filter(
        (value) => !removedValues.includes(value)
    ); // Perbarui array minggu

    $(this).closest(".child_analisis").remove();
    console.log(`hapus`);
});

let selectedMinggu = [];

const getCpmk = async () => {
    const url = "http://127.0.0.1:8000/get-cpmk";
    try {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Error`);
        }

        const json = await response.json();
        return json;
    } catch (error) {
        console.error(error.message);
    }
};


$(document).ready(function() {
    $('#selectMultipleCpl').select2({
        placeholder: "", // Placeholder yang akan ditampilkan
        allowClear: true         // Menambahkan opsi untuk menghapus pilihan
    });
});


let index = 0;
addAnalisis = () => {
    m_id++;
    c_id++;
    console.log(index);

    getCpmk()
    .then((data) => {

            const cpmkOption = data.map(data => 
                `<option value="${data.KetCPMK}">${data.KetCPMK}</option>`
            ).join("");

            // mengambil minggu yang sudah dipilih
            const allSelectedMinggu = document.querySelectorAll(
                '[id^="selectMultipleMinggu"]'
            );
            selectedMinggu = Array.from(allSelectedMinggu).flatMap((select) =>
                Array.from(select.selectedOptions).map((opt) => opt.value)
            );

            // filter minggu baru yang dipilih
            const mingguOptions = [1, 2, 3, 4]
                .filter((value) => !selectedMinggu.includes(value.toString()))
                .map(
                    (value) =>
                        `<option value="${value}">Minggu ${value}</option>`
                )
                .join("");

            $("#newAnalisis").append(`
            <div class="child_analisis">
                <div class="container d-flex flex-column flex-md-row">
                    <div class="container col-12 col-md-3 mb-3">
                        <p class="h3">Minggu</p>
                        <select id="selectMultipleMinggu${m_id}" name="analisis[${index}][minggu][]" class="form-control" multiple="multiple">
                            ${mingguOptions}
                        </select>
                    </div>
    
                    <div class="container col-12 col-md-9">
                        <div class="container d-flex justify-content-center flex-column flex-md-row">
    
                            <div class="container mb-3">
                                <p class="h3">Materi Perkuliahan</p>
                                <div class="card">
                                    <div class="card-body">
                                        <textarea class="form-control" name="analisis[${index}][materiperkuliahan]" style="height: 200px;"></textarea>
                                    </div>
                                </div>
                            </div>
    
                            <div class="container mb-3">
                                <p class="h3">Sub-CPMK</p>
                                <div class="card">
                                    <div class="card-body">
                                        <textarea class="form-control" name="analisis[${index}][subcpmk]" style="height: 200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="container mt-1 justify-content-center">
                            <p class="h3">CPMK</p>
                            <select id="selectMultipleCPMK${c_id}" class="form-control" name="analisis[${index}][cpmk][]" multiple="multiple">
                                ${cpmkOption}
                            </select>
                        </div>
    
                    </div>
                </div>
                <div class="container">
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-danger remove_analisis">Hapus</button>
                        <button type="button" class="btn btn-primary" onclick="addAnalisis()">Tambah</button>
                    </div>
                </div>
    
                <hr class="my-3 border-dark w-100" style="height: 2px;">
                <div id="newAnalisis"></div>
            </div>
            `);

            $(`#selectMultipleMinggu${m_id}`).select2();
            $(`#selectMultipleCPMK${c_id}`).select2();
        })
        .catch((error) => {
            console.log(error);
        });

    index++;
};
