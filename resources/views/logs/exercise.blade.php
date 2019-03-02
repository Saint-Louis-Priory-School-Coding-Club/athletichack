@extends('layouts.app')
@section("content")
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="card">
                <div class="card-header">
                    <span class="card-header-title">Log Exercise</span>
                </div>

                <div class="card-content">
                    <div class="tabs is-centered">
                        <ul>
                            <li><a href="/log/weight">Weight</a></li>
                            <li class="is-active"><a href="/log/exercise">Exercise</a></li>
                        </ul>
                    </div>

                    <form action="/log/exercise" method="post">
                        @csrf
                        <div class="field">
                            <label class="label" for="">Length</label>
                            <div class="control">
                                <input name="length" class="input" type="number" max=1000 min=1 placeholder="Length in minutes">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="">Activity</label>
                            <div class="control">
                                <input name="type" class="input" type="text" placeholder="Name of activity">
                            </div>
                        </div>
                        <div class="field">
                            <button class="button is-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
