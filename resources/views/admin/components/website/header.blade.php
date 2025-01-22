<div class="menubar w-100 text-right d-flex d-lg-none position-fixed align-items-center scroll_down ">
    <a href="/" title="HTX" class="mr-auto ml-3">
        <img alt="HTX"
            src="https://file.hstatic.net/200000830049/file/logo_mobi_ce9f963276744aa4ab19bf3387ee1b30.png"
            class="img-fluid mb_logo">
    </a>

    <a href="/account/login" class="mb_login ml-auto d-flex rounded-circle justify-content-center align-items-center"
        title="Đăng nhập">
        <svg width="32" height="32">
            <use href="#svg-account"></use>
        </svg>
    </a>

</div>
<div class="bg_head position-fixed w-100 scroll_down "></div>
<div class="col-left position-fixed d-flex flex-column pt-2 pb-2 pc w-100">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-2 d-none d-lg-block">
                <a href="/" title="HTX" class="logo" style="display: flex">
                    <picture class="position-relative w-100 m-0 ratio1by4 d-block aspect">
                        <img alt="HTX" src="{{ asset('website/images/logo_htx_rm_bg.png') }}"
                            class="img-fluid d-block img position-absolute loaded">
                    </picture>
                    <p style="width: 400px;font-weight: 700;margin: 0;color: green;">Hợp tác xã <br> Trường Thuận</p>
                </a>
            </div>
            <div class="col-12 col-lg-10">
                <div class="d-lg-flex align-items-center position-static pr-menu">
                    <div class="search-block mr-3">
                        <form action="/search" method="get"
                            class="js-search-form left-search position-relative mt-4 mt-lg-0 pt-2 pb-2 pt-lg-1 pb-lg-1">
                            <input type="hidden" name="type" value="product">
                            <input type="text" id="js-search-form" placeholder="Bạn muốn tìm thông tin gì?"
                                value="" maxlength="70" name="q"
                                class="form-control pl-2 pl-lg-3 pr-5 rounded-10" autocomplete="off" required="">
                            <input type="submit" class="border-0 position-absolute p-0">
                            <div class="w-100 position-absolute rounded-10 searchResult d-none modal-open">
                                <div class="overflow-auto search-result-warpper px-2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="info-block mr-3">
                        <a href="tel:0339902798" title="0339902798" class="align-items-center d-flex">
                            <span class="play0 d-none d-xl-block">
                                <svg width="32" height="32">
                                    <use href="#svg-phone"></use>
                                </svg>
                            </span>
                            <b><small>Hoiline</small> <br>0339902798</b>
                        </a>
                    </div>
                    <div class="navigation-bottom mt-auto mt-lg-0">
                        <div class="b_use d-none d-lg-flex align-items-stretch">

                            <div id="js-login-toggle"
                                class="btn-account d-none d-lg-flex align-items-center justify-content-center mr-3">
                                <a href="{{ route('web.profile.index') }}" title="Tài khoản">
                                    <svg width="26" height="26" class="mr-2 d-none d-xl-block">
                                        <use href="#svg-account"></use>
                                    </svg>
                                </a>

                                <div id="m_login" class="pop_login">
                                    @guest
                                        <!-- Hiển thị khi chưa đăng nhập -->
                                        <a href="/login" class="item_login d-block font-weight-bold small"
                                            title="Đăng nhập">Đăng nhập</a>
                                        <a href="/register" class="item_login d-block font-weight-bold small"
                                            title="Đăng ký">Đăng ký</a>
                                    @else
                                        <!-- Hiển thị khi đã đăng nhập -->
                                        <div class="user-info">
                                            <a href="{{ route('web.profile.index') }}"> <span class="font-weight-bold small">Xin chào, {{ Auth::user()->name }}</span></a>
                                           
                                            <a href="/logout" class="item_login d-block font-weight-bold small"
                                                title="Đăng xuất"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Đăng xuất
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    @endguest
                                </div>

                            </div>
                            <a class="p-1 btn-cart position-relative d-inline-flex head_svg justify-content-center align-items-center rounded-10"
                                title="Giỏ hàng" href="{{ route('web.carts.index') }}">
                                <span
                                    class="b_ico_Cart text-center d-flex justify-content-center align-items-center position-relative">
                                    <svg width="26" height="26">
                                        <use href="#svg-shopping-cart"></use>
                                    </svg>
                                    <span
                                        class="btn-cart-indicator position-absolute font-weight-bold text-center
                                         text-white">{{ $cartQuantity }}</span>
                                </span>
                                <small class="d-none d-xl-block ml-lg-1">Giỏ hàng</small>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
