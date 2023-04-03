<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('link')
</head>
<body>

@include('bootstrap_sections/nav')

<div class="container mt-3">
  @yield('table')

</div>
</body>
</html>