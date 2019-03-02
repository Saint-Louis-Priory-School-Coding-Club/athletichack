@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="card container rounded-corner">

    <div class="title-border">
        <h1 class="title is-1">Join a League </label>
    </div>

    <form action="/leagues/join" method="post">
        @csrf
        <div class="field is-horizontal">
            <div class="field-label">
                <label class="label">Join Code: </label>
            </div>
            <div class="control field-body">
                <input name="code" class="input" type="text" placeholder="Code Input">
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
