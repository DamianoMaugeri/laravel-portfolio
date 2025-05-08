<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center p-5">
            @yield('title')
        </h1>
        @yield('content')
    </div>
    
</body>
</html>