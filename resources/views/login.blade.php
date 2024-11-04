{{-- memanggil layout main sebagai induk file --}}
{{-- layout.main berarti file main.blade pada folder layout --}}
{{-- jika folder banyak, maka titiknya juga banyak, contoh layout.login.main --}}
{{-- dengan ini, kita ga perlu berkali kali masukin head sama body html--}}
@extends('layout.main')

{{-- mengisi section content atau yield content pada file induk --}}
@section('content')
<header>
    <div class="navbar navbar-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <span class="title">Sistem Manajemen</span>
                    <span class="subtitle">Kurikulum OBE</span>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- Main Content -->
<div class="login-container">
    <!-- Logo -->
    <img src="logo.png" alt="Logo" class="logo">
    
    <!-- Login Box -->
    <div class="login-box">
        <h2 class="login-title">LOGIN</h2>
        <form action="{{ route('proses-login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="userId" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id">
                {{-- menampilkan error jika inputan kosong --}}
                @error('user_id')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
                {{-- menampilkan error jika inputan kosong --}}
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn-masuk">Masuk</button>
            <a href="#" class="forgot-password">Lupa Password ?</a>
        </form>
    </div>
</div> 

<footer class="footer mt-auto">
<div class="container text-center">
    <p class="mb-0">Developed by Informatics Engineering</p>
</div>
</footer>
@endsection