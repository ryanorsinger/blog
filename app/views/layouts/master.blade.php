<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="/css/paper.css">
<link rel="stylesheet" type="text/css" href="/css/sticky_footer.css">

@yield('top-script')

</head>
<body>
    @include('layouts.partials.navbar')

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    <main class="container">
        @yield('content')
    </main>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>

setTimeout(function() {
    $(".alert").slideUp(900);
}, 500);


</script>
@yield('bottom-script')

</body>
