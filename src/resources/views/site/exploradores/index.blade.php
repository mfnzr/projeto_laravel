<h1>Listagem de exploradores</h1>

<a href="{{ route('exploradores.create') }}">Criar novo explorador</a>

<table>
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Inventario</th>
    </thead>
    <tbody>
        @foreach($explorers as $explorer)
            <tr>
                <td>{{ $explorer->nome }}</td>
                <td>{{ $explorer->idade }}</td>
                <td>{{ $explorer->latitude }}</td>
                <td>{{ $explorer->longitude }}</td>
                <td>{{ $explorer->inventario }}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

