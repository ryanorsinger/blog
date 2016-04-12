@extends('layouts.master')

@section('top-script')
 <title>Resume</title>
 <link rel="stylesheet" href="css/resume.css">
@stop
@section('content')


<a href="http://blog.dev/">Home</a>
<a href="{{{ action('HomeController@showWelcome') }}}">Home</a>

<a href="/portfolio">Portfolio</a>
<a href="{{{ action('HomeController@showPortfolio')}}} ">Portfolio</a>



    <h1>My Resume</h1>
    <ul>
        <li>I'm awesome</li>
        <li>So awesome</li>
    </ul>



@stop
@section('bottom-script')

@stop
