@extends('master')

@section('pestaña')
<title>Ubicación</title>
@endsection

@section('contenido')
<h2 class="fw-bold text-success mb-4">Ubicación del Parque</h2>
<p>El Parque Las Riberas se encuentra en el corazón de Culiacán, Sinaloa, a lo largo del Río Tamazula.</p>

<div class="ratio ratio-16x9 mt-4 shadow">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.288230676303!2d-107.40017192448112!3d24.805061147009917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd56ebf89b6e3%3A0x7c05f431e9f79b7a!2sParque%20Las%20Riberas!5e0!3m2!1ses-419!2smx!4v1712013456789"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
@endsection
