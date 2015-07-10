<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Welcome to TODOParrot</title>
    <!-- CSS
                ================================================== -->
        <link rel="stylesheets" href="{{asset('assets/css/app.css')}}">
        <link rel="stylesheet"
              href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

  </head>
  <body>
    @yield('content')

    <!-- Javascripts
            ================================================== -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

  </body>
</html>
