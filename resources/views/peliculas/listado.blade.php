{{-- Esto es un comentario en blade --}}

@include('includes.header') //Para incluir otras vistas

{{-- forma tradicional de escribir codigo en las vistas --}}
<h1><?=$titulo?></h1>

<ul>
    <?php foreach ($peliculas as $value):?>
        <li><?=$value?></li>
    <?php endforeach;?>
</ul>

{{-- Forma de escribir codigo en blade --}}

<h1>{{ $titulo }}</h1>

{{-- bucles --}}
<ul>
    @foreach($peliculas as $value)
        <li>{{ $value }}</li>
    @endforeach
</ul>

{{-- Mostrar si existe una variable --}}
{{ $director ?? "No exist la variable" }}



{{-- condicionales --}}

@if(isset($titulo))
    <p>El titulo existe!!</p>
@else
    <p>El titulo no existe</p>
@endif

@include('includes.footer')//Para incluir otras vistas
