<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/sanitize.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/common.css')}}">
        @yield('css')
        @yield('title')
    </head>
    <body>
        <header class="header">
            <div class="header_logo">
                Contact Form            
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        
    </body>
</html>