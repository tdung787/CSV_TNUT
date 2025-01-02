<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đồ án Viễn Thông 2 | Gương mặt tiêu biểu</title>
    <!-- Favicon-->
    <!-- Bootstrap Icons-->
    <link rel="icon" href="{{asset('/icon/favicon.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{asset('css/dropdown.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous" />
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

        .btn-primary {
            color: #fff;
            font-weight: 700;
            background-color: #bb2d3b;
        }

        #page-top {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .padding-top {
            padding-top: 12px;
        }

        .padding-bottom {
            padding-bottom: 20px;
        }

        .content .noidung {
            width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 20px;
            background-color: rgb(244, 242, 242);
            box-shadow: 0 30px 30px 20px rgba(16, 16, 16, 0.21);
        }

        .nopadding {
            padding: 5px !important;
        }

        .block-nopadding {
            width: 100%;
            display: flex;
        }

        .block-content {
            width: 100%;
            display: inline-block;
        }

        .align-items {
            padding: 40px 60px;
        }

        .text-right {
            text-align: right;
        }

        .content-block {
            margin: 0;
            padding: 15px;
            display: inline-block;
            width: 100%;
        }

        .block-content {
            margin: 0 0 5px 0;
            padding: 5px;
            border-radius: 5px;
        }

        .list-news .itemdad {
            /* display: inline-block; */
            margin: 0 0 10px 0;
            padding: 0 0 10px 0;
            border-bottom: 1px solid #eee;
            width: 100%;
            flex-direction: column;
        }

        .itemdad {
            /* display: grid; */
            grid-template-columns: 300px 300px;
            justify-content: space-evenly;

            grid-template-areas:
                "aa aa"
                "bb bb"
                "cc cc";
        }

        .item1 {
            grid-area: aa;
        }

        .item4 {
            grid-area: cc;
            padding-bottom: 25px;
        }

        .col-sm-12 {
            padding-right: 0;
            padding-left: 0;
        }

        /*sự kiện*/
        .minTl {
            font-weight: 700;
            color: rgb(239, 182, 78);
            position: relative;
            text-transform: uppercase;
            font-size: 1.15em;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
        }

        .minTl::before {
            content: "";
            margin-right: 0.75rem;
            border-left: 3px solid rgb(239, 182, 78);
        }

        #browseNews .item {
            display: flex;
        }

        #browseNews .thumb {
            flex: 0 0 240px;
        }

        .idx4 h3 {
            font-size: 1.1rem;
            line-height: 22px;
        }

        ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
            unicode-bidi: isolate;
        }

        .notice h3 {
            font-size: 0.9rem;
            line-height: 1.6em;
        }

        .idx4 h4 {
            font-size: 1.5rem;
            line-height: 22px;
            margin-bottom: 5px;
        }

        .article-list {
            counter-reset: section;
        }

        .article-list .article-title {
            position: relative;
            padding-left: 20px;
            margin-top: 0.1rem;
        }

        .article-list .article-item:first-child {
            flex-direction: column;
        }

        .article-list .article-item {
            display: flex;
            /* flex-direction: row-reverse; */
            border-bottom: 1px solid #eee;
            padding-bottom: 0.75rem;
        }

        .article-list .article-item .article-thumb {
            flex: 0 0 120px;
            margin-left: 15px;
        }

        .article-list .article-item:first-child .article-thumb {
            flex: 0 0 100%;
            margin: 0;
        }

        .idx4 h4 a {
            font-size: 16px;
            line-height: 22px;
            margin-bottom: 0;
        }

        a:link,
        a:visited {
            text-decoration: none;
            transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -moz-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
        }

        .childs h4 {
            line-height: 22px;
        }

        .childs h4 a {
            font-size: 14px;
        }

        .nomals1 {
            font-weight: 400 !important;
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: 0.25rem;
        }

        .list-group-flush {
            border-radius: 0;
        }

        /* .list-group-flush>.list-group-item {
            border: none;
        } */

        /* .border {
        border: 1px solid #bbbaba !important;
      } */
        .rounded {
            border-radius: 0.25rem !important;
        }

        #marginsk {
            padding-right: 20px;
        }

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <main>
    <div class="container-lg mt-5 mb-5">
        <h1 class="minTl">Gương mặt tiêu biểu</h1>
        <div class="row" id="browseNews">
            <div id="marginsk" class="col-md-8 col-sm-12">
                @foreach ($posts as $post)
                @if ($post->category == 'Thành công')
                <div class="item border bg-light mb-3 rounded">
                    <div class="thumb">
                        <a href="{{ route('tieubieu.show', $post->id) }}"
                            title="Bế mạc Đánh giá Chương trình đào tạo tiên tiến các ngành K thuật cơ khí; Kỹ thuật điện theo tiêu chuẩn AUN – QA"><img
                                src="{{$post->thumbnail}}" width="100%" class="rounded"
                                alt="Bế mạc Đánh giá Chương trình đào tạo tiên tiến các ngành K thuật cơ khí; Kỹ thuật điện theo tiêu chuẩn AUN – QA" /></a>
                    </div>
                    <div class="text p-3">
                        <div class="h5 fw-bold idx4">
                            <h3>
                                <a
                                    href="{{ route('tieubieu.show', $post->id) }}">{{ $post->tittle }}</a>
                            </h3>
                        </div>
                        <div class="small text-secondary">
                            <div class="cattegolist">
                                <span class="catnamelist" title="Sự kiện"><a href="{{route('tieubieu')}}">{{$post->category}}</a></span>
                                |  <span class="dates"><a href="#">{{ $post->created_at->format('d/m/Y') }}</a></span>
                            </div>
                        </div>
                        <div>
                            {{$post->description}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <hr />
            </div>
            <div class="col-md-4 col-sm-12">
                @include('layout.sidebar')
                <div class="mb-3">
                    <div id="rnbnright1"></div>
                </div>
            </div>
        </div>
    </div>
</main>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="js/scripts_old.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./slick/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
