<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('meta-ttile', 'Super blog!')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    @yield('css')
</head>
<body>

<div>
   <div class="bg-auth h-screen">
       @yield('content')
   </div>
</div>

@yield('js')
</body>
</html>
