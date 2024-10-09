<h1>Adicione item no inventario</h1>


<form action="{{ route('exploradores.update', $explorer->id) }}" method="POST">
    @csrf()
    @method('PUT')
        <p>Inventário</p><textarea rows="5" placeholder="Inventário" name="inventario">{{$explorer->inventario}}"</textarea>
        <br>
        <br>
        <button type="submit">Enviar</button>

</form>
