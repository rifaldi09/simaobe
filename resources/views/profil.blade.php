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
                  <h7 style="color: white;">Demo Akun Dosen</h7>
              </button>
              <ul class="dropdown-menu" aria-labelledby="userIcon">
                  <li><a class="dropdown-item" href="/my-profil">My Profile</a></li>
                  <li><a class="dropdown-item" href="/logout">Log Out</a></li>
              </ul>
          </div>
      </div>
  </div>
</header>

<div class="d-flex justify-content-center mt-5">
  <div class="card border-0 shadow-lg d-flex" style="width: 18rem;">
    <img src="{{ asset ('/assets_landing/images/logoumrah.png') }}" class="card-img-top w-50" alt="...">
    <div class="card-body">
      <p class="card-text">
        <p>NUPTK: {{ $data["NUPTK"] }}</p>
        <p>{{ $data["NamaLengkap"] }}</p>
        <p>{{ $data["Fungsional"] }}</p>
      </p>
    </div>
  </div>
</div>
@endsection