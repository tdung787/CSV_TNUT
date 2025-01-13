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
        
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
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
                    <div class="title">Cập nhật thông tin cựu sinh viên</div>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('alumni.update', $alumnus->id) }}">
                        @csrf
                        @method('put')
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Họ và tên</span>
                                <input name="ten" class="form-control" type="text" id="họ-tên" value="{{ $alumnus->ten }}" />
                                @error('ten')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Ngày sinh</span>
                                <input name="ngaysinh" class="form-control" type="date" id="ngày-sinh" value="{{ $alumnus->ngaysinh }}" />
                                @error('ngaysinh')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Điện thoại</span>
                                <input name="sdt" class="form-control" type="tel" id="điện-thoại" value="{{ $alumnus->sdt }}" />
                                @error('sdt')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input name="email" class="form-control" type="tel" id="điện-thoại" value="{{ $alumnus->email }}" />
                                @error('email')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Tỉnh</span>
                                <input name="diachi" class="form-control" type="text" id="địa-chỉ" value="{{ $alumnus->diachi }}" />
                                @error('diachi')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Quê quán</span>
                                <input name="quequan" class="form-control" type="text" id="quê-quán" value="{{ $alumnus->quequan }}" />
                                @error('quequan')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="long-input-box">
                                <span class="details">Nơi làm việc</span>
                                <input class="form-control" type="text" name="noilamviec" id="nơi-làm-việc" value="{{ $alumnus->noilamviec }}" />
                                @error('noilamviec')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Niên khoá</span>
                                <input class="form-control" type="text" name="nienkhoa" id="khoá" value="{{ $alumnus->nienkhoa }}" />
                                @error('nienkhoa')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Lớp</span>
                                <input class="form-control" type="text" name="lop" id="lớp" value="{{ $alumnus->lop }}" />
                                @error('lop')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Khoa</span>
                                <select class="form-select" name="khoa" id="khoa">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Cơ khí" {{ $alumnus->khoa == 'Cơ khí' ? 'selected' : '' }}>Cơ khí</option>
                                    <option value="Điện tử" {{ $alumnus->khoa == 'Điện tử' ? 'selected' : '' }}>Điện tử</option>
                                    <option value="Điện" {{ $alumnus->khoa == 'Điện' ? 'selected' : '' }}>Điện</option>
                                    <option value="Kỹ thuật ô tô và máy động lực" {{ $alumnus->khoa == 'Kỹ thuật ô tô và máy động lực' ? 'selected' : '' }}>Kỹ thuật ô tô và máy động lực</option>
                                    <option value="Xây dựng và môi trường" {{ $alumnus->khoa == 'Xây dựng và môi trường' ? 'selected' : '' }}>Xây dựng và môi trường</option>
                                    <option value="Công nghệ cơ điện và điện tử" {{ $alumnus->khoa == 'Công nghệ cơ điện và điện tử' ? 'selected' : '' }}>Công nghệ cơ điện và điện tử</option>
                                    <option value="Kinh tế công nghiệp" {{ $alumnus->khoa == 'Kinh tế công nghiệp' ? 'selected' : '' }}>Kinh tế công nghiệp</option>
                                    <option value="Quốc tế" {{ $alumnus->khoa == 'Quốc tế' ? 'selected' : '' }}>Quốc tế</option>
                                </select>
                                @error('khoa')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Chuyên ngành</span>
                                <select class="form-select" name="chuyennganh" id="chuyennganh">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Kỹ thuật cơ điện tử" {{ $alumnus->chuyennganh == 'Kỹ thuật cơ điện tử' ? 'selected' : '' }}>Kỹ thuật cơ điện tử</option>
                                    <option value="Kỹ thuật vật liệu" {{ $alumnus->chuyennganh == 'Kỹ thuật vật liệu' ? 'selected' : '' }}>Kỹ thuật vật liệu</option>
                                    <option value="Kỹ thuật cơ khí" {{ $alumnus->chuyennganh == 'Kỹ thuật cơ khí' ? 'selected' : '' }}>Kỹ thuật cơ khí</option>
                                    <option value="Kỹ thuật điện" {{ $alumnus->chuyennganh == 'Kỹ thuật điện' ? 'selected' : '' }}>Kỹ thuật điện</option>
                                    <option value="Kỹ thuật điều khiển và tự động hoá" {{ $alumnus->chuyennganh == 'Kỹ thuật điều khiển và tự động hoá' ? 'selected' : '' }}>Kỹ thuật điều khiển và tự động hoá</option>
                                    <option value="Kỹ thuật điện tử - viễn thông" {{ $alumnus->chuyennganh == 'Kỹ thuật điện tử - viễn thông' ? 'selected' : '' }}>Kỹ thuật điện tử - viễn thông</option>
                                    <option value="Kỹ thuật máy tính" {{ $alumnus->chuyennganh == 'Kỹ thuật máy tính' ? 'selected' : '' }}>Kỹ thuật máy tính</option>
                                    <option value="Kỹ thuật cơ khí động lực" {{ $alumnus->chuyennganh == 'Kỹ thuật cơ khí động lực' ? 'selected' : '' }}>Kỹ thuật cơ khí động lực</option>
                                    <option value="Kỹ thuật xây dựng" {{ $alumnus->chuyennganh == 'Kỹ thuật xây dựng' ? 'selected' : '' }}>Kỹ thuật xây dựng</option>
                                    <option value="Kỹ thuật môi trường (Quản lý môi trường và đô thị)" {{ $alumnus->chuyennganh == 'Kỹ thuật môi trường (Quản lý môi trường và đô thị)' ? 'selected' : '' }}>Kỹ thuật môi trường (Quản lý môi trường và đô thị)</option>
                                    <option value="Kỹ thuật môi trường (Kỹ thuật môi trường)" {{ $alumnus->chuyennganh == 'Kỹ thuật môi trường (Kỹ thuật môi trường)' ? 'selected' : '' }}>Kỹ thuật môi trường (Kỹ thuật môi trường)</option>
                                    <option value="Kiến trúc" {{ $alumnus->chuyennganh == 'Kiến trúc' ? 'selected' : '' }}>Kiến trúc</option>
                                    <option value="Kinh tế công nghiệp" {{ $alumnus->chuyennganh == 'Kinh tế công nghiệp' ? 'selected' : '' }}>Kinh tế công nghiệp</option>
                                    <option value="Quản lý công nghiệp" {{ $alumnus->chuyennganh == 'Quản lý công nghiệp' ? 'selected' : '' }}>Quản lý công nghiệp</option>
                                    <option value="Công nghệ kĩ thuật điện, điện tử" {{ $alumnus->chuyennganh == 'Công nghệ kĩ thuật điện, điện tử' ? 'selected' : '' }}>Công nghệ kĩ thuật điện, điện tử</option>
                                    <option value="Kỹ thuật cơ khí (quốc tế)" {{ $alumnus->chuyennganh == 'Kỹ thuật cơ khí (quốc tế)' ? 'selected' : '' }}>Kỹ thuật cơ khí (quốc tế)</option>
                                    <option value="Kỹ thuật điện (quốc tế)" {{ $alumnus->chuyennganh == 'Kỹ thuật điện (quốc tế)' ? 'selected' : '' }}>Kỹ thuật điện (quốc tế)</option>
                                </select>
                                @error('chuyennganh')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Hệ đào tạo</span>
                                <select class="form-select" name="hedaotao" id="hệ-đào-tạo">
                                    <option style="display: none" disabled selected value></option>
                                    <option value="Đại học" {{ $alumnus->hedaotao == 'Đại học' ? 'selected' : '' }}>Đại học</option>
                                    <option value="Thạc sĩ" {{ $alumnus->hedaotao == 'Thạc sĩ' ? 'selected' : '' }}>Thạc sĩ</option>
                                    <option value="Tiến sĩ" {{ $alumnus->hedaotao == 'Tiến sĩ' ? 'selected' : '' }}>Tiến sĩ</option>
                                    <option value="Vừa học vừa làm" {{ $alumnus->hedaotao == 'Vừa học vừa làm' ? 'selected' : '' }}>Vừa học vừa làm</option>
                                </select>
                                @error('hedaotao')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="input-box">
                                <span class="details">Ảnh hồ sơ</span>
                                <input name="image" class="form-control" type="file" />
                                @error('image')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
<script>
    const khoaNgheMap = {
        "Cơ khí": [{
                value: "Kỹ thuật cơ điện tử",
                text: "Kỹ thuật cơ điện tử"
            },
            {
                value: "Kỹ thuật vật liệu",
                text: "Kỹ thuật vật liệu"
            },
            {
                value: "Kỹ thuật cơ khí",
                text: "Kỹ thuật cơ khí"
            }
        ],
        "Điện": [{
                value: "Kỹ thuật điện",
                text: "Kỹ thuật điện"
            },
            {
                value: "Kỹ thuật điều khiển và tự động hoá",
                text: "Kỹ thuật điều khiển và tự động hoá"
            },
        ],
        "Điện tử": [{
                value: "Kỹ thuật điện tử - viễn thông",
                text: "Kỹ thuật điện tử - viễn thông"
            },
            {
                value: "Kỹ thuật máy tính",
                text: "Kỹ thuật máy tính"
            }
        ],
        "Kỹ thuật ô tô và máy động lực": [{
            value: "Kỹ thuật cơ khí động lực",
            text: "Kỹ thuật cơ khí động lực"
        }],
        "Xây dựng và môi trường": [{
                value: "Kỹ thuật xây dựng",
                text: "Kỹ thuật xây dựng"
            },
            {
                value: "Kỹ thuật môi trường (Quản lý môi trường và đô thị)",
                text: "Kỹ thuật môi trường (Quản lý môi trường và đô thị)"
            },
            {
                value: "Kỹ thuật môi trường (Kỹ thuật môi trường)",
                text: "Kỹ thuật môi trường (Kỹ thuật môi trường)"
            },
            {
                value: "Kiến trúc",
                text: "Kiến trúc"
            }
        ],
        "Kinh tế công nghiệp": [{
                value: "Kinh tế công nghiệp",
                text: "Kinh tế công nghiệp"
            },
            {
                value: "Quản lý công nghiệp",
                text: "Quản lý công nghiệp"
            }
        ],
        "Công nghệ cơ điện và điện tử": [{
                value: "Công nghệ chế tạo máy",
                text: "Công nghệ chế tạo máy"
            },
            {
                value: "Công nghệ kĩ thuật điện, điện tử",
                text: "Công nghệ kĩ thuật điện, điện tử"
            }
        ],
        "Quốc tế": [{
                value: "Kỹ thuật cơ khí (quốc tế)",
                text: "Kỹ thuật cơ khí (quốc tế)"
            },
            {
                value: "Kỹ thuật điện (quốc tế)",
                text: "Kỹ thuật điện (quốc tế)"
            }
        ],
        // Add more mappings as needed
    };
</script>
<script>
document.getElementById('khoa').addEventListener('change', function() {
    const selectedKhoa = this.value;
    const chuyennganhSelect = document.getElementById('chuyennganh');
    const currentSelection = chuyennganhSelect.value; // Lưu giá trị hiện tại

    // Disable the department select if no department is selected
    if (!selectedKhoa) {
        chuyennganhSelect.disabled = true;
        chuyennganhSelect.innerHTML = '<option value=""> -Chọn Ngành- </option>';
        return;
    }

    // Clear existing options and enable the department select
    chuyennganhSelect.innerHTML = '<option value=""> -Chọn Ngành- </option>';
    chuyennganhSelect.disabled = false;

    // Populate new options based on selected "Khoa"
    if (khoaNgheMap[selectedKhoa]) {
        khoaNgheMap[selectedKhoa].forEach(function(nghe) {
            const option = document.createElement('option');
            option.value = nghe.value;
            option.text = nghe.text;

            // Đặt tùy chọn được chọn nếu khớp với giá trị đã lưu
            if (nghe.value === currentSelection) {
                option.selected = true;
            }

            chuyennganhSelect.appendChild(option);
        });
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Trigger change event when the document is loaded
    const event = new Event('change');
    document.getElementById('khoa').dispatchEvent(event);
});
</script>
</body>

</html>
