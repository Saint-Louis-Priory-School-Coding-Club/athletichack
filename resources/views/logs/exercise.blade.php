@extends('layouts.app')
@section("content")
    <div class="card container rounded-corner">

        <div class="title-border">
            <label class="title is-1">Log Workout: </label>
        </div>


        <form>

            <div class="field is-horizontal">
                <div class="field-label">
                    <label class="label">Length (minutes): </label>
                </div>
                <div class="control field-body">
                    <input class="input" type="number" max=1000 min=1 placeholder="Number Input">
                </div>
                <div class="field-label">
                    <!--spacing-->
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <label class="label">Activity): </label>
                </div>
                <div class="control field-body">
                    <input class="input" type="text" placeholder="Text Input">
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
