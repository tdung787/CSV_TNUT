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
    <title>CSV TNUT | Quỹ phát triển TNUT</title>
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
      
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
     {{-- style_old đã bao gồm Boostrap --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
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
          <h1 class="fw-bold tits">Quỹ phát triển tài năng ĐHCĐ</h1>
          <p>
            <i><b>Quỹ Phát Triển Tài Năng Đại Học Cơ Điện:</b> Một Nền Tảng Cho Sự Thành Công Của Sinh Viên</i><br>
          </p>
          <p><b>Giới thiệu:</b> Trong bài viết này, chúng ta sẽ tìm hiểu về Quỹ Phát Triển Tài Năng Đại Học Cơ Điện, một tổ chức ủng hộ sinh viên đang học tại trường Đại học Kỹ thuật Công nghiệp Thái Nguyên (tiền thân là trường Đại học Cơ Điện). Quỹ này đã đóng góp không nhỏ cho sự phát triển của các tài năng trẻ, giúp họ vượt qua khó khăn và đạt được những thành tựu xuất sắc trong học tập và cuộc sống.</p>
          <p><i>Mục tiêu của quỹ:</i>
            <ul id="list">
                <li>Hỗ trợ tài chính: Quỹ cung cấp học bổng và tài trợ cho sinh viên có hoàn cảnh khó khăn, giúp họ tiếp tục học tập mà không phải lo lắng về chi phí.</li>
                <li>Khuyến khích học tập xuất sắc: Quỹ thúc đẩy việc học tập xuất sắc bằng cách tạo ra các chương trình khuyến khích và giải thưởng dành cho sinh viên có thành tích cao.</li>
                <li>Phát triển kỹ năng và sự nghiệp: Quỹ hỗ trợ các khóa học, buổi thảo luận, và hoạt động ngoại khóa để giúp sinh viên phát triển kỹ năng và chuẩn bị cho tương lai nghề nghiệp.</li>
            </ul>
          </p>
          <p><i>Những thành tựu của quỹ:</i>
            <ul id="list">
                <li>Học bổng: Quỹ đã trao học bổng cho hàng trăm sinh viên, giúp họ tiếp tục học tập và đạt được những kết quả xuất sắc.</li>
                <li>Chương trình hỗ trợ học tập: Quỹ tổ chức các buổi học thảo, lớp học bổ ích, và tư vấn nghề nghiệp để giúp sinh viên phát triển toàn diện.</li>
                <li>Các dự án xã hội: Quỹ tham gia vào các dự án xã hội, từ việc xây dựng trường học đến việc hỗ trợ cộng đồng.</li>
            </ul>
          </p>
          <p><b>Kêu gọi ủng hộ:</b> Chúng ta cần sự đóng góp của tất cả mọi người để Quỹ Phát Triển Tài Năng Đại Học Cơ Điện có thể tiếp tục hoạt động và hỗ trợ sinh viên. Hãy cùng nhau xây dựng một tương lai tốt đẹp cho thế hệ trẻ!</p>
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
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      
      crossorigin="anonymous"
    ></script>
  </body>
</html>
