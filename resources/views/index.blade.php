@extends('master')

@section('pestaña')
<title>Inicio</title>
@endsection

@section('contenido')
<div class="text-center">
    <h2 class="fw-bold text-success">Bienvenido al Parque Las Riberas</h2>
    <p class="mt-3">
        El Parque Las Riberas es uno de los lugares más emblemáticos de Culiacán.
        Ideal para disfrutar de paseos, convivir con la familia, practicar deporte y conectarte con la naturaleza.
    </p>
    <img src="{{ asset('img/parque1.jpg') }}" class="img-fluid rounded shadow mt-4" alt="Parque Las Riberas">
</div>
@endsection