<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add sub category</title>
</head>

<body>
    <h1>Add sub category page</h1>
    <form action="subcatcode" method="get">
        @csrf
        Select Category
        <select name="catid" id="">
            @foreach($data as $x)
            <option value="{{'$x->id'}}">{{$x->catname}}</option>
       @endforeach
        </select><br><br>
        Enter Sub-Category Name <input type="text" name="subcat" id=""><br><br>
        <button>submit</button>
    </form>
</body>

</html>