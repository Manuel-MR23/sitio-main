@extends('master')

@section('pestaña')
<title>Opinión</title>
@endsection

@section('contenido')
<h2 class="fw-bold text-success mb-4">Déjanos tu opinión</h2>
<p>Queremos saber qué te parece el Parque Las Riberas. ¡Tu opinión nos ayuda a mejorar!</p>

<form action="{{ url('/guardarOpinion') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu nombre completo" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
    </div>

    <div class="mb-3">
        <label for="opinion" class="form-label">Tu opinión:</label>
        <select id="opinion" name="opinion" class="form-select" required>
            <option value="" selected disabled>Selecciona una opción</option>
            <option value="1">Buena</option>
            <option value="2">Media</option>
            <option value="3">Mala</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection
