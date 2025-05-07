@extends('layouts.app')
@section('title','Profile')

@include('components.navbar')
@section('main')
  <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="profile-card" style="width: 300px; border: 1px solid #ddd; border-radius: 8px; padding: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; font-family: Arial, sans-serif;">
      <img src="https://via.placeholder.com/150" alt="Profile Picture" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 16px;">
      <h2 style="margin: 0; font-size: 1.5rem; color: #333;">{{ $_GET['username'] }}</h2>
      <p style="margin: 8px 0; color: #777;">Food Lovers</p>
      <p style="font-size: 0.9rem; color: #555;">Welcome to the profile page! Here you can find information about your account and preferences.</p>
      <a href="#" style="display: inline-block; margin-top: 12px; padding: 8px 16px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 4px;">Hit me</a>
    </div>
  </div>
@endsection