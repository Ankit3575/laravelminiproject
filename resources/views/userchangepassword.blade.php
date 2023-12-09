<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uchangepassword" method="post">
        @csrf
        old password <input type="password" name="opass" id="">
        new password <input type="password" name="cpass" id="">
        Confirm password <input type="password" name="cpass" id="">
        <button>change password</button>
    </form>
</body>
</html>