<h1>Explorador {{ $explorer->id }}</h1>



<form action="{{ route('exploradores.update', $explorer->id) }}" method="POST">
    @csrf()
    @method('PUT')
        <p>Nome</p> <input type="text" placeholder="Nome" name="nome" value="{{$explorer->nome}}">
        <p>Idade</p><input type="number" placeholder="Idade" name="idade" value="{{$explorer->idade}}">
        <p>Latitude</p><input type="number" placeholder="Latitude" name="latitude" value="{{$explorer->latitude}}">
        <p>Longitude</p><input type="number" placeholder="Longitude" name="longitude" value="{{$explorer->longitude}}">
        <p>Inventário</p><textarea name="inventario" rows="5" placeholder="Inventário" name="inventario">{{$explorer->inventario}}"</textarea>
        <br>
        <br>
        <button type="submit">Enviar</button>

</form>
