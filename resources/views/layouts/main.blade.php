<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <section class="section-banner">
        <div class="banner">
            <h1 class="text-banner"> Giant book supplier</h1>
        </div>
    </section>

        @include('partials.navbar')


        @yield('container')


        <footer class="footer">
            <p> &#169; Happy book store</p>
        </footer>
    </body>
    </html>
