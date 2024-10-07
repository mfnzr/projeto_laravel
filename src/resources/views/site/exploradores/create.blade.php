<h1>Novo Explorador</h1>



<form action="{{ route('exploradores.store') }}" method="POST">
    @csrf()
        <input type="text" placeholder="Nome" placeholder="Nome" name="nome" required>
        <input type="number" placeholder="Idade" placeholder="Idade" name="idade" required>
        <input type="number" placeholder="Latitude" placeholder="Latitude" name="latitude" required>
        <input type="number" placeholder="Longitude" placeholder="Longitude" name="longitude" required>
        <input type="text" placeholder="Inventário" placeholder="Inventário" name="inventario" required>
        <button type="submit">Enviar</button>
</form>
