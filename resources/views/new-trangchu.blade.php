<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CSV TNUT</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

        
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />


    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/about.css" /> -->
    <style>
        .cardTl {
            position: relative;
            font-size: 1.5em;
            font-weight: 700;
            color: #f4623a;
            padding-bottom: 15px;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .cardTl::before {
            width: 70px;
            bottom: 5px;
        }

        .cardTl::before,
        .cardTl::after {
            position: absolute;
            content: "";
            /* height: 1px; */
            background: #f4623a;
        }

        #features .cardTl::before,
        #features .cardTl::after {
            background: #f4623a;
        }

        #features .cardTl {
            color: #f4623a;
        }

        .cardTl.text-center::before,
        .cardTl.text-center::after {
            left: 50%;
        }

        .cardTl.text-center::before {
            margin-left: -35px;
        }

        .cardTl.text-center::after {
            margin-left: -20px;
        }

        .cardTl::after {
            width: 40px;
            bottom: 0px;
        }

        body {
            overflow-x: hidden;
        }

        #about {
            margin-top: 20px
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

        .btn-outline-light {
            --bs-btn-color: rgb(255, 132, 0);
            --bs-btn-border-color: rgb(255, 132, 0);
        }

        /* #box {
        background-color: rgb(255, 0, 0);
      } */
        .pad-mf {
            padding-left: 15px;
            padding-right: 15px;
        }

        /*hợp tác doanh nghiệp*/
        @media (max-width: 768px) {
            .content {
                margin: auto;
                padding: 0;
                width: auto;
            }
        }

        #padtophtdn {
            padding-top: 10px;
        }

        #padtophtdn {
            color: darkorange;
        }

        #tabNewsContent .h-even img {
            height: 120px;
            object-fit: cover;
        }

        #tabNewsContent .honew2 h2 {
            font-size: 15px;
            line-height: 1.6em;
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 600;
        }

        #tabNewsContent .cattego {
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            display: flex;
            align-items: center;
            flex-flow: wrap;
            line-height: 1.5;
            margin-bottom: 0.5rem;
            justify-content: space-between;
        }

        /*menu dọc*/
        .minTl {
            font-weight: 700;
            color: rgb(239, 182, 78);
            position: relative;
            text-transform: uppercase;
            font-size: 1.15em;
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .minTl::before {
            content: "";
            margin-right: 0.75rem;
            border-left: 3px solid rgb(239, 182, 78);
        }

        #font-right {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        /* #features .slider {
            max-width: 1200px;
            margin: 0 auto;
        } */

        #sponsors .slider {
            margin: 0 auto;
        }

        #sponsors .slider img {
            max-height: 50%;
        }

        /*Special-events-fix*/
        #branchs .inner .tl {
            text-align: center;
            transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -moz-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
        }

        #branchs .inner .list-group-flush {
            bottom: -150%;
            opacity: 0;
            transition: all 300ms ease-in-out;
            -webkit-transition: all 300ms ease-in-out;
            -moz-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            height: 0;
            overflow: hidden;
        }

        .list-group-flush {
            border-radius: 0;
        }

        .list-group {
            display: flex;
            flex-direction: column;
            /* padding-left: 0;
            margin-bottom: 0; */
            border-radius: .25rem;
        }

        #hover-item {
            display: none;
        }

        #hover-item a {
            color: white;
        }

        .text {
            color: white;
            background: rgb(0 74 173 / 70%);

        }

        .text-hover {
            margin: 0 !important;
        }

        .box-item:hover .text {
            background: none;
        }

        .box-item:hover .inner {
            background: rgb(0 74 173 / 70%);
            animation: moveToTopLeft 0.2s forwards ease-in-out;
        }

        .box-item:hover #hover-item {
            display: inline-block;
        }




        @keyframes moveToTopLeft {
            from {
                height: 20%;
                top: 36.5%;
                left: 0;
            }

            to {
                height: 100%;
                top: 0;
                left: 0;
            }
        }

        @keyframes moveToInitial {
            from {
                height: 100%;
                top: 0%;
                left: 0;
            }

            to {
                height: 20%;
                top: 36.5%;
                left: 0;
            }
        }

        #branchs .inner .list-group-flush>.list-group-item {
            padding: 0 1rem;
            background-image: url(/img/bullet-w.svg);
            background-position: 0 .5rem;
            border: none;
        }

        .box-item {
            height: 220px;
            position: relative;
        }

        .img-back {
            position: absolute;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            -moz-object-fit: cover;
            -o-object-fit: cover;
            object-fit: cover;
            z-index: 0;
            width: 100%;
        }

        .inner {
            z-index: 1;
            position: relative;
            /* display: flex; */
            top: 36.5%;
            animation: moveToInitial 0.4s forwards ease-in-out;
            /* background: rgb(26 40 68 / 82%); */
            /* Căn giữa theo chiều ngang */
        }

        /*background-fix*/
        .bg-image {
            width: 100%;
            background-color: #f8f7f9;
            background-size: cover;
            /* Đường dẫn đến ảnh */

            /* Không lặp lại ảnh */
        }

        .table1 {
            border: 2px solid #ffffff;
            background-color: #ffffff;

        }

        .fix {
            display: flex;
            flex-direction: column;
            gap: 10px;

        }

        .c5 {
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        /* #tabNewsContent{
    max-height: 150px;
} */
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    @include('layout.success_mess')
    <!-- Masthead-->
    <div id="myfkncarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button data-bs-target="#myfkncarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button data-bs-target="#myfkncarousel" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2"></button>
            <button data-bs-target="#myfkncarousel" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3"></button>
            <button data-bs-target="#myfkncarousel" data-bs-slide-to="3" aria-current="true"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="slider/25.png" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="slider/22.png" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="slider/23.png" alt="Third slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="slider/24.png" alt="Fourth slide" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myfkncarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myfkncarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Giới thiệu về mạng lưới cựu sinh viên</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">
                        Mạng lưới cựu sinh viên là kênh kết nối chặt chẽ giữa Nhà trường với các Cựu sinh viên trong và
                        ngoài nước. Qua đó tăng cường cơ hội hợp tác, gắn kết, nhằm nâng cao nhận thức, niềm tự hào
                        truyền thống, chia sẻ các giá trị, năng lực và thế mạnh của các Cựu sinh viên cũng như hỗ trợ
                        cho Nhà trường. Thực hiện tốt sứ mệnh “Cơ sở đào tạo nguồn nhân lực chất lượng cao; nghiên cứu
                        khoa học; tư vấn, ứng dụng và chuyển giao công nghệ đáp ứng yêu cầu phát triển bền vững của đất
                        nước và hội nhập quốc tế.
                    </p>
                    <a class="btn btn-light btn-xl" href="{{ route('sumenh') }}">Xem thêm</a>
                </div>
            </div>
        </div>
    </section>
    <div class="tab-content bg-image" id="tabNewsContent">
        <div class="cardTl text-center pt-3">Sự kiện nổi bật</div>
        <div class="tab-pane fade show active" id="tabNews1" role="tabpanel" aria-labelledby="tabNews1-tab"
            style="padding: 2% 1.5% 2% 1.5%">
            <div class="row">
                <div class=" col-lg-5 col-md-7 col-sm-7">
                    <div class="mb-3 hotNews">
                        <div>
                            <div class="hover02">
                                <a href="#"><img
                                        src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_15126.jpg"
                                        width="100%"
                                        alt="02 SINH VIÊN TNUT ĐẠT GIẢI BA OLYMPIC TOÁN HỌC TOÀN QUỐC MÔN GIẢI TÍCH NĂM 2024" /></a>
                            </div>
                            <div class="p-3 m-0 h4 fw-bold">
                                <h2>
                                    <a href="#"
                                        title="02 SINH VIÊN TNUT ĐẠT GIẢI BA OLYMPIC TOÁN HỌC TOÀN QUỐC MÔN GIẢI TÍCH NĂM 2024">02
                                        SINH VIÊN TNUT ĐẠT GIẢI BA OLYMPIC TOÁN HỌC TOÀN QUỐC
                                        MÔN GIẢI TÍCH NĂM 2024</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-6 col-6 d-none-mobile">
                            <div>
                                <div class="mb-2 hover02">
                                    <a href="#" class="h-even"
                                        title="Buổi làm việc với trường Jeonju ngày 18.4">
                                        <img src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_15124.jpg"
                                            width="100%" alt="Buổi làm việc với trường Jeonju ngày 18.4" />
                                    </a>
                                </div>
                                <div class="honew2">
                                    <div class="cattego">
                                        <span class="catname" title="Hợp tác giáo dục"><a href="#">Hợp tác giáo
                                                dục</a></span><span> 20/04/2024</span>
                                    </div>
                                    <h2 class="fnomal">
                                        <a href="#" class="text-dark"
                                            title="Buổi làm việc với trường Jeonju ngày 18.4">Buổi làm việc với trường
                                            Jeonju ngày 18/04</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 d-none-mobile">
                            <div>
                                <div class="mb-2 hover02">
                                    <a href="#" class="h-even"
                                        title="Trường Đại học Khoa học Và Kỹ thuật Quốc lập Cần Ích, Đài Loan đến thăm và làm việc với Trường Đại Học Kỹ Thuật Công Nghiệp">
                                        <img src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_15137.jpg"
                                            width="100%"
                                            alt="Trường Đại học Khoa học Và Kỹ thuật Quốc lập Cần Ích, Đài Loan đến thăm và làm việc với Trường Đại Học Kỹ Thuật Công Nghiệp" />
                                    </a>
                                </div>
                                <div class="honew2">
                                    <div class="cattego">
                                        <span class="catname" title="Hợp tác giáo dục"><a href="#">Hợp tác giáo
                                                dục</a></span><span> 17/04/2024</span>
                                    </div>
                                    <h2 class="fnomal">
                                        <a href="#" class="text-dark"
                                            title="Trường Đại học Khoa học Và Kỹ thuật Quốc lập Cần Ích, Đài Loan đến thăm và làm việc với Trường Đại Học Kỹ Thuật Công Nghiệp">Trường
                                            Đại học Khoa học Và Kỹ thuật Quốc lập Cần Ích,
                                            Đài Loan đến thăm và làm việc v...</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5 g-1 d-none-mobile table1" style="margin-top:0 ">
                    <div id="newstop-highlight-list1" class="nano has-scrollbar">
                        <div class="nano-content" tabindex="0" style="right: -17px">
                            <ul class="list-group list-group-flush list-group-dot " style="list-style-type: none;">
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Bế mạc Đánh giá Chương trình đào tạo tiên tiến các ngành Kỹ thuật cơ khí; Kỹ thuật điện theo tiêu chuẩn AUN – QA">Bế
                                            mạc Đánh giá Chương trình đào tạo tiên tiến các
                                            ngành Kỹ thuật cơ khí; Kỹ thuật điện theo tiêu chuẩn AUN
                                            – QA
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">

                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Khai mạc đánh giá 02 chương trình đào tạo tiên tiến ngành Kỹ thuật cơ khí và Kỹ thuật điện theo tiêu chuẩn AUN – QA (09-11/4/2024)">Khai
                                            mạc đánh giá 02 chương trình đào tạo tiên tiến
                                            ngành Kỹ thuật cơ khí và Kỹ thuật điện theo tiêu chuẩn
                                            AUN – QA (09-11/4/2024)
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Trường Đại học Kỹ thuật Công nghiệp tổ chức chương trình ngày hội tiếng Anh - English festival 2024 tại THPT Chu Văn An - Thái Nguyên">Trường
                                            Đại học Kỹ thuật Công nghiệp tổ chức chương
                                            trình ngày hội tiếng Anh - English festival 2024 tại
                                            THPT Chu Văn An - Thái Nguyên
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Cán bộ Giảng viên, Sinh viên Trường Đại học Kỹ thuật Công nghiệp tham gia Chương trình Trao đổi học tập và Nghiên cứu tại Đại học Hoàng Cương – Hồ Bắc, Trung Quốc">Cán
                                            bộ Giảng viên, Sinh viên Trường Đại học Kỹ thuật
                                            Công nghiệp tham gia Chương trình Trao đổi học tập và
                                            Nghiên cứu tại Đại học Hoàng Cương – Hồ Bắc, Trung Quốc
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Hội nghị Kiện toàn Nhân sự Ban Chấp hành Đoàn Trường Đại học Kỹ thuật Công nghiệp Nhiệm kỳ 2022 – 2024">Hội
                                            nghị Kiện toàn Nhân sự Ban Chấp hành Đoàn Trường
                                            Đại học Kỹ thuật Công nghiệp Nhiệm kỳ 2022 – 2024
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Trường Đại học Kỹ thuật Công nghiệp tổ chức Xét nghiệm Tầm soát Ung thư Miễn phí cho viên chức, người lao động Nhà trường">Trường
                                            Đại học Kỹ thuật Công nghiệp tổ chức Xét nghiệm
                                            Tầm soát Ung thư Miễn phí cho viên chức, người lao động
                                            Nhà trường
                                        </a>
                                    </h3>
                                </li>
                                <li class="list-group-item honew2">
                                    <h3>
                                        <a href="#" class="text-dark"
                                            title="Trường Đại học Kỹ thuật Công nghiệp làm việc với Công ty cổ phần Kỹ thuật MEP">Trường
                                            Đại học Kỹ thuật Công nghiệp làm việc với Công
                                            ty cổ phần Kỹ thuật MEP
                                        </a>
                                    </h3>
                                </li>
                                <li class=" honew2" style="padding-left:16px;">
                                    <a class="h-link" href="#" ">Xem thêm...</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nano-pane">
                            <div class="nano-slider" style="height: 232px; transform: translate(0px, 0px)"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 fix">
                    <div class=" border widgetbg-light  box-item">
                        <div class="inner">
                            <div class="text p-3">
                                <div class="tl h4 text-uppercase fw-bold text-hover" style="text-align:center;">ĐĂNG
                                    KÝ HOẠT ĐỘNG CSV
                                </div>
                                <ul id="hover-item" class="list-group list-group-flush">
                                    <li class="list-group-item c5">
                                        <a href="{{ route('register') }}">Đăng ký thông tin</a>
                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="{{ route('hoicodiencactinh') }}">Hội cơ điện các tỉnh</a>
                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="/blog/hop-tac-11030000">Tham gia CLB kết nối</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-back"><img
                                src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_2576.jpg"
                                width="100%" height="220px" alt="Kỹ sư kỹ thuật"></div>
                        {{-- <div class="minTl">ĐĂNG KÝ THAM GIA HOẠT ĐỘNG CSV</div>
                        <ul id="font-right" class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{route('register')}}" class=" text-dark nomals1">Đăng ký thông tin
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('hoicodiencactinh')}}" class=" text-dark nomals1">Kết nối cựu sinh viên
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="/blog/hop-tac-11030000" class=" text-dark nomals1">Tham gia CLB kết nối
                                </a>
                            </li>
                        </ul> --}}

                    </div>
                    <div class=" border widgetbg-light  box-item">
                        <div class="inner">
                            <div class="text p-3">
                                <div class="tl h4 text-uppercase fw-bold text-hover" style="text-align:center;">CHIA
                                    SẺ
                                </div>
                                <ul id="hover-item" class="list-group list-group-flush">
                                    <li class="list-group-item c5">
                                        <a href="{{ route('quyphattrien') }}">Quỹ phát triển tài năng ĐHCĐ</a>

                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="{{ route('quytuhao') }}">Quỹ tự hào TNUT</a>
                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="{{ route('dangkydonggop') }}">Đăng ký đóng góp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-back"><img
                                src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_2570.jpg"
                                width="100%" height="220px" alt="Kỹ sư kỹ thuật"></div>
                    </div>
                    <div class=" border widgetbg-light  box-item">
                        <div class="inner">
                            <div class="text p-3">
                                <div class="tl h4 text-uppercase fw-bold text-hover" style="text-align:center;">KẾT
                                    NỐI HỘI CƠ ĐIỆN CÁC TỈNH
                                </div>
                                <ul id="hover-item" class="list-group list-group-flush">
                                    <li class="list-group-item c5">
                                        <a href="{{ route('quyphattrien') }}">Hội Cơ điện tỉnh Hoà Bình
                                        </a>

                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="{{ route('quytuhao') }}">Hội Cơ điện tỉnh Thái
                                            Nguyên</a>
                                    </li>
                                    <li class="list-group-item c5">
                                        <a href="{{ route('dangkydonggop') }}">Hội Cơ điện tỉnh Hải Phòng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-back"><img
                                src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_2569.jpg"
                                width="100%" height="220px" alt="Kỹ sư kỹ thuật"></div>
                    </div>
                    {{-- <div class="mb-3 border widget p-3 bg-light rounded">
                        <div class="minTl">THÔNG TIN KẾT NỐI HỘI CƠ ĐIỆN CÁC TỈNH</div>
                        <ul id="font-right" class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('hoabinh') }}" class=" text-dark nomals1">Hội Cơ điện tỉnh Hoà Bình
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="/blog/khoa-hoc-11020000" class=" text-dark nomals1">Hội Cơ điện tỉnh Thái
                                    Nguyên
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="/blog/hop-tac-11030000" class=" text-dark nomals1">Hội Cơ điện tỉnh Hải Phòng
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="mb-3">
                        <div id="rnbnright1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="box" class="bg-light pt-4 pb-5">
        <div class="cardTl text-center ">Dành cho Cựu sinh viên</div>
        <div id="portfolio">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('sumenh')}}" title="Project Name">
                            <img class="img-fluid" src="img\ttcsv\6.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Giới thiệu chung</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('hoicodiencactinh')}}" title="Project Name">
                            <img class="img-fluid" src="img/ttcsv/7.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Hội cơ điện các tỉnh</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('tinhnguoicodien')}}" title="Project Name">
                            <img class="img-fluid" src="img/ttcsv/8.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Tình người cơ điện</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('sukien')}}" title="Project Name">
                            <img class="img-fluid" src="img/ttcsv/9.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Hợp tác</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('tieubieu')}}" title="Project Name">
                            <img class="img-fluid" src="img/ttcsv/10.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Gương mặt tiêu biểu</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 pad-mf mt-4 col-sm-6">
                        <a class="portfolio-box" href="{{route('lists')}}" title="Project Name">
                            <img class="img-fluid" src="img/ttcsv/11.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Thông tin cựu sinh viên</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="features" class="text-white bg-white">
        <div class="content py-5">
            <div class="cardTl text-center">Cựu sinh viên</div>
            <div class="slider center">
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/11_6.png" alt="" /></div>
                </div>
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/10_5.png" alt="" /></div>
                </div>
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/9_4.png" alt="" /></div>
                </div>
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/8_3.png" alt="" /></div>
                </div>
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/6_2.png" alt="" /></div>
                </div>
                <div>
                    <div class="thumb"><img src="https://www.tnut.edu.vn/uploads/lp/im1s/7_1.png" alt="" /></div>
                </div>
            </div>
            <div class="slider slider-nav text-center mt-2">
                <div>
                    <div class="fw-bold text-danger">Nhật Mai Sơn</div>
                    <div class="mb-3 small text-secondary">CSV K29I; Giám đốc Trung tâm Khuyến công và Xúc tiến thương mại, sở công thương tỉnh Bắc Kạn</div>
                    <div class="text-holder">
                        "Tôi muốn gửi lời tri ân tới các thầy cô giáo, tới mái trường ĐH Kỹ thuật Công nghiệp, nơi đào
                        tạo cho tôi những kiến thức về khoa học kỹ thuật, về chuyên ngành tự động hóa, đó là những kiến
                        thức vô cùng quý báu để tôi làm hành trang bước vào đời"
                    </div>
                </div>
                <div>
                    <div class="fw-bold text-danger">TS. Đào Duy Sơn</div>
                    <div class="mb-3 small text-secondary">CSV K4-SPKT; đang là nghiên cứu sau tiến sỹ (postdoc) tại ĐH quốc gia Singapore.</div>
                    <div class="text-holder">
                        "Đại học Kỹ thuật Công nghiệp đã thay đổi cuộc đời tôi, từ một học sinh nông thôn nghèo đến
                        trường Đại học đẳng cấp thế giới"
                    </div>
                </div>
                <div>
                    <div class="fw-bold text-danger">Nguyễn Hữu Tuấn</div>
                    <div class="mb-3 small text-secondary">CSV lớp K33MC, Trưởng phòng Kinh doanh, Công ty TNHH TSUBAKIMOTO VIỆT NAM</div>
                    <div class="text-holder">
                        "Qua cuộc nói chuyện nhỏ này, chúng tôi mong muốn mang đến cho các bạn một cái nhìn khác về môi
                        trường học tập quốc tế tại khoa Quốc tế, trường ĐH Kỹ thuật Công nghiệp. Một môi trường giáo dục
                        mở, năng động, sáng tạo sẽ đem lại cho các bạn không chỉ là thách thức mà còn là cơ hội lớn
                        trong tương lai"
                    </div>
                </div>
                <div>
                    <div class="fw-bold text-danger">Nguyễn Văn Sáng</div>
                    <div class="mb-3 small text-secondary">CSV K40CCM6; Trưởng phòng Quản lý Chất lượng Công ty Samsung Electronics Việt Nam Thái Nguyên</div>
                    <div class="text-holder">
                        "Tôi rất vui khi được thực tập tại đây, môi trường học tập và thực tập tại đây thực sự rất tốt,
                        các giảng viên và các bạn sinh viên luôn hỗ trợ tôi trong mọi việc"
                    </div>
                </div>
                <div>
                    <div class="fw-bold text-danger">Golam Azam Mahmud</div>
                    <div class="mb-3 small text-secondary">Thực tập sinh, sinh viên trường College of Aviation Technology Aenonautical Engineering, Bangladest</div>
                    <div class="text-holder">
                        "Trong học tập, công việc cũng như cuộc sống tôi luôn xác định được mục tiêu của mình và cố gắng
                        hoàn thành với quan điểm làm thế nào thì tốt"
                    </div>
                </div>
                <div>
                    <div class="fw-bold text-danger">Nguyễn Hữu Tuấn</div>
                    <div class="mb-3 small text-secondary">CSV lớp K33MC, Trưởng phòng Kinh doanh, Công ty TNHH
                        TSUBAKIMOTO VIỆT NAM</div>
                    <div class="text-holder">
                        "Đến với khoa Cơ khí trường ĐH Kỹ thuật Công nghiệp là một cái duyên, nhưng tôi thực cảm thấy
                        may mắn khi lựa chọn con đường này"
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sponsors" class="bg-light mb-3">
        <!-- <hr id="demos" /> -->
        <div class="slider autoplay">
            <div>
                <img src="icon/1.png" alt="" />
            </div>
            <div>
                <img src="icon/2.png" alt="" />
            </div>
            <div>
                <img src="icon/3.png" alt="" />
            </div>
            {{-- <div>
            <img src="icon/4.png" alt="" />
          </div> --}}
            <div>
                <img src="icon/1.png" alt="" />
            </div>
            <div>
                <img src="icon/5.png" alt="" />
            </div>
            <div>
                <img src="icon/8.png" alt="" />
            </div>
        </div>
        <!-- <hr /> -->
        </div>
    </section>

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
         crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>

</body>

</html>
