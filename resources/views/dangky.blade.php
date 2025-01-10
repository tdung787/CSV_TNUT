<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSV TNUT | Đăng ký</title>
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
              <span class="details">Họ và tên</span>
              <input name="name" class="form-control" type="text" id="họ-tên" />
              @error('name')
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
              <span class="details">Nhập lại mật khẩu</span>
              <input name="password_confirmation" class="form-control" type="password" id="password_confirmation" />
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
  </body>
</html>
