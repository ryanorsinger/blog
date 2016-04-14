@extends('layouts.master')

@section('content')

    {{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
        @include('posts.form')
    {{ Form::close() }}
@stop
