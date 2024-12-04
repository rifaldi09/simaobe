@extends('layout.main')

@section('content')
<header>
    <div class="navbar navbar-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <!-- Add toggle button to navbar -->
            <div class="d-flex align-items-center">
                <button class="btn me-3" id="sidebarToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="menu-icon">
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
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-content">
        <div class="sidebar-header">
            <span class="sidebar-title">
                <h4>Mata Kuliah</h4>
            </span>
        </div>
        <ul class="sidebar-menu">
            @foreach ($data as $mata_kuliah)
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>{{ $mata_kuliah["NamaMtklh"] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    <li><a href="/struktur-mata-kuliah" onclick="event.preventDefault(); openInNewWindow(this.href);"
                        class="nav-link">Struktur Mata Kuliah</a></li>
                    <li><a href="/analisis-matkul-page" onclick="event.preventDefault(); openInNewWindow(this.href);"
                            class="nav-link">Analisis Pembelajaran</a></li>
                    <li><a href="/rencana-pembelajaran-matkul-page"
                            onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Rencana
                            Pembelajaran Semester</a></li>
                    <li><a href="/basis-evaluasi-matkul-page"
                            onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Basis
                            Evaluasi Penilaian</a></li>
                </ul>
            </li>
            <!-- Add other menu items similarly -->
            @endforeach
        </ul>
    </div>
</div>


@endsection