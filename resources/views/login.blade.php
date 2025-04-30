<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="justify-content: center; background: skyblue">
        <h1>Login</h1>
        <form action="/login" method="post" >
            @csrf
            Username: <input type="text" placeholder="Your Username" name="name"><br>
            Password: <input type="password" placeholder="Your Password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>