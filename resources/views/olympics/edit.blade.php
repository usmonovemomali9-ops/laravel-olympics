@extends('layouts.app')

@section('content')
    <h2>Редактировать олимпиаду</h2>
    @include('olympics._form', ['olympic' => $olympic])
@endsection