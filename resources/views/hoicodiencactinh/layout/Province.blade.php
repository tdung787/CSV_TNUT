<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{$post -> tittle}}</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <!-- Favicon-->
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />


    <style>
        body {
            overflow-x: hidden;
        }
        #about h2,
        #about p {
            font-family: "Lato", "Helvetica Neue", "Helvetica", Helvetica, Arial,
                sans-serif;
        }

        #imagetnutheader {
            width: 400px;
        }

        .navbar {
            --bs-navbar-padding-y: 0;
            --bs-navbar-brand-padding-y: 0;
            --bs-navbar-brand-margin-end: 0;
            height: 100px;
        }

        .bg-primary {
            background: url(img/bground.jpg) !important;
        }

        .rounded {
            margin-top: 22.5%;
        }

        .rounded img {
            width: 140px;
            float: left;
            margin-right: 1%;
        }

        .tits {
            margin: 1% 0 2% 0;
            font-size: larger;
        }

        .fw-bold a {
            color: #a61d37;
            font-size: large;
            font-weight: 600;
            text-decoration: none;
        }

        .fw-bold a:hover {
            text-decoration: underline;
        }

        .table th {
            border: 1px solid;
        }

        .table td {
            border: 1px solid;
        }

        .list-group-flush>.list-group-item {
            background: url() no-repeat 0 1rem;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.5rem 1rem;
            color: #212529;
            text-decoration: none;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .list-group-item a {
            text-decoration: none;
        }

        .list-group-item a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <div class="container-lg mb-5">
        <div class="row">
            <div class="col-md-8 col-ms-12">
                <h1 class="minTl" style="margin-top: 6.5%;">Kết nối</h1>
                @yield('content')
            </div>
            <div class="col-md-4 col-sm-12">
                @include('layout.postsidebar')
            </div>
        </div>
    </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
         crossorigin="anonymous">
    </script>
</body>

</html>
