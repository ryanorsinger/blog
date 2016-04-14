@extends('layouts.master')

@section('content')

    <section class="col-sm-6 col-sm-offset-1">

        <h1>{{{ $post->title }}}</h1>
        <span>Created at: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</span>

        @if($post->created_at != $post->updated_at)

        @endif
        <div class="container">
            <p>{{{ $post->body }}}</p>
        </div>

    </section>
@stop
