<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body>
    <h1>Contact US Page</h1>
    <form action="contactcode" method="post">
        @csrf
        Name <input type="text" name="name"><br><br>
        Mobile <input type="number" name="num" id=""><br><br>
        Subject <input type="text" name="sub" id=""><br><br>
        Message <textarea name="msg" id="" cols="30" rows="10"></textarea><br><br>
        <button>save</button>
    </form>
</body>
</html>