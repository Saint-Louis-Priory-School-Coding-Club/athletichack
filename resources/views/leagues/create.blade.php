@extends('layouts.app')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="card container rounded-corner">

    <div class="title-border">
        <h1 class="title is-1">Create a League </label>
    </div>

    <form action="/leagues/create" method="post">

        <div class="field is-horizontal">
            <div class="field-label">
                <label class="label">Name: </label>
            </div>
            <div class="control field-body">
                <input class="input" type="text" placeholder="Text Input">
            </div>
            <div class="field-label">
                <!--spacing-->
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <label class="label">End Date: </label>
            </div>
            <div class="control field-body">
                <input class="input" type="date" placeholder="Text Input">
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

@endsection
