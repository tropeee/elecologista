<!DOCTYPE html>
<html class="side-header-hamburguer-sidebar side-header-above side-header-hamburguer-sidebar-narrow-bar side-header-hide">
<head>
    @include('partials.header')
</head>
<body>
@include('partials.sidebar')
@include('partials.navbar')
<div class="body">
    @yield('content')
</div>
@include('partials.footer')
@include('partials.includeJs')
</body>
</html>