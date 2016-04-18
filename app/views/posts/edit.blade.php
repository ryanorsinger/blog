@extends('layouts.master')

@section('content')

    {{ Form::model($post, ['action' => array('PostsController@update', $post->id], 'method' => 'PUT']] }}
        @include('posts.form')
    {{ Form::close() }}
@stop
