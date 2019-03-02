<!doctype HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>{{$leagueName}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Last Week Weight Loss (%)</th>
        <th>Last Week Exercise Count (Min)</th>
      </tr>
    </table>
  </body>
</html>