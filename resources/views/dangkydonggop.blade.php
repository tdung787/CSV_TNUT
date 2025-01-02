<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đồ án Viễn Thông 2 || Đăng ký đóng góp</title>
    <!-- Favicon-->
    <!-- Bootstrap Icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{asset('css/dropdown.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
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
        color: #a61d37;
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
        border-left: 3px solid #a61d37;
      }
      .dong-gop {
        max-width: 720px;
        width: 100%;
        background: white;
        padding: 25px 30px;
        border-radius: 10px;
      }
      .list-group-flush > .list-group-item {
        background: url(/img/bullet.svg) no-repeat 0 1rem;
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
      .dong-gop form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 10px 12px 10px;
      }
      form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
      }
      form .user-details .long-input-box {
        margin-bottom: 15px;
        width: 100%;
      }
      .user-details .input-box .details {
        font-weight: 500;
        margin: 5px o;
      }
      .user-details .long-input-box .details {
        font-weight: 500;
        margin: 5px o;
      }
      .user-details .input-box input {
        width: 100%;
        padding: 3px;
        font-size: 16px;
      }
      .user-details .long-input-box input {
        width: 100%;
        padding: 3px;
        font-size: 16px;
      }
      form .button {
        height: 40px;
        margin: 10px 0;
      }
      form .button input {
        height: 100%;
        width: 100%;
        color: orangered;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        border: 1 solid;
        border-color: orangered;
        border-radius: 10px;
        background-color: white;
      }
      form .button input:hover {
        color: white;
        background-color: orangered;
      }
      .list-group {
      --bs-list-group-border-width: 0px;
      }
    </style>
  </head>
  <body id="page-top">
    <!-- Navigation-->
@include('layout.nav')
    <div class="container-lg mb-5">
      <div class="row">
        <div class="col-md-8 col-ms-12">
          <div class="dong-gop">
            <div class="minTl">Đăng ký đóng góp</div>
            <form enctype="multipart/form-data" action="{{route('register')}}" method="POST">
              <div class="user-details">
                <div class="input-box">
                  <span class="details">Loại đóng góp</span>
                  <select class="form-select" name="chuyennganh" id="chuyennganh">
                    <option style="display:none" disabled selected value> </option>
                    <option value="">Cá nhân</option>
                    <option value="">Doanh nghiệp</option>
                  </select>
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="input-box">
                  <span class="details">Lĩnh vực</span>
                  <select class="form-select" name="hedaihoc" id="hệ-đào-tạo">
                    <option style="display:none" disabled selected value> </option>
                    <option value="">Học bổng sinh viên</option>
                    <option value="">Quỹ phát triển tài năng ĐHCĐ</option>
                    <option value="">Quỹ tự hào TNUT</option>
                  </select>
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="input-box">
                  <span class="details">Họ và tên</span>
                  <input name="ten" class="form-control" type="text" id="họ-tên" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="input-box">
                  <span class="details">Email</span>
                  <input name="email" class="form-control" type="email" id="mail" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="input-box">
                  <span class="details">Công ty/Doanh nghiệp</span>
                  <input name="cty" class="form-control" type="tel" id="điện-thoại" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="input-box">
                  <span class="details">Điện thoại</span>
                  <input name="sdt" class="form-control" type="tel" id="điện-thoại" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="long-input-box">
                  <span class="details">Địa chỉ</span>
                  <input name="diachi" class="form-control" type="text" id="" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="long-input-box">
                  <span class="details">Nội dung</span>
                  <input name="noidung" class="form-control" type="text" id="" />
                  <span class="fs-6 text-danger"></span>
                </div>
                <div class="button">
                  <input type="submit" name="submit" value="Đăng ký đóng góp" id="button" />
                </div>
              </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-sm-12">
            @include('layout.share-sidebar')
          </div>
      </div>
      </div>
    </div>
  </div>
   @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="js/scripts_old.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./slick/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
