@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h4 class="alert-heading">Registro exitoso</h4>
        <p>{{session('status')}}</p>
    </div>
@endif