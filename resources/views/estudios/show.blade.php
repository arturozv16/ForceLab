@extends('layouts.app')
@section('content')
    
@csrf
        <div class="form-group">
            <label for="tipoEstudio">Tipo de estudio</label>
        <input disabled type="text" class="form-control" name="tipoEstudio" id="tipoEstudio" value="{{ old('tipoEstudio', $estudio->tipoEstudio) }}">
        </div>
        <div class="form-group">
            <label for="url_clean">Fecha de estudio</label>
            <input disabled type="date" class="form-control" name="fechaEstudio" id="fechaEstudio" value="{{ old('fechaEstudio', $estudio->fechaEstudio) }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" class="mr-4">Asistió el paciente:</label>

                <input disabled class="form-check-input mr-5" type="radio" name="asistioPaciente" id="asistioPaciente" value="si" 
                @if ($estudio->asistioPaciente == "si")
                    checked
                @endif
                >
                <label class="form-check-label mr-5" for="asistioPaciente1">
                  Sí
                </label>
            
                <input disabled class="form-check-input" type="radio" name="asistioPaciente" id="asistioPaciente" value="no"
                @if ($estudio->asistioPaciente == "no")
                    checked
                @endif
                >
                <label class="form-check-label" for="asistioPaciente">
                  No
                </label>
     
          </div>
        <div class="form-group">
            <label for="url_clean">Fecha de entrega</label>
            <input disabled type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" value="{{ old('fechaEntrega', $estudio->fechaEntrega) }}">
        </div>
        <div class="form-group">
            <label for="url_clean">Fecha del próximo estudio</label>
            <input disabled type="date" class="form-control" name="fechaProximo" id="fechaProximo" value="{{ old('fechaProximo', $estudio->fechaProximo) }}">
        </div>
        <div class="form-group">
            <label for="url_clean">Fecha de revisión</label>
            <input disabled type="date" class="form-control" name="fechaRevision" id="fechaRevision" value="{{ old('fechaRevision', $estudio->fechaRevision) }}">
        </div>



    <br/>
    <a href="{{ asset('storage/'.$estudio->resultadoEstudio) }}">Resultado del estudio</a>
@endsection