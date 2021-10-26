<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Comics</title>
</head>
<body>
    @include('partials.header', ['header_links' => config('nav_header')])
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('script-adder')
</body>
</html>