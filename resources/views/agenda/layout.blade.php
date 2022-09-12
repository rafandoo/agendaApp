<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>
<body>
    @component('agenda.nav')
    @endcomponent    

    @yield('content')

    @yield('form')
    
</body>
</html>