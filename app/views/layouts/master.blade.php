<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

@yield('top-script')

</head>
<body>

<main class="container">
    @yield('content')
</main>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@yield('bottom-script')

</body>
