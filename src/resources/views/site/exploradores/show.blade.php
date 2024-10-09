<h1>Detalhes do explorador {{ $explorer->id }}</h1>

<ul>
    <li>Nome: {{$explorer->nome}}</li>
    <li>Idade: {{$explorer->idade}}</li>
    <li>Latitude: {{$explorer->latitude}}</li>
    <li>Longitude: {{$explorer->longitude}}</li>
    <li>Inventário: {{$explorer->inventario}}</li>
</ul>

<a href="{{ route('itens.edit') }}">Adicionar novo item ao inventario</a>


<form action="{{ route('exploradores.destroy', $explorer->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
