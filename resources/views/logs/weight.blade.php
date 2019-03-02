@extends('layouts.app')
@section("content")
    <!doctype HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <title>Log Weight</title>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div class="card container rounded-corner">

                <h1 class="title title-border">Log Weight</h1>

                <div class="tabs is-centered log-menu" style="">
                    <ul>
                        <li class="is-active">Weight</li>
                        <li><a href="/log/exercise">Exercise</a></li>
                    </ul>
                </div>

                <form>

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">Weight (pounds): </label>
                        </div>
                        <div class="control field-body">
                            <input class="input" type="number" max=2000 min=10 placeholder="Number Input">
                        </div>
                        <div class="field-label">
                            <!--spacing-->
                        </div>
                    </div>

                    <div class="title-border">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </body>
    </html>
@endsection
