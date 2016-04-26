@extends('layouts.master')

@section('content')

    <section class="col-sm-6 col-sm-offset-1">

        <h1>{{{ $post->title }}}</h1>
        <span>Created at: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</span>

        <p>Written by {{{ $post->user->first_name }}}</p>

        @if($post->created_at != $post->updated_at)

        @endif
        <div class="container">
            <p>{{{ $post->body }}}</p>
        </div>

        <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">Edit Post</a>


    </section>
@stop
