<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div class="navbar-nav">
    <ul>
        <li><a href='{{ route('contact.show') }}'>Contact</a></li>
    </ul>
</div>


<div class="container">
    @yield('content')
</div>

@yield('footer')

</body>
</html>