<form action="{{ route('responsables.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" id="nombres" required>
    </div>
    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>
    </div>
    <div>
        <button type="submit">Registrar</button>
    </div>
</form>
