<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đồ án Viễn Thông 2 | Lý lịch</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <!-- Favicon-->
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
         crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
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

        #page-top {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            line-height: 2;
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

        .btnback {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.3;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            touch-action: manipulation;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btnback:hover {
            scale: 1.05;
        }

        .btnback:active {
            scale: 0.95;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <main style="min-height: 10vh" class="profile mt-5">
        <div class="profile-bg"></div>
        <section class="container">
            <aside class="profile-image">
                <img class="profile-image img-responsive" src=" {{$user->getImageURL()}} "
                    onerror="this.src='https://www.hutech.edu.vn/cuusinhvien/images/no.jpg'" />
                <!-- <a class="camera" href="#">
            <i class="fas fa-camera"></i>
          </a> -->
            </aside>
            <section class="profile-info">
                <h2>THÔNG TIN</h2>
                <div class="itemdad">
                    <!-- <div class="item1 item">
              <div
                class="item1 item col-sm-12 text-center padding-bottom margin-bottom"
              >
                <img
                  class="img-responsive"
                  style="max-width: 150px"
                  src="/CSV/img/PTSKL.jpeg"
                  onerror="this.src='https://www.hutech.edu.vn/cuusinhvien/images/no.jpg'"
                />
              </div>
            </div> -->
                <div class="item2 item">
                  <div class="col-sm-12"><b>Họ tên:</b> {{$user->ten}} </div>
                  <div class="col-sm-12">
                    <b>Ngày sinh:</b>
                    {{ date('d-m-Y', strtotime($user->birthdate)) }}
                  </div>
                        <div class="col-sm-12">
                            <b>Tỉnh:</b> {{ $user->diachi }}
                        </div>
                        <div class="col-sm-12">
                            <b>Quê quán:</b> {{ $user->quequan }}
                        </div>
                        <div class="col-sm-12"><b>Email:</b> {{ $user->email }}</div>
                        <div class="col-sm-12"><b>Điện thoại:</b> {{ $user->sdt }}</div>
                        <div class="col-sm-12">
                            <b>Nơi công tác:</b> {{ $user->noilamviec }}
                        </div>
                    </div>
                    <div class="item3 item">
                        <div class="col-sm-12"><b>Lớp:</b> {{ $user->lop }}</div>
                        <div class="col-sm-12"><b>Niên khóa:</b> {{ $user->nienkhoa }}</div>
                        <div class="col-sm-12"><b>Khoa:</b>  {{ $user->khoa }}</div>
                        <div class="col-sm-12">
                            <b>Ngành:</b> {{ $user->chuyennganh }}
                        </div>
                        <div class="col-sm-12"><b>Hệ đào tào:</b> {{ $user->hedaihoc }}</div>
                    </div>
                </div>

                <!-- <aside class="social-media-icons">
            <a href="https://twitter.com/zephybite" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
            <a href="https://codepen.io/zephyo" target="_blank">
                            <i class="fab fa-codepen"></i>
                        </a>
            <a href="https://github.com/zephyo" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
            </a>
            <a href="https://medium.com/@zephyo" target="_blank">
                            <i class="fab fa-medium"></i>
                        </a>
          </aside> -->
            </section>
        </section>
        <div style="margin-left: -3rem" class="item4 col-sm-12 text-right">
            <!--                             <input type="button" onclick="BackPage()" value="<< Quay lại" class="tsButton" />-->
            <a href=" {{route('lists')}} "><button href="https://www.hutech.edu.vn/cuusinhvien/danh-sach-cuu-sinh-vien"
              class="btnback btn btn-danger btn-sm">
              Quay lại
          </button></a>
        </div>
        <!-- <section class="statistics">
        <button class="icon arrow left"></button>
        <button class="icon arrow right"></button>
        <p><strong>29</strong> Followers</p>
        <p><strong>184</strong> Following</p>
        <p><strong>6</strong> Likes</p>
      </section> -->
        <button class="icon close"></button>
    </main>
    <script src="{{ asset('{{ asset('js/scripts_old.js') }}') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('{{ asset('js/scripts.js') }}') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
</body>

</html>
