<div class="navigation-block mr-lg-auto d-none d-lg-block">
    <div class="container">
        <div class="position-relative main_fade">
            <ul id="menu_pc" class="m-0 list-unstyled position-static d-lg-flex">
                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a href="/" title="Trang chủ"
                        class="font-weight-bold d-block py-1  pr-lg-3 pr-2 position-relative active">
                        Trang chủ
                    </a>
                </li>
                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a title="Giới thiệu"
                        class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                        Giới thiệu
                        <i
                            class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                    </a>
                    <i
                        class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                    <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                        style="min-width: max-content">
                        @foreach ($aboutPages as $about)
                            <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                <a href="{{ route('web.abouts.show', $about->slug) }}"
                                    class="py-1 py-lg-2 position-relative js-checkMenu" title="{{ $about->title }}">
                                    {{ $about->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a href="{{ route('web.product.all') }}" title="Sản phẩm"
                        class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                        Sản phẩm
                        <i
                            class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                    </a>
                    <i
                        class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                    <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                        style="min-width: max-content">
                        @foreach ($productCategories as $category)
                            <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                <a href="{{ route('web.product.by_category', $category->slug) }}"
                                    class="py-1 py-lg-2 position-relative js-checkMenu" title="{{ $category->name }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>
                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a href="{{ route('web.post.all') }}" title="Tin tức"
                        class="font-weight-bold d-block py-1 pl-lg-3 pr-2 js-checkMenu position-relative ">
                        Tin tức
                        {{-- <i class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i> --}}
                    </a>
                    {{-- <i
                        class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                    <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                        style="min-width: max-content">
                        @foreach ($postCategories as $category)
                            <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                <a href="{{ route('web.post_categories.show', $category->slug) }}"
                                    class="py-1 py-lg-2 position-relative js-checkMenu" title="{{ $category->title }}">
                                    {{ $category->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul> --}}
                </li>
                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a href="{{ route('web.recruitments.index') }}" title="Liên Kết chuỗi"
                        class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                        Liên kết chuỗi
                    </a>
                </li>

                <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                    <a href="{{ route('web.contacts.index') }}" title="Liên hệ"
                        class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                        Liên hệ
                    </a>
                </li>
                <li class="ml-auto level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
                    <a href="{{ route('web.hethongcuahang.index') }}" title="Hệ thống cửa hàng"
                        class="align-items-center d-flex pt-1 pb-1">
                        <svg width="24" height="24" class="mr-2 fill_light">
                            <use href="#svg-store"></use>
                        </svg>
                        <b>Hệ thống cửa hàng</b>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-mobile position-fixed d-flex flex-column pt-lg-2 pb-lg-2 pt-0 pb-0 d-lg-none" id="col-left-mew">
    <div class="align-items-center menu_mobile position-relative h-100">
        <ul id="menu-mew" class="d-lg-flex justify-content-lg-center list-unstyled m-0 p-0 rounded-10 no_waring">
            <li class="level0 d-block w-100 position-static">
                <a href="/" title="Trang chủ"
                    class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">

                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_1_b1f1859664b74f43a54538ced6918997.png"
                        alt="Trang chủ">
                    <span class="line_1 line_2">Trang chủ</span>
                </a>
                <ul class="lv1 p-1 position-absolute h-100 waring">
                    <li class="level1 position-relative mb-1">
                        <p class="text-center alert alert-warning">
                            Danh mục sản phẩm trống
                        </p>
                    </li>
                </ul>
            </li>

            <li class="level0 d-block w-100 position-static open">
                <a href="javascript:;" title="Sản phẩm"
                    class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">

                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_3_f9056547eb644c02860643877821a031.png"
                        alt="Sản phẩm">
                    <span class="line_1 line_2">Sản phẩm</span>
                </a>
                <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                    <li class="level1 main position-sticky bg-white">
                        <a href="{{ route('web.product.all') }}"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                            title="Xem tất cả">
                            Xem tất cả
                        </a>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/thit-trung"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Thịt trứng">
                            Thịt trứng
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/thit-heo"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Thịt heo">
                                    Thịt heo
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/thit-bo"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Thịt bò">
                                    Thịt bò
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/ga-vit"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Gà, vịt...">
                                    Gà, vịt...
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/trung-cac-loai"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Trứng các loại">
                                    Trứng các loại
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/hai-san"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Hải sản">
                            Hải sản
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/cua-ghe"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Cua - Ghẹ">
                                    Cua - Ghẹ
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/tom"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Tôm">
                                    Tôm
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/ca-cac-loai"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Cá các loại">
                                    Cá các loại
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/hai-san-khac"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Hải sản khác">
                                    Hải sản khác
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/rau-cu"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Rau củ">
                            Rau củ
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/rau-xanh-du-loai"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Rau xanh đủ loại">
                                    Rau xanh đủ loại
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/cu-qua-tuoi"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Củ quả tươi">
                                    Củ quả tươi
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/nam-tuoi-cac-loai"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Nấm tươi các loại">
                                    Nấm tươi các loại
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/rau-thom"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Rau thơm">
                                    Rau thơm
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/trai-cay"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Trái cây">
                            Trái cây
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/trai-cay-tuoi"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Trái cây tươi">
                                    Trái cây tươi
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/trai-cay-kho"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Trái cây khô">
                                    Trái cây khô
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/trai-cay-dong-lanh"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Trài cây đông lạnh">
                                    Trài cây đông lạnh
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/do-kho"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Đồ khô">
                            Đồ khô
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/ngu-coc-4-mua"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Ngũ cốc 4 mùa">
                                    Ngũ cốc 4 mùa
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/hat-dinh-duong"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Hạt dinh dưỡng">
                                    Hạt dinh dưỡng
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/hoa-qua-say"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Hoa quả sấy">
                                    Hoa quả sấy
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/collections/gia-vi"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Gia vị">
                            Gia vị
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                            <li class="level2 position-relative">
                                <a href="/collections/muoi-tieu"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Muối tiêu">
                                    Muối tiêu
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/mam-cac-loai"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Mắm các loại">
                                    Mắm các loại
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/bo-duong-sua"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Bơ, đường, sữa">
                                    Bơ, đường, sữa
                                </a>
                            </li>
                            <li class="level2 position-relative">
                                <a href="/collections/hat-nem-mi-chinh"
                                    class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                    title="Hạt nêm, mì chính">
                                    Hạt nêm, mì chính
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="level0 d-block w-100 position-static">
                <a href="javascript:;" title="Tin tức"
                    class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">

                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_4_615f94ed5f3542cbb0da8637ffea4967.png"
                        alt="Tin tức">
                    <span class="line_1 line_2">Tin tức</span>
                </a>
                <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                    <li class="level1 main position-sticky bg-white">
                        <a href="/blogs/news"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                            title="Xem tất cả">
                            Xem tất cả
                        </a>
                    </li>
                    <li class="level1 position-relative">
                        <a href="/blogs/cung-mew-vao-bep"
                            class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                            title="Cùng Me vào bếp">
                            Cùng Me vào bếp
                        </a>
                        <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="level0 d-block w-100 position-static">

                <a href="{{ route('web.recruitments.index') }}" title="Liên Kết chuỗi"
                    class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">

                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_5_9a0e91457bbb405b9055972f1baf4330.png"
                        alt="Liên kết chuỗi">
                    <span class="line_1 line_2">Liên kết chuỗi</span>
                </a>
            </li>

            <li class="level0 d-block w-100 position-static">
                <a title="Tin tức"
                    class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_2_bd6c3beae9734bdb99d942d3addbfc6e.png"
                        alt="Giới thiệu">
                    <span class="line_1 line_2">Giới thiệu</span>
                </a>
                {{-- <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                    @foreach ($aboutPages as $about)
                        <li class="level1 main position-sticky bg-white">
                            <a href="{{ route('web.abouts.show', $about->slug) }}"
                                class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                                title="{{ $about->title }}">
                                {{ $about->title }}
                            </a>
                        </li>
                    @endforeach

                </ul> --}}
            </li>

            <li class="level0 d-block w-100 position-static">

                <a href="{{ route('web.contacts.index') }}" title="Liên hệ"
                    class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">

                    <img class="d-block pb-2 m-auto"
                        src="https://file.hstatic.net/200000830051/file/icon_menu_6_f0612043abcc442094295062e44d7bd2.png"
                        alt="Liên hệ">
                    <span class="line_1 line_2">Liên hệ</span>
                </a>
            </li>
        </ul>
    </div>
    <a class="align-items-center close_menu_mobile d-flex justify-content-center position-absolute d-lg-none"
        href="javascript:;" title="Đóng">
        <svg width="18" height="18">
            <use href="#svg-close"></use>
        </svg>
    </a>

</div>
