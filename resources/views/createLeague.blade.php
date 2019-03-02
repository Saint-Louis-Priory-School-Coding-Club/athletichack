<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Create a League</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>Create a league</h1>
    <form>
      <h3>Name: </h3>
      <input type="text">
      <h3>End Date: </h3>
      <input type="date">
      <button type="submit">Create</button>
    </form>
  </body>
</html>