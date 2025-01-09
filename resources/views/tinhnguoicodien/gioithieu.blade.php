<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CSV TNUT | Tình người Cơ Điện</title>
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
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
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

        #list li::marker {
            content: "- ";
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <div class="container-lg mb-5">
        <div class="row">
            <div class="col-md-8 col-ms-12">
                <h1 class="minTl" style="margin-top: 6.5%;">KẾT NỐI</h1>
                <h1 class="fw-bold tits">Tình người Cơ Điện</h1>
                <p><i>Tình người trong ngành Cơ Điện:</i>
                <ul id="list">
                    <li>Sinh viên cơ điện thường phải học và làm việc cùng nhau trong các dự án, thí nghiệm và bài tập.
                    </li>
                    <li>Tinh thần đồng đội và sự hỗ trợ lẫn nhau là quan trọng để thành công trong ngành này.</li>
                </ul>
                </p>
                <p><i>Tinh thần học tập và nỗ lực:</i>
                <ul id="list">
                    <li>Sinh viên cơ điện phải đối mặt với nhiều khó khăn trong việc học tập và thực hành.</li>
                    <li>Tuy nhiên, tinh thần học hỏi và kiên nhẫn giúp họ vượt qua mọi thách thức.</li>
                </ul>
                </p>
                <p><i>Ứng dụng thực tế:</i>
                <ul id="list">
                    <li>Sinh viên cơ điện thường tham gia vào các dự án thực tế như thiết kế, lắp ráp và bảo trì hệ
                        thống điện.</li>
                    <li>Tình người trong việc làm giúp họ tạo ra các giải pháp hiệu quả và an toàn cho xã hội.</li>
                </ul>
                </p>
                <p><i>Tương lai nghề nghiệp:</i>
                <ul id="list">
                    <li>Sau khi tốt nghiệp, sinh viên cơ điện có thể làm việc trong các lĩnh vực như thiết kế, lập
                        trình, vận hành và bảo trì thiết bị điện tử.</li>
                    <li>Cơ hội việc làm trong ngành này rất đa dạng và hấp dẫn.</li>
                </ul>
                </p>
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
