<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <title>{{config('app.name')}}</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    @yield('content')

   <script src="{{mix('js/app.js')}}"></script>

  </body>
</html>
