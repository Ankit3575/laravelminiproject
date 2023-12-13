<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body>
    <h1>Admin login Page</h1>
    <form action="admincode" method="get">
        @csrf
        Enter Email <input type="text" name="email" id=""><br><br>
        Enter Password <input type="password" name="pass" id=""><br><br>
        <button>login</button>
    </form>
</body>
</html>