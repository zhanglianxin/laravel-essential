@extends('layouts.default')

@section('title', 'Edit Profile')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Edit Profile</h5>
        </div>
    <div class="panel-body">
@include('shared._errors')
        <form method="post" action="{{ route('users.update', $user->id) }}">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
            </div>
            <div class="form-group">
                <label for="name">Password:</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@stop
