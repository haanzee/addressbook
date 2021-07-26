<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('bs5/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bs5/css/style.css')}}">


    <title>@yield('title') </title>
</head>
<body>

    <div class= "container bg-light shadow" >
    <div>
        <h3 class="text-center txtstyle">Crud Application (Address Book-Faker) </h3>
        <hr>
    </div>
    <div class="row">
        <div class="col-sm-3 border-warning border-right border-dark h-700">
            @include('includes.sidebar')
        </div>
        <div class="col-sm-9">
            <div class="text-center txtstyle" ><h3>@yield('title')</h3></div>
            <hr class="i-color" i-color="red">
            @yield('content')
            @yield('records')
        </div>
    </div>
    <div>
        @include('includes.footer')
    </div>
</div>
    
<script src="{{ asset('bs5/js/all.min.js')}}"></script>
<script src="{{ asset('bs5/js/bootstrap.js')}}"></script>
</body>
</html>