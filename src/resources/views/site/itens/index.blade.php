<h1>Listagem de itens do explorador {{ $explorador->id }}</h1>

<table>
    <thead>
        <th>Nome</th>
        <th>Valor</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </thead>
    <tbody>
        @foreach($explorer as $item)
            <tr>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->valor }}</td>
                <td>{{ $item->latitude }}</td>
                <td>{{ $item->longitude }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

