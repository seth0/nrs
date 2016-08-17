<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/styles.css">
    <title>@yield('browsertitle')</title>

    @yield('css')

</head>

<body>

    @include('topnav')
    @yield('outsidecontainer')

    <div class="container">
        <div class="row">
            <br>
            <br>
    @include('errormessage')
        </div>
    </div>
    @yield('content')



    <div class="row footer-background">
        <div class="col-md-3">
            <div class="pagging-left-8px">
                <h4> Contact us </h4> 123 Main Street
                <br> Unionvill, PA
                <br> 23232
                <br> +3161104404
            </div>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-3">
            map
        </div>
        <div>

        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    @yield('bottomjs')
</body>

</html>
