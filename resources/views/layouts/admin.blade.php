<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title', 'Layouts Admin')</title>

    <!--Panggil Font-->
    <link href="{{ asset ('vendor/fontawesome-free/css/all.min.cs')}}" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,
        300, 300i, 600, 600i, 900, 900i"="stylesheet">
    <!--Panggil style dari template-->
    <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include ('layouts.topbar')
            <div class="container-flud">
                @yield('content')
        </div>
    </div>
</div>
<footer class="sticky-footer bg-whits">
      <div class="copyright text-canter my-auto">
        <span>copyright &copy; SMK Texmaco {{date ('Y')}}</span>
      </div>
    </div>
  </footer>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas-angle-up"></i>
</a>

<!--javasript templte-->
<script src="{{ asset('vendor/jquery.min.js')}}></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
</script>
<script arc="{{ asset('vendor/jquery-easing.min.js
</body>
</html>

