@extends('layouts.app')
@section("content")
<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Log Weight</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="card">
      <h1 class="title is-1">Log Weight:</h1>
      <form>
        <h3 class="subtitle is-3">Weight (pounds): </h3>
        <input class="input" type="number" max=2000 min=10 placeholder="Number">
        <button class="button" type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
@endsection