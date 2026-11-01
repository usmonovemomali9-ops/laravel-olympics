@extends('layouts.app')

@section('content')
    <h2 class="section-title mb-4">Летние Олимпийские игры</h2>

    <div class="row g-4">
        @foreach($olympics as $olympic)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100">
                    <div class="position-relative">
                        @if($olympic->image)
                            <img src="{{ asset('storage/' . $olympic->image) }}" class="card-img-top" alt="{{ $olympic->title }}">
                        @else
                            <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;">
                                <span class="text-white">Нет фото</span>
                            </div>
                        @endif
                        <span class="card-type">Игра</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $olympic->title }}</h5>
                        <p class="card-text">{{ Str::limit($olympic->description, 100) }}</p>
                        <a href="{{ route('olympics.show', $olympic) }}" class="btn btn-sm btn-info">Подробнее</a>
                        <a href="{{ route('olympics.edit', $olympic) }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <form action="{{ route('olympics.destroy', $olympic) }}" method="POST" class="d-inline" onsubmit="return confirm('Удалить?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection