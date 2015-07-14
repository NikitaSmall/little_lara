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
    <div class="content">
      @include('partials.nav')
      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          @yield('content')
        </div>
      </div>

    </div>


    <!-- Javascripts
            ================================================== -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

  </body>
</html>
