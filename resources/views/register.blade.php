<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="justify-content: center; background: skyblue">
        <h1>Register</h1>
        <form action="/register" method="post" >
            @csrf
            Username: <input type="text" placeholder="Your Username" name='name'><br>
            E-mail: <input type="email" placeholder="Your E-mail" name='email'><br>
            Password: <input type="password" placeholder="Your Password" name='password'><br>
            <button>Save</button>
        </form>
    </div>
</body>
</html>