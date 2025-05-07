@extends('layouts.app')
@section('title','Login')
@section('main')
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #ff0000 0%, #ffffff 100%);">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px; border-radius: 15px; background: #fff;">
                        <h4 class="text-center mb-4" style="font-weight: bold; color: #ff0000;">Selamat Datang Pengembara!</h4>

                        <form method="GET" action="{{ route('dashboard') }}">
                                        <div class="mb-3">
                                                        <label for="username" class="form-label" style="font-weight: 500;">Username</label>
                                                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required style="border-radius: 10px;">
                                        </div>

                                        <div class="mb-3">
                                                        <label for="password" class="form-label" style="font-weight: 500;">Password</label>
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required style="border-radius: 10px;">
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100" style="border-radius: 10px; background: #ff0000; border: none; transition: background 0.3s;">
                                                        Login
                                        </button>
                        </form>

        </div>

        <style>
                        .btn-primary:hover {
                                        background: #cc0000;
                        }
                        .card {
                                        animation: fadeIn 1s ease-in-out;
                        }
                        @keyframes fadeIn {
                                        from {
                                                        opacity: 0;
                                                        transform: translateY(-20px);
                                        }
                                        to {
                                                        opacity: 1;
                                                        transform: translateY(0);
                                        }
                        }
        </style>
</body>
@endsection