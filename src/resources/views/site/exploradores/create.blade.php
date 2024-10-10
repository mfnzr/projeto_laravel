<h1>Novo Explorador</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('exploradores.store') }}" method="POST">
    @csrf()
    <p>Nome</p> <input type="text" placeholder="Nome" name="nome" value="{{ old('nome') }}">
        <p>Idade</p><input type="number" placeholder="Idade" name="idade" value="{{ old('idade') }}">
        <p>Latitude</p><input type="number" placeholder="Latitude"name="latitude" value="{{ old('latitude') }}">
        <p>Longitude</p><input type="number" placeholder="Longitude" name="longitude"value="{{ old('longitude') }}">
        <br>
        <br>
        <button type="submit">Enviar</button>
</form>
