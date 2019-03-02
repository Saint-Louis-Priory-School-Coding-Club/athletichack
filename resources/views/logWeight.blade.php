@extends('layouts.app')
@section("content")

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="card container rounded-corner">

  <div class="title-border">
    <label class="title is-1">Log Weight: </label>
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
@endsection