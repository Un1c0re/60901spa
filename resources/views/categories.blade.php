<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01spa</title>
</head>
<body>
    <h2>Список категорий</h2>
    <table>
        <thead>
        <td>id</td>
        <td>Наименование</td>
        </thead>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category}}</td>
            </tr>
        @endforeach
    </table>
    {{$categories->links()}}
</body>
</html>
