<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>Automobilių dalys - @yield('title')</title>
</head>
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/app.css">

@show
<body>
@include('layouts.navigation')


<div class="container">
    @yield('content')
</div>
</body>
</html>
