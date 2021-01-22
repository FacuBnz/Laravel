<h1>{{$titulo}}</h1>

<h3>{{$nombre ?? "No hay una pelicula asignada"}}</h3>
<p>(accion index del controlador PeliculaController)</p>


<a href="{{ route('detalle') }}">Ir al detalle</a>

<a href="{{route('redirigir')}}">Ir al inicio</a>
