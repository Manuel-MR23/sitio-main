@extends('master')

@section('pestaña')
<title>Características</title>
@endsection

@section('hero')
<section class="hero">
    <h1 class="display-3 fw-bold">Características del Parque</h1>
</section>
@endsection

@section('contenido')
<h2 class="fw-bold text-success mb-4">Características del Parque</h2>
<ul class="list-group">
    <li class="list-group-item">🌿 Amplias áreas verdes con árboles y jardines</li>
    <li class="list-group-item">🚴‍♂️ Ciclovías y caminos para correr</li>
    <li class="list-group-item">🏞️ Áreas recreativas para niños y adultos</li>
    <li class="list-group-item">🪵 Zonas para picnic y descanso</li>
    <li class="list-group-item">🐕 Espacios pet-friendly</li>
</ul>


<h3 class="mt-4">Galería</h3>
<div class="row">
 
    <div class="col-md-4 mb-3">
        <img src="{{ asset('img/pq1.jpeg') }}" alt="Parque - vista 1" class="img-fluid rounded">
    </div>

 
    <div class="col-md-4 mb-3">
        <img src="{{ asset('img/pq2.jpeg') }}" alt="Parque - vista 2" class="img-fluid rounded">
    </div>

   
    <div class="col-md-4 mb-3">
        <a href="{{ asset('img/pq3.jpeg') }}" target="_blank" rel="noopener">
            <img src="{{ asset('img/pq3.jpeg') }}" alt="Zona de picnic" class="img-fluid rounded">
        </a>
    </div>
</div>


@endsection
