@extends('layouts.master')

@section('content')
    <h1>EnergyStar</h1>

@stop

@section('bottom-script')
    <script>
        $.ajax(
            method: "GET",
            url: "test.js",
            dataType: "script"


            'https://portfoliomanager.energystar.gov/schema/6.0/targetFinder/targetFinder.xsd')
        .done(function(data) {
            console.log(data);
        })
        .fail( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
            console.log(textStatus);
        });

    </script>
@stop
</body>
</html>
