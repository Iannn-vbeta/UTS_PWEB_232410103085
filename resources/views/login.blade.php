@extends('layouts.app')
@section('title','Login')
@section('main')
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h4 class="text-center mb-4">Login</h4>

      <form method="GET" action="{{ route('dashboard') }}">
          <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
          </div>

          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
  </div>
@endsection