@extends('layouts.master')

@section('content')

    {{ Form::open(array('action' => 'UsersController@doLogin')) }}

    {{ Form::label('email') }}
    {{ Form::text('email', null, ['class' => 'form-control']) }}

    {{ Form::label('password') }}
    {{ Form::password('password', null, ['class' => 'form-control']) }}

    {{ Form::submit('Login') }}

    {{ Form::close() }}


@stop
