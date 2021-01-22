<h1>Formulario en laravel</h1>

<form action="{{route('recibir')}}" method="post">
    {{ csrf_field() }}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <input type="submit" value="Enviar">
</form>
