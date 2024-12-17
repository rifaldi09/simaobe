let mingguId = document.getElementById("selectMultipleMinggu1").id;
let cpmkId = document.getElementById("selectMultipleCPMK1").id;
let cplID = document.getElementById("selectCpl1").id;
const minggu = document.getElementById("selectMultipleMinggu1");
const mingguValues = [...minggu.options].map((options) => options.value);

let m_id = mingguId.match(/\d+$/)[0];
let c_id = cpmkId.match(/\d+$/)[0];
let cpl_id = cplID.match(/\d+$/)[0];
// console.log(mrp_id);

$(document).ready(function () {
    $(`#selectMultipleMinggu${m_id}`).select2();
    $(`#selectMultipleCPMK${c_id}`).select2();

    // manmpilkan hasil select CPL ke CPMK
    $('select[id^="selectCpl"]').each(function () {
        anaCPMK();
    });
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

const cpmkopt = document.querySelector(`#selectMultipleCPMK${c_id}`);
const selectCpl = document.querySelector(`#selectCpl${cpl_id}`);

// const onCpmkChange = () => {
//     const selectedCplValue = selectCpl.value;

//     getCpmk()
//         .then((responseData) => {
//             const filteredData = responseData.filter(
//                 (value) => value.CPLID == selectedCplValue
//             );

//             const cpmkOption = filteredData
//                 .map(
//                     (value) =>
//                         `<option value="${value.CPMKID}">${value.KetCPMK}</option>`
//                 )
//                 .join("");

//             cpmkopt.innerHTML = cpmkOption;
//             $(`#selectMultipleCPMK${c_id}`).select2();
//         })
//         .catch((error) => console.error("Error fetching CPMK:", error));
// };

$(document).on("change", 'select[id^="selectCpl"]', function () {
    const selectedCplValue = this.value;
    const cpmkopt = $(this)
        .closest(".child_analisis")
        .find('select[id^="selectMultipleCPMK"]')[0];

    getCpmk()
        .then((responseData) => {
            const filteredData = responseData.filter(
                (value) => value.CPLID == selectedCplValue
            );

            const cpmkOption = filteredData
                .map(
                    (value) =>
                        `<option value="${value.CPMKID}">${value.KetCPMK}</option>`
                )
                .join("");

            cpmkopt.innerHTML = cpmkOption;
            $(cpmkopt).select2(); // Reinitialize select2
        })
        .catch((error) => console.error("Error fetching CPMK:", error));
});

// Agar bisa menampilkan selected CPL
function anaCPMK(){
    const selectedCplValue = selectCpl.value;

    getCpmk()
        .then((responseData) => {
            const filteredData = responseData.filter(
                (value) => value.CPLID == selectedCplValue
            );

            const cpmkOption = filteredData
                .map(
                    (value) =>
                        `<option value="${value.CPMKID}">${value.KetCPMK}</option>`
                )
                .join("");

            cpmkopt.innerHTML = cpmkOption;
            $(`#selectMultipleCPMK${c_id}`).select2();
        })
        .catch((error) => console.error("Error fetching CPMK:", error));
}

let index = 0;
addAnalisis = () => {
    m_id++;
    c_id++;
    cpl_id++;
    console.log(index);

    getCpmk()
        .then((data) => {
            const cpmkOption = data
                .map(
                    (data) =>
                        `<option value="${data.KetCPMK}">${data.KetCPMK}</option>`
                )
                .join("");

            // mengambil minggu yang sudah dipilih
            const allSelectedMinggu = document.querySelectorAll(
                '[id^="selectMultipleMinggu"]'
            );

            selectedMinggu = Array.from(allSelectedMinggu).flatMap((select) =>
                Array.from(select.selectedOptions).map((opt) => opt.value)
            );

            const cplOption = data
                .filter(
                    (value, index, self) =>
                        index === self.findIndex((v) => v.CPLID === value.CPLID)
                )
                .map(
                    (data) =>
                        `<option value="${data.CPLID}">${data.CPL}</option>`
                )
                .join("");

            // filter minggu baru yang dipilih
            const mingguOptions = mingguValues
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
                                        <textarea class="form-control" name="analisis[${index}][materiperkuliahan]" cols="5" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="container mb-3">
                                <p class="h3">KodeSubCpmk</p>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <input id="kscmpk" name="analisis[0][kscpmk]" class="form-control" name="kscpmk"
                                            type="text"></input>
                                    </div>
                                </div>
                                <p class="h3">Sub-CPMK</p>
                                <div class="card">
                                    <div class="card-body">
                                        <textarea id="subCPMK" class="form-control" name="analisis[0][subcpmk]" style="height: 120px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-1 justify-content-center">
                            <p class="h3">CPL</p>
                            <select class="form-select" name="analisis[${index}][cplid]" id="selectCpl${cpl_id}">
                                <option value=""></option>
                                ${cplOption}
                            </select>
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
