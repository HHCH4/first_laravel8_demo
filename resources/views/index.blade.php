<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table style="border: 1px solid #23cb81">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    </thead>
    @foreach($list as $var)
        <tr>

            <td>{{$var -> id}}</td>
            <td>{{$var -> name}}</td>

        </tr>
    @endforeach
</table>
{{$list->links()}}
</body>
</html>
