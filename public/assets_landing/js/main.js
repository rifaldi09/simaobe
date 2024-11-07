// mengambil id dari span yang ada di class tabMatkul
let tabMatkulId = document.querySelectorAll(".tabMatkul span");

// mengambil div dari section <main>
const matkulSections = document.querySelectorAll("main > div");

// looping tabMatkulId dengan foreach karena berbentuk array
// arraynya berisi id dari span yang ada di <div class="tabMatkul"><span id=""></span></div>
tabMatkulId.forEach(span => {
    span.addEventListener("click", function() {
        const spanId = this.id;
        
        // looping matkulSections dengan foreach karena berbentuk array
        // arraynya berisi id dari div yang ada di <main><div id=""></div></main>
        matkulSections.forEach(div => {
            if(div.id == spanId) {
                // menghapus class display none
                // jika didalam div di section <main> terdapat id yang sama dengan yang dengan yang di pilih di span 
                div.classList.remove("d-none");
            } else {
                // jika tidak sama, maka akan ditambahkan class display none
                div.classList.add("d-none");
            }
        })

        // menghapus semua class yang ada pada span di tab sebelum ditambahkan ke tab yang dipilih
        tabMatkulId.forEach(span => span.classList.remove("text-outline-yellow"));
        // menambahkan class pada span yang sedang dipilih
        this.classList.add("text-outline-yellow");
    })
});

document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const contentWrapper = document.querySelector('.content-wrapper');
    
    // Create backdrop element
    const backdrop = document.createElement('div');
    backdrop.className = 'sidebar-backdrop';
    document.body.appendChild(backdrop);

    // Toggle Sidebar
    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('active');
        contentWrapper.classList.toggle('sidebar-active'); // Ubah class yang di-toggle
        backdrop.classList.toggle('active');
    });

    // Toggle Submenu
    const menuLinks = document.querySelectorAll('.menu-link');
    menuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            const chevron = this.querySelector('.chevron-icon');
            
            submenu.classList.toggle('active');
            chevron.classList.toggle('rotated');
        });
    });

    // Close sidebar when clicking backdrop on mobile
    backdrop.addEventListener('click', function() {
        if (window.innerWidth <= 991.98) {
            sidebar.classList.remove('active');
            contentWrapper.classList.remove('sidebar-active');
            backdrop.classList.remove('active');
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 991.98) {
            backdrop.classList.remove('active');
        }
    });
});