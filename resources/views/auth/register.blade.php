@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="columns">
    <div class="column is-6 is-offset-3">
        <form class="form" action="/register" method="post">
            @csrf
            <h1 class="title">Register</h1>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input name="name" class="input" type="text" placeholder="e.g John Smith">
                </div>
            </div>

            <div class="field">
                <label class="label">Email Address</label>
                <div class="control">
                    <input name="email" class="input" type="email" placeholder="e.g. your@email.com">
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input name="password" class="input" type="password" placeholder="e.g. password123">
                </div>
            </div>

            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="control">
                    <input name="password_confirmation" class="input" type="password" placeholder="e.g. password123">
                </div>
            </div>
            <div class="control">
                <button class="button is-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
