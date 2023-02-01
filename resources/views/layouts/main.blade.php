<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>The latest Formula 1 and motorsport news</title>
    <link rel="icon" type="image/png" sizes="128x128" href="storage/img/vaporetto.svg" />
    @vite(['resources/js/app.js'])
    <script src="{{ asset('js.app.js') }}"></script>
</head>

<body>
    <div id="app">

        <header-component></header-component>
        @yield('content')
        <footer-component></footer-component>

    </div>
</body>

</html>
