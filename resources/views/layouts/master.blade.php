<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>  {{-- That's a typical blade template engine expression --}}

  {{-- Links --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
</head>
<body>
  @include('includes.header')
  <div class="container">

    @yield('content')

  </div>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.4.0.min.js" integrity="sha256-nxdiQ4FdTm28eUNNQIJz5JodTMCF5/l32g5LwfUwZUo=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="{{ URL::to('src/js/app.js') }}"></script>
</body>
</html>
