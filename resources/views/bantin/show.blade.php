<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $post->title }}</title>
    <!-- Favicon-->
    <link rel="icon" href="/icon/Logo Khoa FEE_2020 (xanh sam)_Vi.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/about.css" /> -->
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

        .title {
            font-weight: 700;
            color: orange;
            position: relative;
            text-transform: uppercase;
            font-size: 1.15em;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .title::before {
            content: "";
            margin-right: 0.75rem;
            border-left: 3px solid orange;
        }

        /* .rounded {
            margin-top: 22.5%;
        }

        .rounded img {
            width: 140px;
            float: left;
            margin-right: 1%;
        } */

        .post {
            width: 100%;
            background: white;
            padding: 25px 0px;
            border-radius: 10px;
        }

        .article img {
            width: 100%;
        }

        .article .i {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            text-align: center;
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
            <div class="col-md-8 col-sm-12">
                <div class="post"></div>
                <div class="title">{{$post->category->title}}</div>
                <b style="font-size: larger">{{ $post->title }}</b>

                {{-- <div class="text-justify" style="line-height:23px" id="Art_Pdesc">
                    <p style="text-align: center;"><iframe title="YouTube video player"
                            src="//www.youtube.com/embed/d-koRBO0ASw" width="560" height="315" frameborder="0"
                            allowfullscreen="allowfullscreen"></iframe></p>
                    <p style="text-align: center;"><iframe title="YouTube video player"
                            src="//www.youtube.com/embed/QOk4cFAccm0" width="560" height="315" frameborder="0"
                            allowfullscreen="allowfullscreen"></iframe></p>
                </div> --}}
                <div class="entry-content text-justify rte article__content js-toc-content">
                    {!! $post->content !!}
                </div>
                <hr>

            </div>
            <div class="col-md-4 col-sm-12">
                @include('layout.postsidebar')
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{ asset('js/scripts_old.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
