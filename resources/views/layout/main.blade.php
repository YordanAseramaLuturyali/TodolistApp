<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="full-container max-w-sm mx-auto overflow-x-hidden">
        @include('template.navbarsearch')

        <div class="container bg-[#ECF2FF] w-full h-[90vh] py-[10%]">
            @yield('container')
        </div>
    </div>

    <script src="/js/scripts.js"></script>
</body>

</html>
