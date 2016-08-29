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

      <div class="col-md-12 push-down">
        @yield('content')
      </div>

<footer class="footer">
    <div class="container">
      <p class="muted credit">Ugly Little Footah<a href="http://playmaf.io">Tino Borst</a> and <a href="#">?? Who Knows</a>.</p>
    </div>
</footer>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @if ((Nrs\auth\LoggedIn::user()) && (Nrs\auth\LoggedIn::user()->access_level == 2))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
    @endif

    @yield('bottomjs')
    @include('admin.admin-js')
</body>

</html>
