@extends('layouts.app')
@section("content")
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="card">

                <div class="card-header">
                    <span class="card-header-title">Log Weight</span>
                </div>

                <div class="card-content">
                    <div class="tabs is-centered">
                        <ul>
                            <li class="is-active"><a href="/logs/weight">Weight</a></li>
                            <li><a href="/log/exercise">Exercise</a></li>
                        </ul>
                    </div>

                    <form action="/log/weight" method="post">
                        @csrf
                        <div class="field">
                            <label class="label" for="">Weight</label>
                            <div class="control">
                                <input name="weight" class="input" type="number" placeholder="Weight in pounds">
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
