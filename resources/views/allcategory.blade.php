<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Category Page</title>
</head>
<body>
    <h1>
        allcategory page
    </h1>
    <form action="allcategory" method="post">
        @csrf
        <table border="1">
            <tr>
                <th>id</th>
                <th>Category name</th>
            </tr>
            @foreach($data as $x)
            <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->catname}}</td>
            </tr>
            @endforeach
        </table>
    </form>
</body>
</html>