@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-6 is-offset-3">
            <form class="form" action="/login" method="post">
                @csrf
                <h1 class="title">Login</h1>
                <hr>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input name="email" class="input" type="email" placeholder="e.g your@email.com">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input name="password" class="input" type="password" placeholder="e.g. password123">
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
