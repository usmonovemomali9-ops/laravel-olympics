@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $olympic ? route('olympics.update', $olympic) : route('olympics.store') }}"
      method="POST" enctype="multipart/form-data">
    @csrf
    @if($olympic)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label class="form-label">Название</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $olympic->title ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Год</label>
        <input type="number" name="year" class="form-control" value="{{ old('year', $olympic->year ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Город</label>
        <input type="text" name="city" class="form-control" value="{{ old('city', $olympic->city ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Страна</label>
        <input type="text" name="country" class="form-control" value="{{ old('country', $olympic->country ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Описание</label>
        <textarea name="description" class="form-control" rows="3" required>{{ old('description', $olympic->description ?? '') }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Картинка</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="{{ route('olympics.index') }}" class="btn btn-secondary">Отмена</a>
</form>