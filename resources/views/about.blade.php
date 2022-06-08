@extends('layouts.master')

@section('title', 'About')

@section('main')
    
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $gambar }}" class="img-thumbnail" width="500">
@endsection
