<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01spa</title>
</head>
<body>
    <h2>список мероприятий</h2>
    <table>
        <thead>
            <td>id</td>
            <td>Наименование</td>
        </thead>
    @foreach ($events as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->name}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
