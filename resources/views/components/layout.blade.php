<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>My blog</title>
</head>

<body>
    @guest
        <a href="/login">Login</a>
    @endguest
    @auth
        <a href="/logout">Logout</a>
    @endauth

    {{ $slot }}
</body>

</html>
