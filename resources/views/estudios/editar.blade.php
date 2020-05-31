@extends('layouts.app')
@section('content')
    @include('partials/session-flash-status')
    @include('partials.validation-errors')
    <form action="{{ route("estudios.update",$estudio) }}" method="POST">
    @method("PUT")
        @include('estudios.form')
    </form>
    <br/>
    @include('estudios.form_archivo')
@endsection