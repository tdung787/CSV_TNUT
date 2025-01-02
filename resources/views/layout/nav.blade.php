<script src="https://app.tudongchat.com/js/chatbox.js"></script>
<script>
  const tudong_chatbox = new TuDongChat('0YFgg_OFQsWrX129_BjYW')
  tudong_chatbox.initial()
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-1" id="mainNav">
    <div class="container-fluid px-2 px-lg-5">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('icon/tnutlogo.png')}}" id="imagetnutheader"
          /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          {{-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> --}}
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
            <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  TRANG CHỦ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('home')}}">Trang chủ CSV</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="https://www.tnut.edu.vn/">Trang chủ TNUT</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  GIỚI THIỆU
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('sumenh') }}">Sứ mệnh</a></li>

                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="{{ route('hoicodiencactinh') }}">Hội cơ điện các tỉnh</a>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li><a class="dropdown-item" href="{{ route('banchaphanh') }}">Ban chấp hành</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="{{ route('dieule') }}">Điều lệ hoạt động</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="{{ route('thuvienhinhanh') }}">Thư viện hình ảnh</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  KẾT NỐI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="{{ route('lists') }}">Danh sách cựu sinh viên</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                <a class="dropdown-item" href=" {{route('tieubieu')}} "
                      >Gương mặt cựu sinh viên tiêu biểu</a
                    >
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="{{route('tinhnguoicodien')}}"
                      >Tình người cơ điện</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  HỢP TÁC
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="https://htdn.tnut.edu.vn/">Doanh nghiệp tuyển dụng</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="https://htdn.tnut.edu.vn/">Sinh viên tìm việc</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="https://htdn.tnut.edu.vn/c1080/thong-tin-thuc-tap-va-tuyen-dung-trong-nuoc">Cơ hội thực tập</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="https://www.tnut.edu.vn/tuyen-dung.html">Kết nối doanh nghiệp</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('sukien') }}"
                  >BẢN TIN <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  CHIA SẺ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('quytuhao')}}">Quỹ tự hào TNUT</a></li>
                  <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="{{route('quyphattrien')}}"
                      >Quỹ phát triển tài năng ĐHCĐ</a
                    >
                  </li>
                  @auth
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href=" {{route('dangkydonggop')}} ">Đăng ký đóng góp</a></li>
                  @endauth

                </ul>
               @guest
               <li class="nav-item active">
                <a style="color: var(--bs-link-color);" class="nav-link" href="{{ route('login')  }}"
                  >ĐĂNG NHẬP <span class="sr-only"></span
                ></a>
              </li>
               <li class="nav-item active">
                <a style="color: var(--bs-link-color);" class="nav-link" href="{{ route('register')  }}"
                  >ĐĂNG KÝ <span class="sr-only"></span
                ></a>
              </li>
               @endguest
                @auth
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    {{ Auth::user()->ten }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (!Auth::user()->is_admin)
                    <li><a class="dropdown-item" href="{{ route('lists.show',Auth::user()->id) }}">Thông tin cá nhân</a></li>
                    <div class="dropdown-divider"></div>
                    @endif
                        @if (Auth::user()->is_admin)
                        <li>
                          <a class="dropdown-item" href="{{ route('admin') }}">Admin panel</a>
                          <div class="dropdown-divider"></div>
                        </li>
                        @endif
                        @if (Auth::user()->is_admin || Auth::user()->is_poster)
                        <li>
                          <a class="dropdown-item" href="{{ route('dangbai') }}">Đăng bài</a>
                          <div class="dropdown-divider"></div>
                        </li>
                        @endif
                        <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <li><a class="dropdown-item" style="color: red"  href="#" onclick="this.closest('form').submit();return false;">Đăng xuất</a></li>
                    </form>
                  </ul>
                </li>
                @endauth
              </li>
        </div>
      </div>
    </div>
  </nav>
