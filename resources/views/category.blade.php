<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01spa</title>
</head>
<body>
    <h2>{{$category? "Список мероприятий категории ".$category->category : "Неверный Id категории"}}</h2>
    @if($category)
        <table>
            <tr>
                <td>id</td>
                <td>Наименование</td>
                <td>место</td>
            </tr>
            @foreach($category->event  as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->place}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
