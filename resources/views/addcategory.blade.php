<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin addcategory</title>
</head>
<body>
    <h1>
        add Category Page
    </h1>
    <form action="categorycode" method="post">
        @csrf
        Enter Category Name <input type="text" name="catname" id=""/>
        <button>save</button>
    </form>
    
</body>
</html>