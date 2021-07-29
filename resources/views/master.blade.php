<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @section('header-script')
        @include('partials.header-script')
    @show

    <title>
        @section('title')
        @show
    </title>
</head>
<body>
<a href="{{ route('provinces.index') }}">Provinces</a>
<div class="container">
    @yield('content')
</div>

@section('footer-script')
    @include('partials.footer-script')
@show

@yield('page-script')
</body>

</html>
