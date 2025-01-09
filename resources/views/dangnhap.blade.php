<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSV TNUT | Sign in</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
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
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(60deg, rgb(255, 87, 25), rgb(55, 63, 218));
      }
      .container {
        max-width: 400px;
        width: 100%;
        background: white;
        padding: 30px 30px;
        border-radius: 10px;
      }
      .container .title {
        font-size: 30px;
        font-weight: 500;
        color: orangered;
        position: relative;
        text-align: center;
      }
      .container form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 10px 12px 10px;
      }
      form .user-details .input-box {
        margin-bottom: 15px;
        width: 100%;
      }
      .user-details .input-box .details {
        font-weight: 500;
        margin: 5px o;
      }
      .user-details .input-box input {
        width: 100%;
        padding: 3px;
        font-size: 16px;
      }
      form .log-in {
        height: 40px;
        width: 100%;
        margin: 20px 0;
      }
      form .log-in input {
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
      form .log-in input:hover {
        color: white;
        background-color: orangered;
      }
      form .forgot {
        text-align: end;
        height: 100%;
        width: 100%;
        color: blue;
        font-size: 16px;
        font-weight: 500;
      }
      form .register {
        text-align: center;
        height: 100%;
        width: 100%;
        color: blue;
        font-size: 16px;
        font-weight: 500;
      }
      .forgot a {
        color: black;
        text-decoration: none;
      }
      .forgot a:hover:not(.active) {
        text-decoration: underline;
      }
      .register a:hover:not(.active) {
        text-decoration: underline;
      }
      .register a {
        color: black;
        text-decoration: none;
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
      }
    </style>
  </head>
  <body>
    <main>
      <div class="container">
        <div class="title">Đăng nhập</div>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">Email</span>
              <input class="form-control" type="email" name="email" id="email" />
              @error('email')
                  <span class="fs-6 text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="input-box">
              <span class="details">Mật khẩu</span>
              <input class="form-control" type="password" name="password" id="password" />
              @error('password')
              <span class="fs-6 text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="forgot">
              <a href="#" title="Quên mật khẩu">Quên mật khẩu?</a>
            </div>
            <div class="form-group log-in">
              <input type="submit" value="Đăng nhập" id="login" />
            </div>
            <div class="register">
              <span
                ><a href="DangKyCSV.html" title="Đăng ký"
                  >Đăng ký tài khoản</a
                ></span
              >
            </div>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
