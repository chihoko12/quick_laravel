<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>
    <img src="https://wings.msn.to/image/wings.jpg" title="logo">
    <hr />
    @section('main')
    <p>defined contents</p>
    @show
    <hr />
    <p>Copyright(c) 1998-2019, WINGS Project. All Right Reserved.</p>
  </body>

</html>
