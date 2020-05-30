@extends('layouts.app')
@section('content')
    @include('partials/session-flash-status-registro')
    @include('partials.validation-errors')
    <form action="{{ route("estudios.store") }}" method="POST">
        @include('estudios.form')
    </form>
    <br/>
    @include('estudios.form_archivo')
@endsection