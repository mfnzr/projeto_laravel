<h1>Adicione um novo item no inventário</h1>


<form action="{{ route('itens.edit', $explorer->id) }}" method="get">
    @csrf()
    @method('GET')
        <p>Nome</p> <input type="text" placeholder="Ex: corda" name="nome" value="">
        <p>Valor</p><input type="number" placeholder="Ex: 2,00" name="valor" value="">
        <p>Latitude</p><input type="number" placeholder="Ex: 123456" name="latitude" value="">
        <p>Longitude</p><input type="number" placeholder="Ex: 654321" name="longitude" value="">
        <br>
        <br>
        <button type="submit">Enviar novo item</button>
</form>
