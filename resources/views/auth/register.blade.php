@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-6 is-offset-3">
    <div class="form">
      <h1 class="title">Register</h1>
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="e.g John Smith">
        </div>
      </div>

      <div class="field">
        <label class="label">Email Address</label>
        <div class="control">
          <input class="input" type="email" placeholder="e.g. your@email.com">
        </div>
      </div>

      <div class="field">
        <label class="label">Password</label>
        <div class="control">
          <input class="input" type="email" placeholder="e.g. password123">
        </div>
      </div>

      <div class="field">
        <label class="label">Confirm Password</label>
        <div class="control">
          <input class="input" type="email" placeholder="e.g. password123">
        </div>
      </div>
      <div class="control">
        <button class="button is-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!--
                    <form method="POST" action="{{ route('register') }}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                    </form>
@endsection
