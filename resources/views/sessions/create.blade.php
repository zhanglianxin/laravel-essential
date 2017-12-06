@extends('layouts.default')

@section('title', 'Sign in')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Sign in</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:(<a href="{{ route('password.request') }}">Forgot password?</a>)</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <hr>
            <p>New to here? <a href="{{ route('signup') }}">Create an account.</a></p>
        </div>
    </div>
</div>
@stop
