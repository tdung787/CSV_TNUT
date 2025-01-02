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
    <title>Đồ án Viễn Thông 2 | Quỹ tự hào TNUT</title>
    <!-- Favicon-->
    <link rel="icon" href="/icon/Logo Khoa FEE_2020 (xanh sam)_Vi.png" />
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
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
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
      .navbar {
        --bs-navbar-padding-y: 0;
        --bs-navbar-brand-padding-y: 0;
        --bs-navbar-brand-margin-end: 0;
        height: 100px;
      }
      .bg-primary {
        background: url(img/bground.jpg) !important;
      }
      .tits{
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
      #list li::marker{
        content: "- ";
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
          <h1 class="minTl" style="margin-top: 6.5%;">Quỹ đóng góp</h1>
          <h1 class="fw-bold tits">Quỹ tự hào TNUT</h1>
          <p>
            <i><b>Quỹ Tự Hào TNUT:</b> Nâng Bước Tài Năng Trẻ</i><br>
          </p>
          <p><b>Lời Ngỏ:</b> Khi nói đến sự hỗ trợ giáo dục và phát triển tài năng, không thể không nhắc đến Quỹ Tự Hào TNUT - một nguồn cảm hứng và sức mạnh cho sinh viên của Trường Đại Học Kỹ Thuật Công Nghiệp Thái Nguyên.</p>
          <p><b>Sứ mệnh của quỹ:</b> Quỹ Tự Hào TNUT được thành lập với mục tiêu không chỉ là hỗ trợ tài chính mà còn là động lực tinh thần, khích lệ sinh viên TNUT phấn đấu và đạt được ước mơ của mình.</p>
          <p><i>Các Hoạt Động Chính:</i>
            <ul id="list">
                <li>Học Bổng Tự Hào: Dành cho sinh viên có thành tích học tập xuất sắc và hoạt động xã hội nổi bật.</li>
                <li>Chương Trình Mentor: Kết nối sinh viên với các cựu sinh viên thành đạt để học hỏi kinh nghiệm và phát triển sự nghiệp.</li>
                <li>Sự Kiện Nghề Nghiệp: Tổ chức các hội thảo, workshop về phát triển kỹ năng và hướng nghiệp.</li>
            </ul>
          </p>
          <p><i>Thành Quả Đạt Được:</i>
            <ul id="list">
                <li>Nâng Cao Chất Lượng Đào Tạo: Quỹ đã góp phần quan trọng trong việc cải thiện chất lượng giáo dục và cơ sở vật chất tại TNUT.</li>
                <li>Tạo Điều Kiện Cho Sinh Viên: Nhiều sinh viên đã nhận được học bổng và sự hỗ trợ cần thiết để tiếp tục con đường học vấn của mình.</li>
            </ul>
          </p>
          <p><b>Lời Kêu Gọi:</b> Chúng tôi kêu gọi cộng đồng, các doanh nghiệp và cựu sinh viên hãy cùng chung tay đóng góp cho Quỹ Tự Hào TNUT, để mỗi sinh viên TNUT đều có cơ hội phát huy tối đa tiềm năng của mình.</p>
          <p><i>Quỹ Tự Hào TNUT không chỉ là quỹ học bổng, mà còn là ngôi nhà chung của những trái tim yêu khoa học và công nghệ, nơi ươm mầm những giấc mơ và hoài bão.</i></p>
        </div>
          <div class="col-md-4 col-sm-12">
            @include('layout.share-sidebar')
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
