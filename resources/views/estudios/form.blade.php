@csrf
    <div class="form-group">
        <label for="tipoEstudio">Tipo de estudio</label>
    <input type="text" class="form-control" name="tipoEstudio" id="tipoEstudio" value="{{ old('tipoEstudio', $estudio->tipoEstudio) }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Fecha de estudio</label>
        <input type="date" class="form-control" name="fechaEstudio" id="fechaEstudio" value="{{ old('fechaEstudio', $estudio->fechaEstudio) }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1" class="mr-4">Asistió el paciente:</label>
        {{-- <div class="form-check"> --}}
            <input class="form-check-input mr-5" type="radio" name="asistioPaciente" id="asistioPaciente" value="si">
            <label class="form-check-label mr-5" for="asistioPaciente1">
              Sí
            </label>
          {{-- </div> --}}
          {{-- <div class="form-check"> --}}
            <input class="form-check-input" type="radio" name="asistioPaciente" id="asistioPaciente" value="no">
            <label class="form-check-label" for="asistioPaciente">
              No
            </label>
          {{-- </div> --}}
      </div>
    <div class="form-group">
        <label for="url_clean">Fecha de entrega</label>
        <input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" value="{{ old('fechaEntrega', $estudio->fechaEntrega) }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Fecha del próximo estudio</label>
        <input type="date" class="form-control" name="fechaProximo" id="fechaProximo" value="{{ old('fechaProximo', $estudio->fechaProximo) }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Fecha de revisión</label>
        <input type="date" class="form-control" name="fechaRevisión" id="fechaRevisión" value="{{ old('fechaRevisión', $estudio->fechaRevisión) }}">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Guardar">