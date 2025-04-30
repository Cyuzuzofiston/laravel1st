<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="navbar" style="display: flex; gap:100px; justify-content: center">
        <h1>Task manager</h1>
        <div style="display: flex; gap: 20px">
            <h2><a href="{{ url('/login') }}">Login</a></h2>
            @guest
            <h2><a href="{{ url('/register') }}">Register</a></h2>
            @endguest
        </div>
    </div>

    <div>
        @auth
        <h1>Hello {{ Auth::user()->name }}</h1>
        <form action="/logout" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
        <div>
            <h1>Create Task</h1>
            @if(session('success'))
                <div style="color: green; margin: 10px 0;">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div style="color: red; margin: 10px 0;">
                    {{ session('error') }}
                </div>
            @endif
            <form action="/task" method="post">
                @csrf
                <input type="text" placeholder="Day's attendance" name="title" required>
                <input type="text" placeholder="Name" name="sname" required>
                <select name="status" id="status" required>
                    <option value="">Select Status</option>
                    <option value="present">Present</option>
                    <option value="not">Not</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>

        @foreach($task as $item)
         <div style="gap: 20px; border: 2px solid blue">
            <h1>{{$item->title}}</h1>
            <h2>{{$item->sname}}</h2>
            <h2>{{$item->status}}</h2>
         </div>
        @endforeach

        @endauth
    </div>
</body>
</html>