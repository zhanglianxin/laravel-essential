@extends('layouts.default')

@section('title', 'Sign up')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Sign up</h5>
        </div>
        <div class="panel-body">
@include('shared._errors')
            <form method="post" action="{{ route('users.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">SIGN UP</button>
            </form>
        </div>
    </div>
</div>
@stop
