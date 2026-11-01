@extends('layouts.app')

@section('content')
    <a href="{{ route('olympics.index') }}" class="btn btn-secondary mb-3">← Назад</a>
    <h1>{{ $olympic->title }}</h1>

    @if($olympic->image)
        <img src="{{ asset('storage/' . $olympic->image) }}" class="img-fluid mb-3" style="max-height: 400px;">
    @endif

    <p><strong>Год:</strong> {{ $olympic->year }}</p>
    <p><strong>Город:</strong> {{ $olympic->city }}</p>
    <p><strong>Страна:</strong> {{ $olympic->country }}</p>
    <p><strong>Описание:</strong> {{ $olympic->description }}</p>

    <a href="{{ route('olympics.edit', $olympic) }}" class="btn btn-warning">Редактировать</a>
@endsection