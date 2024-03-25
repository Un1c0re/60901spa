<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление мероприятия</title>
    <style>
        .is-invalid { color: red; }
    </style>
</head>
<body>
<h2>Добавление мероприятия</h2>
<form method="post" action="{{ url('event') }}">
    @csrf
    <label>Организатор:</label>
    <label>
        <input type="text" name="owner_id" value="{{ old('owner_id') }}">
    </label>
    @error('owner_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>Название:</label>
    <label>
        <input type="text" name="name" value="{{ old('name') }}">
    </label>
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>место:</label>
    <label>
        <input type="text" name="place" value="{{ old('place') }}">
    </label>
    @error('place')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>описание:</label>
    <label>
        <input type="text" name="description" value="{{ old('description') }}">
    </label>
    @error('description')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>время начала:</label>
    <label>
        <input type="date" name="started_at" value="{{ old('started_at') }}">
    </label>
    @error('started_at')
    <div class="is-invalid">{{ $message }}</div>
    @enderror

    <br>

    <label>Категория:</label>
    <label>
        <select name="category_id" value="{{ old('category_id') }}">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                        @if(old('category_id') == $category->id) selected @endif>
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
