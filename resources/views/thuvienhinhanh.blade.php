<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Đồ án Viễn Thông 2 | Thư viện hình ảnh</title>
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
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
         crossorigin="anonymous" />
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

        /*thuvienhinhanh*/
        #listNews .inner {
            position: relative;
        }

        #listNews .inner h2 {
            font-size: 18px;
        }

        #listNews .inner h2 {
            line-height: normal;
            font-weight: bold;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <main>
        <div class="container-lg mb-5">
            <div class="minTl mt-4">Hình ảnh</div>
            <div class="row g-4" id="listNews">
                <div class="col-md-3 col-sm-6">
                    <div class="inner">
                        <div><a href="https://tnut.edu.vn/thong-bao-to-chuc-ngay-hoi-viec-lam-tnut-2023-dz11809.html"
                                title="Ngày hội việc làm TNUT 2023"><img src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_11827.jpg" width="100%"
                                    class="rounded" alt="Ngày hội việc làm TNUT 2023"></a></div>
                        <div class="text rounded-bottom mt-3">
                            <h2><a href="https://tnut.edu.vn/thong-bao-to-chuc-ngay-hoi-viec-lam-tnut-2023-dz11809.html"
                                    title="Ngày hội việc làm TNUT 2023">Ngày hội việc làm TNUT 2023</a></h2>
                            <div class="small text-secondary">20/04/2023</div>
                            <div></div>
                            <div><a href="https://tnut.edu.vn/thong-bao-to-chuc-ngay-hoi-viec-lam-tnut-2023-dz11809.html"
                                    class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="inner">
                        <div><a href="# "
                                title="Giấy chứng nhận kiểm định chất lượng cơ sở giáo dục và chương trình đào tạo"><img
                                    src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_11812.jpg" width="100%" class="rounded"
                                    alt="Giấy chứng nhận kiểm định chất lượng cơ sở giáo dục và chương trình đào tạo"></a>
                        </div>
                        <div class="text rounded-bottom mt-3">
                            <h2><a href="#"
                                    title="Giấy chứng nhận kiểm định chất lượng cơ sở giáo dục và chương trình đào tạo">Giấy
                                    chứng nhận kiểm định chất lượng cơ sở giáo dục và chương trình đào tạo</a></h2>
                            <div class="small text-secondary">10/04/2023</div>
                            <div></div>
                            <div><a href="#" class="btn btn-sm text-danger btn-readmore">Chi
                                    tiết</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="inner">
                        <div><a href="https://tnut.edu.vn/khao-sat-so-bo-danh-gia-chat-luong-chuong-trinh-dao-tao-chinh-quy-trinh-do-dai-hoc-dz9575.html"
                                title="Khảo sát sơ bộ đánh giá chất lượng chương trình đào tạo chính quy trình độ đại học"><img
                                    src="https://www.tnut.edu.vn/uploads/art/imgs/thumb/art_832_556_9575.jpg" width="100%" class="rounded"
                                    alt="Khảo sát sơ bộ đánh giá chất lượng chương trình đào tạo chính quy trình độ đại học"></a>
                        </div>
                        <div class="text rounded-bottom mt-3">
                            <h2><a href="https://tnut.edu.vn/khao-sat-so-bo-danh-gia-chat-luong-chuong-trinh-dao-tao-chinh-quy-trinh-do-dai-hoc-dz9575.html"
                                    title="Khảo sát sơ bộ đánh giá chất lượng chương trình đào tạo chính quy trình độ đại học">Khảo
                                    sát sơ bộ đánh giá chất lượng chương trình đào tạo chính quy trình độ đại học</a>
                            </h2>
                            <div class="small text-secondary">08/12/2022</div>
                            <div></div>
                            <div><a href="https://tnut.edu.vn/khao-sat-so-bo-danh-gia-chat-luong-chuong-trinh-dao-tao-chinh-quy-trinh-do-dai-hoc-dz9575.html"
                                    class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/le-ky-niem-50-nam-ngay-thanh-lap-khoa-co-khi-va-khoa-dien-dz2658.html" title="Lễ kỷ niệm 50 năm ngày thành lập khoa Cơ khí và khoa Điện"><img src="img/thuvienhinhanh/4.jpg" width="100%" class="rounded" alt="Lễ kỷ niệm 50 năm ngày thành lập khoa Cơ khí và khoa Điện"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/le-ky-niem-50-nam-ngay-thanh-lap-khoa-co-khi-va-khoa-dien-dz2658.html" title="Lễ kỷ niệm 50 năm ngày thành lập khoa Cơ khí và khoa Điện">Lễ kỷ niệm 50 năm ngày thành lập khoa Cơ khí và khoa Điện</a></h2>
                                <div class="small text-secondary">06/12/2022</div>
                                <div></div>
                                <div><a href="/le-ky-niem-50-nam-ngay-thanh-lap-khoa-co-khi-va-khoa-dien-dz2658.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/thu-vien-truong-dz2608.html" title="Thư viện trường"><img src="img/thuvienhinhanh/5.jpg" width="100%" class="rounded" alt="Thư viện trường"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/thu-vien-truong-dz2608.html" title="Thư viện trường">Thư viện trường</a></h2>
                                <div class="small text-secondary">03/12/2022</div>
                                <div></div>
                                <div><a href="/thu-vien-truong-dz2608.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/hoat-dong-sinh-vien-tnut-dz1018.html" title="Hoạt động sinh viên TNUT"><img src="img/thuvienhinhanh/6.jpg" width="100%" class="rounded" alt="Hoạt động sinh viên TNUT"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/hoat-dong-sinh-vien-tnut-dz1018.html" title="Hoạt động sinh viên TNUT">Hoạt động sinh viên TNUT</a></h2>
                                <div class="small text-secondary">23/11/2022</div>
                                <div></div>
                                <div><a href="/hoat-dong-sinh-vien-tnut-dz1018.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/su-kien-tnut-dz1021.html" title="Sự kiện TNUT"><img src="img/thuvienhinhanh/7.jpg" width="100%" class="rounded" alt="Sự kiện TNUT"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/su-kien-tnut-dz1021.html" title="Sự kiện TNUT">Sự kiện TNUT</a></h2>
                                <div class="small text-secondary">23/11/2022</div>
                                <div></div>
                                <div><a href="/su-kien-tnut-dz1021.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/khuon-vien-truong-tnut-dz1020.html" title="Khuôn viên trường TNUT"><img src="img/thuvienhinhanh/8.jpg" width="100%" class="rounded" alt="Khuôn viên trường TNUT"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/khuon-vien-truong-tnut-dz1020.html" title="Khuôn viên trường TNUT">Khuôn viên trường TNUT</a></h2>
                                <div class="small text-secondary">23/11/2022</div>
                                <div></div>
                                <div><a href="/khuon-vien-truong-tnut-dz1020.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="inner">
                            <div><a href="/sinh-vien-hoc-tap-tai-tnut-dz1017.html" title="Sinh viên học tập tại TNUT"><img src="img/thuvienhinhanh/9.jpg" width="100%" class="rounded" alt="Sinh viên học tập tại TNUT"></a></div>
                            <div class="text rounded-bottom mt-3">
                                <h2><a href="/sinh-vien-hoc-tap-tai-tnut-dz1017.html" title="Sinh viên học tập tại TNUT">Sinh viên học tập tại TNUT</a></h2>
                                <div class="small text-secondary">23/11/2022</div>
                                <div></div>
                                <div><a href="/sinh-vien-hoc-tap-tai-tnut-dz1017.html" class="btn btn-sm text-danger btn-readmore">Chi tiết</a></div>
                            </div>
                        </div>
                    </div>
        </div> --}}
                {{-- <ul class="pagination justify-content-center pagecs"><li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li><li class="active"><a href="#">1</a></li><li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li></ul> --}}
            </div>
        </div>
    </main>

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
</body>

</html>
