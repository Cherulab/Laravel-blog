<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if( auth()->check() )
    <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/logout">Log Out</a>
    </li>
@else
   <h1>Error</h1>
   <button><a href="/">Return Login</a></button>
@endif
</body>
</html>