function openInNewWindow(url, width = 800, height = 400) {
    // Hitung posisi tengah layar
    const left = (screen.width - width) / 2;
    const top = (screen.height - height) / 2;

    const windowFeatures = `width=${width},height=${height},top=${top},left=${left},resizable=yes,scrollbars=yes,status=yes`;

    window.open(url, "_blank", windowFeatures);
}

document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebar = document.getElementById("sidebar");
    const contentWrapper = document.querySelector(".content-wrapper");

    // Create backdrop element
    const backdrop = document.createElement("div");
    backdrop.className = "sidebar-backdrop";
    document.body.appendChild(backdrop);

    // Toggle Sidebar
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("active");
        contentWrapper.classList.toggle("sidebar-active"); // Ubah class yang di-toggle
        backdrop.classList.toggle("active");
    });

    // Toggle Submenu
    const menuLinks = document.querySelectorAll(".menu-link");
    menuLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            const chevron = this.querySelector(".chevron-icon");

            submenu.classList.toggle("active");
            chevron.classList.toggle("rotated");
        });
    });

    // Close sidebar when clicking backdrop on mobile
    backdrop.addEventListener("click", function () {
        if (window.innerWidth <= 991.98) {
            sidebar.classList.remove("active");
            contentWrapper.classList.remove("sidebar-active");
            backdrop.classList.remove("active");
        }
    });

    // Handle window resize
    window.addEventListener("resize", function () {
        if (window.innerWidth > 991.98) {
            backdrop.classList.remove("active");
        }
    });
});

addPenilaian = () => {
    // Ambil parent row
    const row = document.querySelector(".row");

    // Hitung jumlah penilaian yang sudah ada
    const existingPenilaian = row.querySelectorAll(".col-md-3").length;
    const newPenilaianNumber = existingPenilaian + 1;

    // Buat kolom penilaian baru
    const colPenilaian = document.createElement("div");
    colPenilaian.className = "col-md-3 mb-2";
    colPenilaian.innerHTML = `
          <div class="card rounded-4 bg-custom-primary-2 position-relative">
              <div class="card-body text-center">
                  <h4>Penilaian ${newPenilaianNumber}</h4>
                  <div class="d-flex justify-content-between mx-5">
                      <input type="number" name="" id="" class="form-control w-50 me-2" placeholder="min">
                      <p><i class="bi bi-dash text-light"></i></p>
                      <input type="number" name="" id="" class="form-control w-50 ms-2" placeholder="max">
                  </div>
                  <div class="d-flex justify-content-center">
                      <input type="text" name="" id="" class="form-control w-75 mt-3" placeholder="indikator Pencapaian">
                  </div>
                  <div class="d-flex justify-content-center">
                      <textarea name="" id="" class="form-control w-75" cols="30" rows="5" placeholder="Dekripsi"></textarea>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-center">
                <i class="bi bi-dash-circle fs-5 text-center text-danger cursor-pointer" onclick="removePenilaian(event)"></i>
          </div>
      `;

    // Buat kolom plus baru
    const colPlus = document.createElement("div");
    colPlus.className = "col-md-1";
    colPlus.innerHTML = `
          <div class="d-flex justify-content-center align-items-center h-100">
              <i class="bi bi-plus-circle fs-3 cursor-pointer" onclick="addPenilaian()"></i>
          </div>
      `;

    // Hapus kolom plus yang lama
    const oldColPlus = row.querySelector(".col-md-1");
    if (oldColPlus) {
        oldColPlus.remove();
    }

    // Tambahkan kolom baru ke row
    row.appendChild(colPenilaian);
    row.appendChild(colPlus);
};

removePenilaian = (event) => {
    // Mendapatkan elemen col-md-3 yang akan dihapus
    const penilaianColumn = event.target.closest('.col-md-3');
        
    if (penilaianColumn) {
        // Cek apakah ini adalah penilaian terakhir
        const row = penilaianColumn.parentElement;
        const allPenilaian = row.querySelectorAll('.col-md-3');
        
        if (allPenilaian.length > 1) {
            // Hapus kolom penilaian
            penilaianColumn.remove();
            
            // Perbarui nomor penilaian yang tersisa
            const remainingPenilaian = row.querySelectorAll('.col-md-3');
            remainingPenilaian.forEach((col, index) => {
                const heading = col.querySelector('h4');
                if (heading) {
                    heading.textContent = `Penilaian ${index + 1}`;
                }
            });
            
            // Jika kolom plus hilang saat menghapus, tambahkan kembali
            if (!row.querySelector('.col-md-1')) {
                const colPlus = document.createElement('div');
                colPlus.className = 'col-md-1';
                colPlus.innerHTML = `
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i class="bi bi-plus-circle fs-3 cursor-pointer" onclick="addPenilaian()"></i>
                    </div>
                `;
                row.appendChild(colPlus);
            }
        } else {
            // Jika ini penilaian terakhir, tampilkan peringatan
            alert('Minimal harus ada satu penilaian!');
        }
    }
}