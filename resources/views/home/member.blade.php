@extends('layouts.index')

@section('container')
    <h1 class="text-center fw-bold">Halaman Member</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" style="width: 200px">
@endsection
