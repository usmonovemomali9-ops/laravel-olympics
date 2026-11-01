@extends('layouts.app')

@section('content')
    <h2>Добавить олимпиаду</h2>
    @include('olympics._form', ['olympic' => null])
@endsection