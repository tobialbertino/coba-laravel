@extends('layouts.main')

@section('container')
  <body>
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="/img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
  </body>
@endsection
