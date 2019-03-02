@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-half is-offset-3">
        <h1 class="title has-text-centered">Your Leagues</h1>
        <hr>
        @foreach (Auth::user()->groups as $group)
            <div class="card">
                <div class="card-header">
                    <a href="/leagues/1/view" class="card-header-title">{{$group->name}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
