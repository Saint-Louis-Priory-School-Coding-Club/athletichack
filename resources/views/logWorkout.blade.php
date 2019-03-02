@extends('layouts.app')
@section("content")
<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Log Workout</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>Log Workout:</h1>
    <form>
      <h3>Length (minutes): </h3>
      <input type="number" max=500 min=1>
      <h3>Activity: </h3>
      <input type="text">
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
@endsection