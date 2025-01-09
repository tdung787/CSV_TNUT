<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSV TNUT | Sign up</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link
      href="https://bootswatch.com/5/cosmo/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      body {
        padding: 10px;
        background: linear-gradient(60deg, rgb(255, 87, 25), rgb(55, 63, 218));
      }
      .container {
        /* height: 720px; */
        /* width: 100%; */
        margin-top: 50px;
        background: white;
        /* padding: 25px 30px; */
        border-radius: 10px;
      }
      .container .title {
        font-size: 30px;
        font-weight: 500;
        color: orangered;
        position: relative;
        text-align: center;
        padding-top: 5px;
      }
     form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        /* margin: 20px 10px 12px 10px; */
      }
      form .user-details .input-box {
        margin-bottom: 10px;
        width: calc(100% / 2 - 20px);
      }
      form .user-details .long-input-box {
        margin-bottom: 15px;
        width: 100%;
      }
      .user-details .input-box .details {
        font-weight: 500;
        font-size: 13px;
        /* margin: 5px o; */
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
      .container form .button {
        height: 40px;
        margin: 10px 0;
        padding-bottom: 8px;
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
      @media (max-width: 768px) {
        .container {
          max-width: 100%;
        }
        form .user-details .input-box {
          margin-bottom: 15px;
          width: 100%;
        }
        .container form .user-details {
          max-height: 300px;
          overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar {
          width: 0;
        }
        .form-control {
          border: 1px solid;
        }
      }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="title">Đăng ký cựu sinh viên</div>
        <form enctype="multipart/form-data" action="{{route('register')}}" method="POST">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">Email</span>
              <input name="email" class="form-control" type="email" id="mail" />
              @error('email')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Mật khẩu</span>
              <input name="password" class="form-control" type="password" id="mật-khẩu" />
              @error('password')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Họ và tên</span>
              <input name="ten" class="form-control" type="text" id="họ-tên" />
              @error('ten')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Nhập lại mật khẩu</span>
              <input name="password_confirmation" class="form-control" type="password" id="password_confirmation" />
            </div>
            <div class="input-box">
              <span class="details">Ngày sinh</span>
              <input name="birthdate" class="form-control" type="date" id="ngày-sinh" />
              @error('birthdate')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Điện thoại</span>
              <input name="sdt" class="form-control" type="tel" id="điện-thoại" />
              @error('sdt')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Tỉnh</span>
              <input name="diachi" class="form-control" type="text" id="" />
              @error('diachi')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Quê quán</span>
              <input name="quequan" class="form-control" type="text" id="" />
              @error('quequan')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Nơi công tác</span>
              <input
                class="form-control"
                type="text"
                name="noilamviec"
                id="nơi-làm-việc"
              />
              @error('noilamviec')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Niên khoá</span>
              <input class="form-control" type="text" name="nienkhoa" id="khoá" />
              @error('nienkhoa')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Lớp</span>
              <input class="form-control" type="text" name="lop" id="lớp" />
              @error('lop')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Khoa</span>
              <select class="form-select" name="khoa" id="khoa">
                <option style="display:none" disabled selected value> </option>
                <option value="Cơ khí">Cơ khí</option>
                <option value="Điện tử">Điện tử</option>
                <option value="Điện">Điện</option>
                <option value="Kỹ thuật ô tô và máy động lực">Kỹ thuật ô tô và máy động lực</option>
                <option value="Xây dựng và môi trường">Xây dựng và môi trường</option>
                <option value="Công nghệ cơ điện và điện tử">Công nghệ cơ điện và điện tử</option>
                <option value="Kinh tế công nghiệp">Kinh tế công nghiệp</option>
                <option value="Quốc tế">Quốc tế</option>
              </select>
              @error('khoa')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Chuyên ngành</span>
              <select class="form-select" name="chuyennganh" id="chuyennganh">
                <option style="display:none" disabled selected value> </option>
                <option value="Kỹ thuật cơ điện tử">Kỹ thuật cơ điện tử</option>
                <option value="Kỹ thuật vật liệu">Kỹ thuật vật liệu</option>
                <option value="Kỹ thuật cơ khí">Kỹ thuật cơ khí</option>
                <option value="Kỹ thuật điện">Kỹ thuật điện</option>
                <option value="Kỹ thuật điều khiển và tự động hoá">Kỹ thuật điều khiển và tự động hoá</option>
                <option value="Kỹ thuật điện tử - viễn thông">Kỹ thuật điện tử - viễn thông</option>
                <option value="Kỹ thuật máy tính">Kỹ thuật máy tính</option>
                <option value="Kỹ thuật cơ khí động lực">Kỹ thuật cơ khí động lực</option>
                <option value="Kỹ thuật xây dựng">Kỹ thuật xây dựng</option>
                <option value="Kỹ thuật môi trường (Quản lý môi trường và đô thị)">Kỹ thuật môi trường (Quản lý môi trường và đô thị)</option>
                <option value="Kỹ thuật môi trường (Kỹ thuật môi trường)">Kỹ thuật môi trường (Kỹ thuật môi trường)</option>
                <option value="Kiến trúc">Kiến trúc</option>
                <option value="Kinh tế công nghiệp">Kinh tế công nghiệp</option>
                <option value="Quản lý công nghiệp">Quản lý công nghiệp</option>
                <option value="Công nghệ kĩ thuật điện, điện tử">Công nghệ kĩ thuật điện, điện tử</option>
                <option value="Kỹ thuật cơ khí (quốc tế)">Kỹ thuật cơ khí (quốc tế)</option>
                <option value="Kỹ thuật điện (quốc tế)">Kỹ thuật điện (quốc tế)</option>
              </select>
              @error('chuyennganh')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Hệ đào tạo</span>
              <select class="form-select" name="hedaihoc" id="hệ-đào-tạo">
                <option style="display:none" disabled selected value> </option>
                <option value="Đại học">Đại học</option>
                <option value="Thạc sĩ">Thạc sĩ</option>
                <option value="Tiến sĩ">Tiến sĩ</option>
                <option value="Vừa học vừa làm">Vừa học vừa làm</option>
              </select>
              @error('hedaihoc')
              <span class="fs-6 text-danger">{{$message}}</span>
          @enderror
            </div>
            <div class="input-box">
              <span class="details">Ảnh hồ sơ</span>
              <input name="image" class="form-control" type="file">
              @error('image')
                  <span class="text-danger fs-6"> {{ $message }} </span>
              @enderror
            </div>
          </div>
          <div class="form-group button">
            <input type="submit" name="submit" value="Đăng ký" id="button" />
          </div>
        </form>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      
      crossorigin="anonymous"
    ></script>
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

        // Disable the department select if no department is selected
        if (!selectedKhoa) {
            chuyennganhSelect.disabled = true;
            return; // Exit early if no department is selected
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
