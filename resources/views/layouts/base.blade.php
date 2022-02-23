<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script type="text/javascript">
      // Notice how this gets configured before we load Font Awesome
      window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
    <title>@yield('documentTitle')</title>
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>
</html>