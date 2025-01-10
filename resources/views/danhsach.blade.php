<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSV TNUT | Danh sách cựu sinh viên</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/alumnus-list.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<style>
    body {
        overflow-x: hidden;
        margin: 0;
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

    #alumnus a {
        color: blue;
    }

    .textpane a {
        text-decoration: none;
        color: #333;
    }

    .textpane a:hover {
        text-decoration: underline;
    }

    #alumnus .table a.table-link.danger {
        color: red;
    }

    .search-bar {
        margin: 3% 0;
    }

    .form-inline {
        display: flex;
        margin: 10% 0;
        position: relative;
        justify-content: end;
    }

    .khoa {
        width: 15%;
        height: 100%;
    }

    .chuyen-nganh {
        margin-left: 1%;
        width: 15%;
        height: 100%;
    }

    .name {
        margin: 0 1%;
        width: 15%;
        height: 100%;
    }

    .button .btn {
        margin: 0 1%;
        font-size: 1px;
        width: 100%;
        height: 100%;
        padding: 0 5px;
    }

    #alumnus .container {
        margin: 5% 5% 20% 5%;
    }

    .user-link {
        text-decoration: none;
    }

    .title {
        margin: 1% 0%;
        font-size: 30px;
        font-weight: 600;
        color: orangered;
        position: relative;
        text-align: center;
    }

    .fa-stack .table-link {
        text-align: end;
    }

    .details {
        border: none;
        border-radius: 10px;
        /* background-color: hsl(0, 94%, 63%); */
        padding: 2%;
        margin-bottom: 50px;
    }

    .pagination {
        --bs-pagination-active-bg: blue;
        --bs-pagination-active-border-color: blue;
        --bs-pagination-focus-box-shadow: blue;
    }

    #container {
        border: 1px solid;
        border-color: darkorange;
    }

    #article {
        padding-right: calc(var(--bs-gutter-x)* 0);
        padding-left: calc(var(--bs-gutter-x)* 0);
    }
</style>

<body>
    @include('layout.nav')
    <div class="container mt-4" id="alumnus">
        <div id="container" class="details bg-light">
            <div class="cardTl title">Danh sách cựu sinh viên</div>
            <div class="search-bar">
                <form action="{{ route('lists') }}" method="GET" class="form-inline my-2 my-sm-0">
                    <div class="khoa">
                        <select class="form-select" name="khoa" id="khoa">
                            <option value=""> -Chọn Khoa- </option>
                            <option value="Cơ khí" {{ request()->input('khoa') == 'Cơ khí' ? 'selected' : '' }}>Cơ khí
                            </option>
                            <option value="Điện" {{ request()->input('khoa') == 'Điện' ? 'selected' : '' }}>Điện
                            </option>
                            <option value="Điện tử" {{ request()->input('khoa') == 'Điện tử' ? 'selected' : '' }}>Điện
                                tử
                            </option>
                            <option value="Kỹ thuật ô tô và máy động lực"
                                {{ request()->input('khoa') == 'Kĩ thuật ô tô và máy động lực' ? 'selected' : '' }}>Kĩ
                                thuật ô tô và máy động lực
                            </option>
                            <option value="Xây dựng và môi trường"
                                {{ request()->input('khoa') == 'Xây dựng và môi trường' ? 'selected' : '' }}>Xây dựng
                                và môi trường
                            </option>
                            <option value="Công nghệ cơ điện và điện tử"
                                {{ request()->input('khoa') == 'Công nghệ cơ điện và điện tử' ? 'selected' : '' }}>Công
                                nghệ cơ điện và điện tử
                            </option>
                            <option value="Kinh tế công nghiệp"
                                {{ request()->input('khoa') == 'Kinh tế công nghiệp' ? 'selected' : '' }}>Kinh tế công
                                nghiệp
                            </option>
                            <option value="Quốc tế" {{ request()->input('khoa') == 'Quốc tế' ? 'selected' : '' }}>Quốc
                                tế
                            </option>
                        </select>
                    </div>
                    <div class="chuyen-nganh">
                        <select class="form-select" name="chuyennganh" id="chuyennganh">
                            <option value=""> -Chọn Ngành- </option>
                            {{-- cokhi --}}
                            <option value="Kỹ thuật cơ điện tử"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật cơ điện tử' ? 'selected' : '' }}>Kỹ
                                thuật cơ điện tử</option>
                            <option value="Kỹ thuật vật liệu"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật vật liệu' ? 'selected' : '' }}>Kỹ thuật
                                vật liệu</option>
                            <option value="Kỹ thuật cơ khí"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật cơ khí' ? 'selected' : '' }}>Kỹ thuật
                                cơ khí</option>
                            {{-- cokhi --}}
                            {{-- dien --}}
                            <option value="Kỹ thuật điện"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật điện' ? 'selected' : '' }}>Kỹ thuật
                                điện</option>
                            <option value="Kỹ thuật điều khiển và tự động hoá"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật điều khiển và tự động hoá' ? 'selected' : '' }}>
                                Kỹ thuật điều khiển và tự động hoá</option>
                            {{-- dien --}}
                            {{-- dientu --}}
                            <option value="Kỹ thuật điện tử - viễn thông"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật điện tử - viễn thông' ? 'selected' : '' }}>
                                Kỹ thuật điện tử - viễn thông</option>
                            <option value="Kỹ thuật máy tính"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật máy tính' ? 'selected' : '' }}>Kỹ thuật
                                máy tính</option>
                            {{-- dientu --}}
                            {{-- oto --}}
                            <option value="Kỹ thuật cơ khí động lực"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật cơ khí động lực' ? 'selected' : '' }}>
                                Kỹ thuật cơ khí động lực</option>
                            {{-- ôto --}}
                            {{-- xaydung --}}
                            <option value="Kỹ thuật xây dựng"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật xây dựng' ? 'selected' : '' }}>Kỹ thuật
                                xây dựng</option>
                            <option value="Kỹ thuật môi trường (Quản lý môi trường và đô thị)"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật môi trường (Quản lý môi trường và đô thị)' ? 'selected' : '' }}>
                                Kỹ thuật môi trường (Quản lý môi trường và đô thị)</option>
                            <option value="Kỹ thuật môi trường (Kỹ thuật môi trường)"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật môi trường (Kỹ thuật môi trường)' ? 'selected' : '' }}>
                                Kỹ thuật môi trường (Kỹ thuật môi trường)</option>
                            <option value="Kiến trúc"
                                {{ request()->input('chuyennganh') == 'Kiến trúc' ? 'selected' : '' }}>Kiến trúc
                            </option>
                            {{-- xaydung --}}
                            {{-- congnghecodien --}}
                            <option value="Kinh tế công nghiệp"
                                {{ request()->input('chuyennganh') == 'Kinh tế công nghiệp' ? 'selected' : '' }}>Kinh
                                tế công nghiệp</option>
                            <option value="Quản lý công nghiệp"
                                {{ request()->input('chuyennganh') == 'Quản lý công nghiệp' ? 'selected' : '' }}>
                                Quản lý công nghiệp</option>
                            {{-- congnghecodien --}}
                            {{-- kinhte --}}
                            <option value="Kinh tế công nghiệp"
                                {{ request()->input('chuyennganh') == 'Công nghệ chế tạo máy' ? 'selected' : '' }}>Công
                                nghệ chế tạo máy</option>
                            <option value="Công nghệ kĩ thuật điện, điện tử"
                                {{ request()->input('chuyennganh') == 'Công nghệ kĩ thuật điện, điện tử' ? 'selected' : '' }}>
                                Công nghệ kĩ thuật điện, điện tử</option>
                            {{-- kinhte --}}
                            {{-- quocte --}}
                            <option value="Kỹ thuật cơ khí (quốc tế)"
                                {{ request()->input('chuyennganh') == 'Kỹ thuật cơ khí (quốc tế)' ? 'selected' : '' }}>
                                Kỹ thuật cơ khí (quốc tế)
                            </option>
                            <option value="Kỹ thuật điện (quốc tế)"
                                {{ request()->input('chuyennganh') == 'Kĩ thuật điện (quốc tế)' ? 'selected' : '' }}>Kĩ
                                thuật điện (quốc tế)</option>
                            {{-- quocte --}}
                        </select>
                    </div>
                    <div class="chuyen-nganh">
                        <input value="{{ request('lop', null) }}" class="form-control mr-sm-2" name="lop"
                            type="text" placeholder="-Tìm Lớp CSV-" aria-label="Search" />
                    </div>
                    <div class="chuyen-nganh">
                        <input value="{{ request('tinh', null) }}" class="form-control mr-sm-2" name="tinh"
                            type="text" placeholder="-Tìm Tỉnh CSV-" aria-label="Search" />
                    </div>
                    <div class="chuyen-nganh">
                        <input value="{{ request('noilamviec', null) }}" class="form-control mr-sm-2" name="noilamviec"
                            type="text" placeholder="-Tìm Nơi công tác-" aria-label="Search" />
                    </div>
                    <div class="name">
                        <input value="{{ request('search', null) }}" class="form-control mr-sm-2" name="search"
                            type="text" placeholder="-Tìm tên-" aria-label="Search" />
                    </div>
                    <div class="button">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <span class="material-icons"> search </span>
                        </button>
                    </div>
                </form>
            </div>
            <div id="article" class="row" id="alumnus-list" style="margin: 1% 0 10% 0">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        <th><span>Họ và tên</span></th>
                                        <th class="text-center" style="width: 15%"><span>Năm tốt nghiệp</span></th>
                                        <th class="text-center"><span>Khoa</span></th>
                                        <th class="text-center"><span>Chuyên ngành</span></th>
                                        {{-- <th class="text-center"><span>#</span></th> --}}
                                    </tr>
                                </thead>
                                @forelse ($alumni as $alumnus)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ $alumnus->getImageURL() }}" alt="" />
                                                <a href=" {{ route('lists.show', $alumnus->id) }} " class="user-link">
                                                    {{ $alumnus->ten }} </a>
                                                <span class="user-subhead"> {{ $alumnus->email }} </span>
                                            </td>
                                            <td class="text-center">
                                                {{ date('d-m-Y', strtotime($alumnus->ngaysinh)) }}
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-danger"> {{ $alumnus->khoa }} </span>
                                            </td>
                                            <td class="text-center"> {{ $alumnus->chuyennganh }} </td>
                                            {{-- @can('update', $alumnus)
                                                <td style="width: 2%">
                                                    <a href="{{ route('alumnus.edit', $alumnus->id) }}" class="table-link">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            @endcan --}}
                                        </tr>
                                    </tbody>
                                @empty
                                    <p class="fw-bold fs-4 text-center mt-2 text-danger">Không có người dùng</p>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $alumni->withQueryString()->links() }}
        </div>
    </div>
    @include('layout.footer')
    <script src="{{ asset('js/scripts_old.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

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

        document.getElementById('khoa').addEventListener('change', function() {
            const selectedKhoa = this.value;
            const chuyennganhSelect = document.getElementById('chuyennganh');

            // Clear existing options
            chuyennganhSelect.innerHTML = '<option value=""> -Chọn Ngành- </option>';

            // Populate new options based on selected "Khoa"
            if (khoaNgheMap[selectedKhoa]) {
                khoaNgheMap[selectedKhoa].forEach(function(nghe) {
                    const option = document.createElement('option');
                    option.value = nghe.value;
                    option.text = nghe.text;
                    chuyennganhSelect.appendChild(option);
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectedKhoa = document.getElementById('khoa').value;
            if (selectedKhoa) {
                const event = new Event('change');
                document.getElementById('khoa').dispatchEvent(event);
            }
        });
    </script>
</body>

</html>
