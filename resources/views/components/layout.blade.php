<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
</head>
<body>
    @guest
        <p>Nincs bejelentkezve.</p>
    @endguest
    @auth
        <p>Hello</p>
    @endauth

    {{ $slot }}

</body>
</html>
