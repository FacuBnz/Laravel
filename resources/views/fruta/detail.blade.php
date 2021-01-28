<h1>Detalles de la fruta {{ $fruta->nombre }}</h1>

<p>{{ $fruta->descripcion }}</p>

<a href="{{ route('eliminar', $fruta->id) }}">Eliminar</a>
<a href="{{ route('editar', $fruta->id) }}">editar</a>
