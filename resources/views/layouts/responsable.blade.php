<form action="{{ route('responsables.store') }}" method="POST">
  @csrf
  <div>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" required>
  </div>
  
  <div>
    <label for="establecimiento_id">Establecimiento:</label>
    <select name="establecimiento_id" id="establecimiento_id" required>
      @foreach($establecimientos as $establecimiento)
      <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit">Guardar</button>
</form>
