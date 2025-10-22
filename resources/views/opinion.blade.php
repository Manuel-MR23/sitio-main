@extends('master')

@section('pestaña')
<title>Opinión</title>
@endsection

@section('contenido')
<h2 class="fw-bold text-success mb-4">Déjanos tu opinión</h2>
<p>Queremos saber qué te parece el Parque Las Riberas. ¡Tu opinión nos ayuda a mejorar!</p>

<form action="#" method="post" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu nombre completo" required>
    </div>

    <div class="mb-3">
        <label for="comentario" class="form-label">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="4" class="form-control" placeholder="Escribe tu opinión..." required></textarea>
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection
