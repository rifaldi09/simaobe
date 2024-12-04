@extends('layout.main')

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

<div class="login-container">
    <img src="{{url('assets_landing/images/logoumrah.png')}}" alt="Logo" class="logo">
    <div class="login-box">
        <form action="{{ route('proses-register') }}" method="post" enctype="multipart/form-data">
            @csrf   
            <div class="mb-3">
                <label for="" class="form-label">User ID</label>
                <input type="number" name="user_id" id="user_id" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="user_email" id="user_email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="user_name" id="user_name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn-masuk">Register</button>
            <a href="/login" class="forgot-password">Login</a>
        </form>
    </div>
</div>
@endsection