<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/index.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>{{ Auth::user()->name }}</title>
</head>

<body>       
    @yield('usercontent')
</body>

</html>