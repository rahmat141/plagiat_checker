<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <title>@yield('title')</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-custom border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="{{ asset('img/logo.png') }}" width="100" height="99">
                <p class="custom1">E-Plagiat P45TI</p>
            </div>
            <hr class="custom1">
            <div class="list-group list-group-flush">
                <a href="{{url('/checker')}}" class="list-group-item list-group-item-action bg-custom">Checker</a>
                <a href="{{url('/')}}" class="list-group-item list-group-item-action bg-custom">Lembar Jawaban Checker</a>
                <a href="#" class="list-group-item list-group-item-action bg-custom">History</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @yield('container')
        </div>
        <!-- /#page-content-wrapper -->
    </div>


    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
