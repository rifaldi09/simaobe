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
                    <h7 style="color: white;">{{ $nama_dosen }}</h7>
                </button>
                <ul class="dropdown-menu" aria-labelledby="userIcon">
                    <li><a class="dropdown-item" href="/my-profil">My Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar active" id="sidebar">
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
                    <ul>
                        <span>{{ $mata_kuliah["NamaMtKlh"] }}</span>
                    </ul>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="chevron-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="submenu">
                    {{-- <li><a href="/struktur-mata-kuliah/{{ $mata_kuliah["IDSmtMtklh"] }}" onclick="event.preventDefault(); openInNewWindow(this.href);"
                        class="nav-link">Struktur Mata Kuliah</a></li> --}}
                    <li>
                        <ul>
                            <a href="/analisis-matkul-page/{{ $mata_kuliah["IDSmtMtKlh"] }}/{{ $mata_kuliah["NamaMtKlh"] }}" onclick="event.preventDefault(); openInNewWindow(this.href);"
                            class="nav-link">Analisis Pembelajaran</a>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <a href="/rencana-pembelajaran-matkul-page/{{ $mata_kuliah["IDSmtMtKlh"] }}/{{ $mata_kuliah["NamaMtKlh"] }}" onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Rencana Pembelajaran Semester</a>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <a href="/basis-evaluasi-matkul-page/{{ $mata_kuliah["IDSmtMtKlh"] }}/{{ $mata_kuliah["NamaMtKlh"] }}" onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Basis Evaluasi Penilaian</a>
                            </ul>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>
        <div class="sidebar-header">
            <span class="sidebar-title">
                <h4>
                    <a href="/daftar-kelas-dosen" class="text-light text-decoration-none">Daftar Kelas Mata Kuliah Dosen</a>
                </h4>
            </span>
        </div>

        {{-- rekap data --}}
        <li class="menu-item list-unstyled">
            <a href="#" class="menu-link">
                <ul>
                    <span>Mengambil data rekapan OBE</span>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="chevron-icon">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
            <ul class="submenu">
                <li>
                    <ul>
                        <a href="/rekap-sc" onclick="event.preventDefault(); openInNewWindow(this.href);"
                        class="nav-link">Rekap capaian OBE mahasiswa per kelas mata kuliah</a>
                    </ul>
                </li>
                <li>
                    <ul>
                        <a href="/rekap-cs" onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Rekap capaian OBE per kelas mata kuliah</a>
                    </ul>
                </li>
                <li>
                    <ul>
                        <a href="/rekap-cc" onclick="event.preventDefault(); openInNewWindow(this.href);" class="nav-link">Rekap capaian OBE per mata kuliah semester</a>
                        </ul>
                </li>
            </ul>
        </li>
        {{-- end rekap data --}}

    </div>
</div>


@endsection