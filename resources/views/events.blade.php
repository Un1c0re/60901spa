<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список товаров</title>
</head>
<body>
<h2>Список товаров</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Организатор</th>
        <th>Название</th>
        <th>место</th>
        <th>описание</th>
        <th>время</th>
        <th>категория</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->owner_id }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->place }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->started_at }}</td>
            <td>{{ $event->category->name }}</td>
            <td>
                <a href="{{ url('event/'.$event->id) }}">Подробнее</a>
                <a href="{{ url('event/edit/'.$event->id) }}">Редактировать</a>
                <a href="{{ url('event/destroy/'.$event->id) }}">Удалить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
