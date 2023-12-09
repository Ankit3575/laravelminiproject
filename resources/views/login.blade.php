<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="logincode" method="post">
        @csrf
        Uesr Name/Email/Mobile <input type="text" name="uem" /><br /><br/>
        Password <input type="password" name="pass" /><br/>
        <button>Login</button>
    </form>
</body>

</html>