<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Log Weight</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
      <h1>Log Weight:</h1>
      <form>
        <h3>Weight (pounds): </h3>
        <input type="number" max=2000 min=10>
        <button type="submit">Submit</button>
      </form>
  </body>
</html>