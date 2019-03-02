@extends('layouts.app')
@section("content")
<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Share Your League</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="card">
      <h1>Share Your League: </h1>
      {{$leagueCode}}
      <h3>Send this code to your friends, so they can join the league</h3>
    </div>
  </body>
</html>
@endsection