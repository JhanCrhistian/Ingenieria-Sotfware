@if ($responsable)
    <h1>{{ $responsable->nombre }}</h1>
    <p>Ubicación: {{ $responsable->ubicacion }}</p>
    <p>Tipo: {{ $responsable->tipo }}</p>
    <p>Servicios: {{ $responsable->servicios }}</p>
    <p>Responsable: {{ $responsable->responsable->nombre }}</p>
@else
    <p>No se encontró el responsable.</p>
@endif
