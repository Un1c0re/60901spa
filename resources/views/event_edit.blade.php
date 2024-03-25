<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование мероприятия</title>
    <style>
        .is-invalid { color: red; }
    </style>
</head>
<body>
<h2>Редактирование мероприятия</h2>
<form method="post" action="{{ url('event/update', $event->id) }}">
    @csrf
    @method('POST')

    <label>Название:</label>
    <label>
        <input type="text" name="name" value="{{ old('name') ? old('name') : $event->name }}">
    </label>
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>Цена:</label>
    <label>
        <input type="text" name="place" value="{{ old('place') ? old('place') : $event->place }}">
    </label>
    @error('place')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>описание:</label>
    <label>
        <input type="text" name="description" value="{{ old('description') ? old('description'): $event->description}}">
    </label>
    @error('description')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>время начала:</label>
    <label>
        <input type="date" name="started_at" value="{{ old('started_at') ? old('started_at'): $event->started_at}}">
    </label>
    @error('started_at')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>Категория:</label>
    <label>
        <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                    {{ (old('category_id') ? old('category_id') : $event->category_id) == $category->id ? 'selected' : '' }}>
            {{ $category->category }}
            </option>
            @endforeach
        </select>
    </label>
    @error('category_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <input type="submit">
</form>
</body>
</html>
