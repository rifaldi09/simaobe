function openInNewWindow(url, width = 800, height = 400) {
    // Hitung posisi tengah layar
    const left = (screen.width - width) / 2;
    const top = (screen.height - height) / 2;
    
    const windowFeatures = `width=${width},height=${height},top=${top},left=${left},resizable=yes,scrollbars=yes,status=yes`;
    
    window.open(url, '_blank', windowFeatures);
}

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