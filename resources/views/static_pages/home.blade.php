@extends('layouts.default')

@section('title', 'HOME')

@section('content')
<div class="jumbotron">
    <h1>HOME</h1>
    <p class="lead">
        ha?
    </p>
    <p>
        It's only a beginning.
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up</a>
    </p>
</div>
@stop
