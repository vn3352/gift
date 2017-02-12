@extends('layout')

@section('title', 'Login Page')

@push('stylesheets')
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
@endpush

@push('scripts')
@endpush

@section('content')
    <div class="container">

        <form class="form-signin" action="{{ $action }}" method="post">
            {{csrf_field()}}
            <h2 class="form-signin-heading">Please sign in</h2>
            <div class="form-group {{ $errors->has('code') || $errors->has('login') ? ' has-error' : ''}}">
                <label for="inputCode" class="sr-only">Ticket code</label>
                <input id="inputCode" name="code" class="form-control" placeholder="Ticket code" required autofocus value="{{ old('code') }}">
            </div>
            <div class="form-group{{ $errors->has('password') || $errors->has('login') ? ' has-error' : ''}}">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required value="{{ old('password') }}">
            </div>
            <div class="{{ $errors->has('login') ? ' has-error' : ''}}">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="rememberFlg" value="remember-me"> Remember me
                  </label>
                </div>
            </div>
            @if ($errors->has('login'))
            <div>
                <p class="text-danger">{{ $errors->first('login') }}</p>
            </div>
            @endif
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->
@endsection

