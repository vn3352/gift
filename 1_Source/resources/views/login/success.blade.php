@extends('layout')

@section('title', 'Welcome')

@push('stylesheets')
    <link rel="stylesheet" href="{{ URL::asset('login.css') }}" />
@endpush

@push('scripts')
@endpush

@section('content')
    <div class="container">
        
        <h2 class="form-signin-heading">Welcome {{ $code }}</h2>

    </div> <!-- /container -->
@endsection