@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif



<form action="{{ isset($fruta) ? route('update') : route('save') }}" method="post">
    {{ csrf_field() }}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($fruta) ? $fruta->nombre : "" }}">
    <br>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ isset($fruta) ? $fruta->descripcion : "" }}">
    <br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio" value="{{ isset($fruta) ? $fruta->precio : 0 }}">
    <br>

    <input type="submit" value="Guardar">
    <input type="hidden" name="id" value="{{ isset($fruta) ? $fruta->id : "" }}">

</form>
