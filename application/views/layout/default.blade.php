<!doctype html>
<html>
<head>
    <!-- my head section goes here -->
    <!-- my css and js goes here -->
</head>
<body>
<div class="container">
    <header> @include('layout/header') </header>
    <div class="sidebar"> @include('layout/sidebar') </div>
    <div class="contents"> @yield('content') </div>
    <footer> @include('layout/footer') </footer>
</div>
</body>
</html>