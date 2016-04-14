@extends('layouts.master')
@section('top-script')
    <title>Blog Posts</title>
@stop
@section('content')

<h3>Blog Posts</h3>
<section class="col-sm-6 col-sm-offset-1">
    @foreach($posts as $post)
        <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
        <p>{{{ $post->body }}}</p>
    @endforeach
</section>
<section class="col-sm-2">

</section>

@stop
