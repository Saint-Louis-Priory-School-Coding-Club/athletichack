@extends('layouts.app')
@section('content')
    <table class="table is-bordered is-striped is-fullwidth">
      <thead>
        <th>Name</th>
        <th>Last Week Weight Loss (%)</th>
        <th>Last Week Exercise Count (Min)</th>
      </thead>
      <tbody>
          @foreach($group->users as $user)
              <tr>
                  <td>{{$user->name}}</td>
                  <td>test</td>
                  <td>test</td>
              </tr>
          @endforeach
      </tbody>
    </table>
@endsection