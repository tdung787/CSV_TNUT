<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cập nhật thông tin người dùng</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <!-- Favicon-->
    <link rel="icon" href="/icon/Logo Khoa FEE_2020 (xanh sam)_Vi.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
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

        .rounded {
            margin-top: 22.5%;
        }

        .rounded img {
            width: 140px;
            float: left;
            margin-right: 1%;
        }

        .dong-gop {
            max-width: 720px;
            width: 100%;
            background: white;
            padding: 25px 30px;
            border-radius: 10px;
        }

        .list-group-flush>.list-group-item {
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
            margin: 5px 0;
        }

        .user-details .long-input-box .details {
            font-weight: 500;
            margin: 5px 0;
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

        #maincontent {
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layout.nav')
    <div id="main-content" class="container-lg mb-5">
        <div class="row">
            <div class="col-md-8 col-ms-12">
                <div class="dong-gop">
                    <div class="title">Cập nhật thông tin người dùng</div>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Họ và tên</span>
                                <input name="ten" class="form-control" type="text" id="họ-tên" value="{{ $user->ten }}" />
                                @error('ten')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Ngày sinh</span>
                                <input name="birthdate" class="form-control" type="date" id="ngày-sinh" value="{{ $user->birthdate }}" />
                                @error('birthdate')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Điện thoại</span>
                                <input name="sdt" class="form-control" type="tel" id="điện-thoại" value="{{ $user->sdt }}" />
                                @error('sdt')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Tỉnh</span>
                                <input name="diachi" class="form-control" type="text" id="địa-chỉ" value="{{ $user->diachi }}" />
                                @error('diachi')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Quê quán</span>
                                <input name="quequan" class="form-control" type="text" id="quê-quán" value="{{ $user->quequan }}" />
                                @error('quequan')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Nơi làm việc</span>
                                <input class="form-control" type="text" name="noilamviec" id="nơi-làm-việc" value="{{ $user->noilamviec }}" />
                                @error('noilamviec')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Niên khoá</span>
                                <input class="form-control" type="text" name="nienkhoa" id="khoá" value="{{ $user->nienkhoa }}" />
                                @error('nienkhoa')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Lớp</span>
                                <input class="form-control" type="text" name="lop" id="lớp" value="{{ $user->lop }}" />
                                @error('lop')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Khoa</span>
                                <select class="form-select" name="khoa" id="khoa">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Cơ khí" {{ $user->khoa == 'Cơ khí' ? 'selected' : '' }}>Cơ khí</option>
                                    <option value="Điện tử" {{ $user->khoa == 'Điện tử' ? 'selected' : '' }}>Điện tử</option>
                                </select>
                                @error('khoa')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Chuyên ngành</span>
                                <select class="form-select" name="chuyennganh" id="chuyennganh">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Viễn thông" {{ $user->chuyennganh == 'Viễn thông' ? 'selected' : '' }}>Viễn thông</option>
                                    <option value="Điện tử" {{ $user->chuyennganh == 'Điện tử' ? 'selected' : '' }}>Điện tử</option>
                                </select>
                                @error('chuyennganh')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Hệ đào tạo</span>
                                <select class="form-select" name="hedaihoc" id="hệ-đào-tạo">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Đại học" {{ $user->hedaihoc == 'Đại học' ? 'selected' : '' }}>Đại học</option>
                                    <option value="Thạc sĩ" {{ $user->hedaihoc == 'Thạc sĩ' ? 'selected' : '' }}>Thạc sĩ</option>
                                    <option value="Tiến sĩ" {{ $user->hedaihoc == 'Tiến sĩ' ? 'selected' : '' }}>Tiến sĩ</option>
                                    <option value="Vừa học vừa làm" {{ $user->hedaihoc == 'Vừa học vừa làm' ? 'selected' : '' }}>Vừa học vừa làm</option>
                                </select>
                                @error('hedaihoc')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Ảnh hồ sơ</span>
                                <input name="image" class="form-control" type="file" />
                                @error('image')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group button">
                            <input type="submit" name="submit" value="Cập nhật" id="button" />
                        </div>
                    </form>

                </div>
            </div>
    </div>
    </div>
    @include('layout.footer')
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
