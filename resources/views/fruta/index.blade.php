<h1>Listado de frutas</h1>
<a href="{{ route('crear') }}">Crear fruta</a>

@if(session('status'))
    <p style="background: green;">
        {{ session('status') }}
    </p>
@endif
<ul>
    @foreach($frutas as $fruta)
        <li>
            <a href="{{ route('detail',$fruta->id) }}">{{ $fruta->nombre }}</a>
        </li>
    @endforeach
</ul>
