@extends('layouts.app')
@section('content')
@include('partials/session-flash-status')
<a href="{{route('estudios.create')}}" class="btn btn-success mt-5 mb-5" >Crear</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de estudio</th>
        <th scope="col">Fecha del estudio</th>
        <th scope="col">Paciente asistio</th>
        <th scope="col">Fecha de entrega</th>
        <th scope="col">Fecha del proximo estudio</th>
        <th scope="col">Fecha de revision</th>
        <th scope="col">Resultado del estudio</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach($estudios as $estudio)
        <tr>
        <th scope="row">{{$estudio->id}}</th>
        <td>{{$estudio->tipoEstudio}}</td>
        <td>{{$estudio->fechaEstudio}}</td>
        <td>{{$estudio->asistioPaciente}}</td>
        <td>{{$estudio->fechaEntrega}}</td>
        <td>{{$estudio->fechaProximo}}</td>
        <td>{{$estudio->fechaRevision}}</td>
        <td>
            @if ($estudio->resultadoEstudio != "")
                <a href="{{ asset('storage/'.$estudio->resultadoEstudio) }}">Resultado</a>
            @endif
        </td>
        <td>
      <a href="{{route('estudios.show', $estudio->id)}}" class="btn btn-primary my-2">Ver</a>
      <a href="{{route('estudios.edit', $estudio->id)}}" class="btn btn-primary my-2">Editar</a>
      <button data-toggle="modal" data-target="#deleteModal" data-id="{{$estudio->id}}" class="btn btn-danger" type="submit">Delete</button>
        </td>
    </tr>
        @endforeach
      
    </tbody>
  </table>

  
   
{{$estudios->links()}}


<<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de eliminar el estudio?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form id="formDelete" action="{{route('estudios.destroy', 0)}}" data-action="{{route('estudios.destroy', 0)}}" method="post">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
  
        </div>
      </div>
    </div>
  </div>
  
  <script>
    $('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    action =$('#formDelete').attr('data-action').slice(0, -1);
    action += id;
  
    $('#formDelete').attr('action', action);
  
    var modal = $(this)
    modal.find('.modal-title').text('Eliminar el registro ' + id)
    
    })
  </script>
  
  
  @endsection