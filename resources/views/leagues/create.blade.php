@extends('layouts.app')
@section('content')
    <h1 class="title">Create a league</h1>
    <hr>
        <form action="/leagues/create" method="post">
            @csrf
            <h3>Name: </h3>
            <input type="text" name="name">
            <h3>End Date: </h3>
            <input type="date" name="date">
            <button type="submit">Create</button>
        </form>
@endsection
