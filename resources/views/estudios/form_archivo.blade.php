<form action="{{ route('estudio.resultadoEstudio', $estudio) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method("POST")
    <div class="input-group mb-3">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="resultadoEstudio" name="resultadoEstudio">
          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Archivo del resultado</label>
        </div>
        <div class="input-group-append">
            <button class="btn btn-secondary">Subir</button>
        </div>
    </div>
</form>