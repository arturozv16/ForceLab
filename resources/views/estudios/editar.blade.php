@extends('layouts.app')
@section('content')
    @include('partials/session-flash-status')
    @include('partials.validation-errors')
    <form action="{{ route("estudios.update",$estudio) }}" method="POST">
    @method("PUT")
        @include('estudios.form')
    </form>
    <br/>
    <form action="{{ route('estudio.resultadoEstudio',$estudio) }}" method="POST" enctype="multipart/form-data">
        @method("POST")
        @include('estudios.form_archivo')
    </form>
@endsection