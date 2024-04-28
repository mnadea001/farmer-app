<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La ferme Fictive</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- instance de vue -->
    <div id="app" class="mt-10 container mx-auto">
        <!-- <header/> -->
    @yield('content')
    </div>
</body>
</html>