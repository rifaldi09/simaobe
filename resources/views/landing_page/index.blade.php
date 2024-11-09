@extends('layout.main')

@section('content')

<header>
    <div class="navbar navbar-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <!-- Add toggle button to navbar -->
            <div class="d-flex align-items-center">
                <button class="btn me-3" id="sidebarToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <div>
                    <span class="title">Sistem Manajemen</span>
                    <span class="subtitle">Kurikulum OBE</span>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn p-0" type="button" id="userIcon" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets_landing/images/logo_profil1.jpeg" alt="User Icon" class="user-icon">
                </button>
                <ul class="dropdown-menu" aria-labelledby="userIcon">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-content">
    <div class="sidebar-header">
        <span class="sidebar-title"><h4>Mata Kuliah</h4></span>
    </div>
        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>Pemrograman Web</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    <li><a href="#">Analisis Pembelajaran</a></li>
                    <li><a href="#">Rencana Pembelajaran Semester</a></li>
                    <li><a href="#">Basis Evaluasi Penilaian</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>Interaksi Manusia dan Komputer</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    <li><a href="#">Analisis Pembelajaran</a></li>
                    <li><a href="#">Rencana Pembelajaran Semester</a></li>
                    <li><a href="#">Basis Evaluasi Penilaian</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>Sistem Operasi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    <li><a href="#">Analisis Pembelajaran</a></li>
                    <li><a href="#">Rencana Pembelajaran Semester</a></li>
                    <li><a href="#">Basis Evaluasi Penilaian</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>Internet Untuk Segala</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    <li><a href="#">Analisis Pembelajaran</a></li>
                    <li><a href="#">Rencana Pembelajaran Semester</a></li>
                    <li><a href="#">Basis Evaluasi Penilaian</a></li>
                </ul>
            </li>
            <!-- Add other menu items similarly -->
        </ul>
    </div>
</div>


@endsection