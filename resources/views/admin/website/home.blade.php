<x-website-layout>
    <div class="contentWarp ">
        {{-- Slider  --}}
        <section class="mew_mobile_slide">
            <div class="mew_slide swiper-container position-relative swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                style="max-height: 460px;">
                <div class="swiper-wrapper" id="swiper-wrapper" aria-live="off" style="transition-duration: 1000ms;">
                    <style>
                        /* Default height for larger screens */
                        .banner-img {
                            height: 460px;
                            width: 76%;
                        }

                        /* For smaller screens (below 768px), set height to 155px */
                        @media (max-width: 768px) {
                            .banner-img {
                                height: 155px;
                                width: 100%;
                            }
                        }
                    </style>
                    <!-- Banner 1 -->
                    <div class="swiper-slide text-center" data-swiper-slide-index="0"
                        style="width: 1484px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 1000ms;"
                        role="group" aria-label="1 / 4">
                        <a class="d-block w-100 modal-open" href="" title="Banner 1">
                            <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                <img src="{{ asset('website/banner/banner_1.jpg') }}" class="banner-img" alt="Banner 2">
                            </picture>
                        </a>
                    </div>

                    <!-- Banner 2 -->
                    <div class="swiper-slide text-center" data-swiper-slide-index="1"
                        style="width: 1484px; opacity: 1; transform: translate3d(-1484px, 0px, 0px); transition-duration: 1000ms;"
                        role="group" aria-label="2 / 4">
                        <a class="d-block w-100 modal-open" href="" title="Banner 2">
                            <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                <img src="{{ asset('website/banner/banner_2.jpg') }}" alt="Banner 2"class="banner-img"
                                    alt="Banner 2">
                            </picture>
                        </a>
                    </div>

                    <!-- Banner 3 -->
                    <div class="swiper-slide text-center" data-swiper-slide-index="2"
                        style="width: 1484px; opacity: 1; transform: translate3d(-2968px, 0px, 0px); transition-duration: 1000ms;"
                        role="group" aria-label="3 / 4">
                        <a class="d-block w-100 modal-open" href="" title="Banner 3">
                            <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                <img src="{{ asset('website/banner/banner_3.jpg') }}" alt="Banner 3"class="banner-img"
                                    alt="Banner 2">
                            </picture>
                        </a>
                    </div>

                    <!-- Banner 4 -->
                    <div class="swiper-slide text-center" data-swiper-slide-index="3"
                        style="width: 1484px; opacity: 1; transform: translate3d(-4452px, 0px, 0px); transition-duration: 1000ms;"
                        role="group" aria-label="4 / 4">
                        <a class="d-block w-100 modal-open" href="" title="Banner 4">
                            <picture class="position-relative w-100 m-0 ratioslide d-block aspect">
                                <img src="{{ asset('website/banner/banner_4.jpg') }}" alt="Banner 4"class="banner-img"
                                    alt="Banner 2">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination mew_slide_p swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 3"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 4"></span>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>

        <section class="product_poli_wrap pt-3 pb-3 pb-sm-0">
            <div class="container">
                <div
                    class="product_poli swiper-container m-0 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-b3e90e34a7bed3f9" aria-live="off"
                        style="transform: translate3d(0px, 0px, 0px);">


                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4">
                            <div class="item d-flex align-items-center pb-2 pt-2 pl-2 pr-2 pl-sm-0 pr-sm-0">
                                <div class="mr-2 mr-sm-3 w-32">
                                    <picture class="position-relative w-100 m-0 ratio1by1 d-block aspect">
                                        <img src="https://file.hstatic.net/200000823693/file/img_poli_1_1951f9d8cb8d49259c4e3eb3f4683fac_icon.png"
                                            alt="Sản phẩm an toàn" decoding="async">
                                    </picture>
                                </div>
                                <div class="media-body">
                                    Sản phẩm an toàn
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4">
                            <div class="item d-flex align-items-center pb-2 pt-2 pl-2 pr-2 pl-sm-0 pr-sm-0">
                                <div class="mr-2 mr-sm-3 w-32">
                                    <picture class="position-relative w-100 m-0 ratio1by1 d-block aspect">
                                        <img src="https://file.hstatic.net/200000823693/file/img_poli_2_cb649a9dd4ef4f1d88aa2e9664476336_icon.png"
                                            alt="Chất lượng cam kết" decoding="async">
                                    </picture>
                                </div>
                                <div class="media-body">
                                    Chất lượng cam kết
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide" role="group" aria-label="3 / 4">
                            <div class="item d-flex align-items-center pb-2 pt-2 pl-2 pr-2 pl-sm-0 pr-sm-0">
                                <div class="mr-2 mr-sm-3 w-32">
                                    <picture class="position-relative w-100 m-0 ratio1by1 d-block aspect">
                                        <img src="https://file.hstatic.net/200000823693/file/img_poli_3_95b5f4dc7b404a38aa6fe40061470edb_icon.png"
                                            alt="Dịch vụ vượt trội" decoding="async">
                                    </picture>
                                </div>
                                <div class="media-body">
                                    Dịch vụ vượt trội
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide" role="group" aria-label="4 / 4">
                            <div class="item d-flex align-items-center pb-2 pt-2 pl-2 pr-2 pl-sm-0 pr-sm-0">
                                <div class="mr-2 mr-sm-3 w-32">
                                    <picture class="position-relative w-100 m-0 ratio1by1 d-block aspect">
                                        <img src="https://file.hstatic.net/200000823693/file/img_poli_4_8e343af8b9914ccab916aef2f72ae993_icon.png"
                                            alt="Giao hàng nhanh chóng" decoding="async">
                                    </picture>
                                </div>
                                <div class="media-body">
                                    Giao hàng nhanh chóng
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <div class="line_slide bg-white d-none d-sm-block">
                <svg style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 80">
                    <defs>
                        <linearGradient id="mew-poli-svg" x1="0" x2="0" y1="1"
                            y2="0">
                            <stop stop-color="var(--lightLeftColBackground)" offset="0%"></stop>
                            <stop stop-color="var(--lightLeftColBackground)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#mew-poli-svg)"
                        d="M0,20L40,26.7C80,33,160,47,240,53.3C320,60,400,60,480,53.3C560,47,640,33,720,31.7C800,30,880,40,960,50C1040,60,1120,70,1200,61.7C1280,53,1360,27,1440,28.3C1520,30,1600,60,1680,65C1760,70,1840,50,1920,38.3C2000,27,2080,23,2160,31.7C2240,40,2320,60,2400,65C2480,70,2560,60,2640,51.7C2720,43,2800,37,2880,28.3C2960,20,3040,10,3120,5C3200,0,3280,0,3360,0C3440,0,3520,0,3600,6.7C3680,13,3760,27,3840,30C3920,33,4000,27,4080,28.3C4160,30,4240,40,4320,41.7C4400,43,4480,37,4560,28.3C4640,20,4720,10,4800,20C4880,30,4960,60,5040,70C5120,80,5200,70,5280,66.7C5360,63,5440,67,5520,58.3C5600,50,5680,30,5720,20L5760,10L5760,100L5720,100C5680,100,5600,100,5520,100C5440,100,5360,100,5280,100C5200,100,5120,100,5040,100C4960,100,4880,100,4800,100C4720,100,4640,100,4560,100C4480,100,4400,100,4320,100C4240,100,4160,100,4080,100C4000,100,3920,100,3840,100C3760,100,3680,100,3600,100C3520,100,3440,100,3360,100C3280,100,3200,100,3120,100C3040,100,2960,100,2880,100C2800,100,2720,100,2640,100C2560,100,2480,100,2400,100C2320,100,2240,100,2160,100C2080,100,2000,100,1920,100C1840,100,1760,100,1680,100C1600,100,1520,100,1440,100C1360,100,1280,100,1200,100C1120,100,1040,100,960,100C880,100,800,100,720,100C640,100,560,100,480,100C400,100,320,100,240,100C160,100,80,100,40,100L0,100Z">
                    </path>
                </svg>
            </div>
        </section>

        {{-- Danh mục nổi bật --}}
        <section id="mew_cate_1" class="mew_cate_1 mb-3 mb-lg-4">
            <div class="container">
                <div class="b_mew_cate">
                    <h3 class="title position-relative pb-3 m-0 font-coiny">
                        Danh mục nổi bật
                    </h3>
                    <div
                        class="m_cate_slide m_cate_slide_edit swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-c1010ba111cc9dac69" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">

                            <div class="swiper-slide-edit-famus swiper-slide">
                                <div class="box_cate row m-0 p-3 h-full">
                                    <a href="" title="Sản phẩm từ thịt gà"
                                        class="font-weight-bold big_tit z-10 text-xl">Sản phẩm từ thịt gà</a>
                                    <div class="child col-7 col-sm-6 pl-0">
                                        <div class="childs">
                                            <a href="" title="Gà tươi" class="small_tit line_1 my-3">Gà
                                                tươi</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Khô gà" class="small_tit line_1 my-3">Khô gà</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Giò gà" class="small_tit line_1 my-3">Giò gà</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Ruốc gà" class="small_tit line_1 my-3">Ruốc
                                                gà</a>
                                        </div>
                                    </div>
                                    <div class="img_cate col-5 col-sm-6 p-0">
                                        <a href="" title="Thịt trứng"
                                            class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                            <img class="d-block img img-cover position-absolute rounded-full"
                                                style="height: 100% !important;" alt="Thịt trứng"
                                                src="{{ asset('website/banner/image_ga_home.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide-edit-famus swiper-slide">
                                <div class="box_cate row m-0 p-3 h-full">
                                    <a href="" title="Sản phẩm từ thịt bò"
                                        class="font-weight-bold big_tit z-10 text-xl">Sản phẩm từ thịt bò</a>
                                    <div class="child col-7 col-sm-6 pl-0">
                                        <div class="childs">
                                            <a href="" title="Bò tươi" class="small_tit line_1 my-3">Bò
                                                tươi</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Khô bò" class="small_tit line_1 my-3">Khô bò</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Giò bò" class="small_tit line_1 my-3">Giò bò</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Ruốc bò" class="small_tit line_1 my-3">Ruốc
                                                bò</a>
                                        </div>
                                    </div>
                                    <div class="img_cate col-5 col-sm-6 p-0">
                                        <a href="" title="Thịt bò"
                                            class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                            <img class="d-block img img-cover position-absolute rounded-full"
                                                style="height: 100% !important;" alt="Thịt bò"
                                                src="{{ asset('website/banner/image_bo_home.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide-edit-famus swiper-slide">
                                <div class="box_cate row m-0 p-3 h-full">
                                    <a href="" title="Trang phục dân tộc"
                                        class="font-weight-bold big_tit z-10 text-xl">Trang phục dân tộc</a>
                                    <div class="child col-7 col-sm-6 pl-0 mt-3">
                                        <div class="childs">
                                            <a href="" title="Dao" class="small_tit py-3">Trang phục người
                                                Dao</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Mông" class="small_tit py-3">Trang phục người
                                                Mông</a>
                                        </div>
                                        <div class="childs">
                                            <a href="" title="Nùng" class="small_tit py-3">Trang phục người
                                                Nùng</a>
                                        </div>
                                    </div>
                                    <div class="img_cate col-5 col-sm-6 p-0">
                                        <a href="" title="Trang phục dân tộc"
                                            class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                                            <img class="d-block img img-cover position-absolute rounded-full"
                                                style="height: 100% !important;" alt="Trang phục dân tộc"
                                                src="{{ asset('website/banner/image_trangphuc_home.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-prev mc_prev swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-c1010ba111cc9dac69"
                            aria-disabled="true"></div>
                        <div class="swiper-button-next mc_next" tabindex="0" role="button"
                            aria-label="Next slide" aria-controls="swiper-wrapper-c1010ba111cc9dac69"
                            aria-disabled="false"></div>
                        <div
                            class="swiper-pagination mc_pagi d-md-none swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </section>

        {{-- Flash Sale --}}
        <section id="flash_sale" class="m_product mb-3 mb-lg-4 position-relative"
            style="--bg_marquee: #9a1921;--cl_marquee: #ffd600;--bg_bt_marquee: #2e9f3c;--duration: 10s;--text-size: 24px">
            <div class="container">
                <div class="p-2 rounded-10 border_flash mew_marquee">
                    <div class="time_box row align-items-center mb-2">
                        <div class=" col-12 col-lg-6 mb-2 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="title position-relative pt-2 m-0 text-center text-lg-left font-coiny">
                                        <a class="position-relative" href="" title="Flash Sale">
                                            <img alt="Flash"
                                                src="https://file.hstatic.net/200000823693/file/flash_11b2c7ab01f347fdb5018fb85b0955e7.gif">
                                            Flash Sale
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto col-12 col-lg-6 text-center text-lg-right">
                            <countdown-timer data-time="05/24/2024 23:33"
                                class="countdown-time-wrapper font-weight-bold position-relative pl-md-2 hidden">
                                <div
                                    class="px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                    <div class="days mr-1">-199</div>
                                    <span>Ngày</span>
                                </div>
                                <div
                                    class="hours px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                    -17</div>
                                <div
                                    class="minutes px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                    -48</div>
                                <div
                                    class="seconds px-2 countdown-item rod position-relative text-white rounded-10 d-inline-flex align-items-baseline justify-content-center modal-open">
                                    -4</div>
                            </countdown-timer>
                        </div>
                    </div>
                    <div class="b_products mg">
                        <div
                            class="mew_flash swiper-container position-relative px-2 pb-3 pb-lg-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-multirow">
                            <div class="swiper-wrapper">
                                @foreach ($products as $product)
                                    <div class="swiper-slide">
                                        <div
                                            class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                            <a href="{{ route('web.product.show_only_product', ['category' => $product->category->slug, 'product' => $product->slug]) }}"
                                                class="d-block mb-2 modal-open position-relative rounded thumb"
                                                title="{{ $product->name }}">
                                                @php
                                                    // Kiểm tra ảnh đầu tiên của bài viết
                                                    $image = $product->images->first();
                                                    $imagePath = $image
                                                        ? "product/images/{$product->id}/{$image->file_name}"
                                                        : 'default-image.jpg';
                                                @endphp
                                                <picture
                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                    <img src="{{ asset('storage/' . $imagePath) }}"
                                                        class="d-block img img-cover position-absolute"
                                                        alt="{{ $product->title }}">
                                                </picture>
                                                <img src="{{ asset('website/images/frame-removebg-preview.png') }}"
                                                    decoding="async"
                                                    class="d-block img img-cover position-absolute khung"
                                                    alt="{{ $product->title }}">
                                                <div class="item-info position-relative">
                                                    <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                        <a class="line_1"
                                                            href="{{ route('web.product.show_only_product', ['category' => $product->category->slug, 'product' => $product->slug]) }}"
                                                            title="{{ $product->name }}">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>
                                                    <div class="item-price position-relative">
                                                        <span class="special-price font-weight-bold position-relative">
                                                            {{ number_format($product->price, 0, ',', ',') }}₫
                                                        </span>
                                                    </div>
                                                    <form
                                                        action="{{ route('web.carts.add', ['productId' => $product->id]) }}"
                                                        method="POST" enctype="multipart/form-data"
                                                        class="product-item_form position-absolute">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="1"
                                                            class="form-control prd_quantity border rounded-circle mb-2">
                                                        <button
                                                            class="btn p-1 js-addToCart d-flex justify-content-center align-items-center rounded-circle position-relative"
                                                            title="Thêm vào giỏ" type="submit">
                                                            <svg width="24" height="24">
                                                                <use href="#svg-cart"></use>
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <div class="clearfix">
                                                        <div
                                                            class="sold-module d-flex w-100 position-relative text-left">
                                                            <img src="https://theme.hstatic.net/200000830051/1001188866/14/hot-sale.png?v=502"
                                                                decoding="async" class="position-absolute"
                                                                alt="Sắp Cháy hàng">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center sold position-absolute h-100 w-100">
                                                                Đã bán: 14</div>
                                                            <div class="remain modal-open position-absolute h-100"
                                                                style="width:70%"></div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Xem thêm -->
                                <div class="swiper-slide box_padding h-auto">
                                    <a class="product-item flex-column align-items-center d-flex h-100 justify-content-center mb-0 p-2 p-lg-3 position-relative views_more rounded-10 bg-white box_shadow"
                                        href="{{ route('web.product.all') }}" title="Xem thêm">
                                        <img alt="Xem thêm" src="{{ asset('website/banner/show_more.jpg') }}"
                                            class="mb-3 rounded-full">
                                        Xem thêm
                                        <i class="i_more position-relative mt-1 rounded-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Nút điều hướng -->
                            <div class="swiper-button-prev mf_prev swiper-button-disabled" tabindex="-1"
                                role="button"></div>
                            <div class="swiper-button-next mf_next" tabindex="0" role="button"></div>

                            <!-- Thanh cuộn -->
                            <div class="swiper-scrollbar sb_flash d-lg-none">
                                <div class="swiper-scrollbar-drag"></div>
                            </div>
                        </div>
                    </div>


                    <div class="marquee d-flex modal-open position-relative py-2 py-lg-3 rounded-10" role="marquee">
                        <span class="marquee-content d-inline-flex align-items-center">
                            <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                <a>Tưng bừng
                                    khuyến mãi</a>
                            </span>
                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold">Flash Sale</a>
                            </span>
                        </span>
                        <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                            <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                <a tabindex="-1">Tưng bừng khuyến mãi</a>
                            </span>
                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                            </span>
                        </span>
                        <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                            <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                <a tabindex="-1">Tưng bừng khuyến mãi</a>
                            </span>
                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                            </span>
                        </span>
                        <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                            <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                <a tabindex="-1">Tưng bừng khuyến mãi</a>
                            </span>
                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                            </span>
                        </span>
                        <span class="marquee-content d-inline-flex align-items-center" aria-hidden="true">
                            <span class="marquee-item marquee-text d-inline-block pr-3 pr-lg-4 font-weight-bold">
                                <a tabindex="-1">Tưng bừng khuyến mãi</a>
                            </span>
                            <span class="marquee-item marquee-button d-inline-block mr-3 mr-lg-4">
                                <a class="btn btn-marquee px-3 px-lg-4 font-weight-bold" tabindex="-1">Flash Sale</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        {{-- các sản phẩm theo danh mục  --}}
        <section data-tab2="" class="m_product mb-3 mb-lg-4">
            <div class="container">
                @foreach ($categories as $category)
                    @if ($category->products->count() > 0)
                        <div
                            class="head_box d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                            <h2 class="title font-coiny position-relative m-0">
                                {{ $category->name }}
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-12 order-lg-2">
                                <div class="mg">
                                    <div class="mew_product_tab active loaded swiper-container pb-3 px-2">
                                        <div class="swiper-wrapper">
                                            @foreach ($category->products as $product)
                                                <div class="swiper-slide swiper-slide-edit text-left box_padding">
                                                    <div
                                                        class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                        <a href="{{ route('web.product.show_only_product', ['category' => $product->category->slug, 'product' => $product->slug]) }}"
                                                            class="d-block mb-2 modal-open position-relative rounded thumb"
                                                            title="{{ $product->name }}">
                                                            @php
                                                                // Kiểm tra ảnh đầu tiên của bài viết
                                                                $image = $product->images->first();
                                                                $imagePath = $image
                                                                    ? "product/images/{$product->id}/{$image->file_name}"
                                                                    : 'default-image.jpg';
                                                            @endphp
                                                            <picture
                                                                class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                                <img src="{{ asset('storage/' . $imagePath) }}"
                                                                    class="d-block img img-cover position-absolute"
                                                                    alt="{{ $product->title }}">
                                                            </picture>

                                                            <div class="item-info position-relative">
                                                                <h3 class="item-title font-weight-normal mb-0 mt-1">
                                                                    <a class="line_1"
                                                                        href="{{ route('web.product.show_only_product', ['category' => $product->category->slug, 'product' => $product->slug]) }}"
                                                                        title="{{ $product->name }}">
                                                                        {{ $product->name }}
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price position-relative">
                                                                    <span
                                                                        class="special-price font-weight-bold position-relative">
                                                                        {{ number_format($product->price, 0, ',', ',') }}₫
                                                                    </span>
                                                                </div>
                                                                <form
                                                                    action="{{ route('web.carts.add', ['productId' => $product->id]) }}"
                                                                    method="POST" enctype="multipart/form-data"
                                                                    class="product-item_form position-absolute">
                                                                    @csrf
                                                                    <input type="hidden" name="quantity"
                                                                        value="1"
                                                                        class="form-control prd_quantity border rounded-circle mb-2">
                                                                    <button
                                                                        class="btn p-1 js-addToCart d-flex justify-content-center align-items-center rounded-circle position-relative"
                                                                        title="Thêm vào giỏ" type="submit">
                                                                        <svg width="24" height="24">
                                                                            <use href="#svg-cart"></use>
                                                                        </svg>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <span class="swiper-button-prev mm_prev"></span>
                                        <span class="swiper-button-next mm_next"></span>
                                        <div class="view_more text-center mt-2 position-relative">
                                            <a href="{{ route('web.product.all') }}" title="Xem thêm"
                                                class="position-relative text-light d-inline-block">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                    @endif
                @endforeach
            </div>
        </section>

        {{-- Video  --}}
        <section class="m_video_review mb-3 mb-lg-4">
            <div class="container">
                <h2 class="title position-relative pb-2 pb-lg-3 m-0 font-coiny">
                    <a class="position-relative" href="" title="Video">Video</a>
                </h2>
                <div
                    class="mew_video_index swiper-container position-relative swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-06f551079c47750410" aria-live="polite"
                        style="transform: translate3d(0px, 0px, 0px);">

                        <div class="swiper-slide swiper-slide-active" style="width: 268.75px; margin-right: 15px;"
                            role="group" aria-label="1 / 5">
                            <div class="item_grid">
                                <div class="img_thm position-relative rounded-10 modal-open">
                                    <a href="javascript:;" data-video="r83OaxnBgI4" class="effect-ming open_popup"
                                        title="Cách làm thịt heo chiên nước mắm da giòn thịt mềm ngọt rất là ngon">
                                        <div
                                            class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                            <img src="//file.hstatic.net/200000830051/article/thitheo_54e0a0a0270c4d818dc89960d408fd7d_large.jpg"
                                                data-src="//file.hstatic.net/200000830051/article/thitheo_54e0a0a0270c4d818dc89960d408fd7d_large.jpg"
                                                class="d-block img img-cover position-absolute lazy loaded"
                                                alt="Cách làm thịt heo chiên nước mắm da giòn thịt mềm ngọt rất là ngon">
                                            <div class="position-absolute w-100 h-100 video_open lazy_bg loaded"
                                                data-video="r83OaxnBgI4"
                                                data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)"
                                                style="background-image: url(&quot;//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title_blo mt-2"><a class="line_2"
                                        title="Cách làm thịt heo chiên nước mắm da giòn thịt mềm ngọt rất là ngon">Cách
                                        làm thịt heo chiên nước mắm da giòn thịt mềm ngọt rất là ngon</a></h3>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-next" style="width: 268.75px; margin-right: 15px;"
                            role="group" aria-label="2 / 5">
                            <div class="item_grid">
                                <div class="img_thm position-relative rounded-10 modal-open">
                                    <a href="javascript:;" data-video="XkFgZjah_RE" class="effect-ming open_popup"
                                        title="Bí quyết nấu LẨU BÒ MẮM RUỐC ngon tuyệt đặc sản Bình Dương">
                                        <div
                                            class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                            <img src="//file.hstatic.net/200000830051/article/bo_a037b33b161848bba90f0eaa6151c9e9_large.jpg"
                                                data-src="//file.hstatic.net/200000830051/article/bo_a037b33b161848bba90f0eaa6151c9e9_large.jpg"
                                                class="d-block img img-cover position-absolute lazy loaded"
                                                alt="Bí quyết nấu LẨU BÒ MẮM RUỐC ngon tuyệt đặc sản Bình Dương">
                                            <div class="position-absolute w-100 h-100 video_open lazy_bg loaded"
                                                data-video="XkFgZjah_RE"
                                                data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)"
                                                style="background-image: url(&quot;//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title_blo mt-2"><a class="line_2"
                                        title="Bí quyết nấu LẨU BÒ MẮM RUỐC ngon tuyệt đặc sản Bình Dương">Bí quyết nấu
                                        LẨU BÒ MẮM RUỐC ngon tuyệt đặc sản Bình Dương</a></h3>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width: 268.75px; margin-right: 15px;" role="group"
                            aria-label="3 / 5">
                            <div class="item_grid">
                                <div class="img_thm position-relative rounded-10 modal-open">
                                    <a href="javascript:;" data-video="jb0DiBpXQUo" class="effect-ming open_popup"
                                        title="Cách nấu Lẩu Thái như thế nào mới đạt đúng chuẩn vị Lẩu Thái ngon">
                                        <div
                                            class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                            <img src="//file.hstatic.net/200000830051/article/lauthai_de2c4e60813c4970a2544b5bc5b3de89_large.jpg"
                                                data-src="//file.hstatic.net/200000830051/article/lauthai_de2c4e60813c4970a2544b5bc5b3de89_large.jpg"
                                                class="d-block img img-cover position-absolute lazy loaded"
                                                alt="Cách nấu Lẩu Thái như thế nào mới đạt đúng chuẩn vị Lẩu Thái ngon">
                                            <div class="position-absolute w-100 h-100 video_open lazy_bg loaded"
                                                data-video="jb0DiBpXQUo"
                                                data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)"
                                                style="background-image: url(&quot;//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title_blo mt-2"><a class="line_2"
                                        title="Cách nấu Lẩu Thái như thế nào mới đạt đúng chuẩn vị Lẩu Thái ngon">Cách
                                        nấu Lẩu Thái như thế nào mới đạt đúng chuẩn vị Lẩu Thái ngon</a></h3>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width: 268.75px; margin-right: 15px;" role="group"
                            aria-label="4 / 5">
                            <div class="item_grid">
                                <div class="img_thm position-relative rounded-10 modal-open">
                                    <a href="javascript:;" data-video="bmzS3FXEDQs" class="effect-ming open_popup"
                                        title="ĐẬU HỦ NHỒI THỊT SỐT CÀ CHUA ngon tuyệt đẹp mắt dễ làm nhất">
                                        <div
                                            class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                            <img src="//file.hstatic.net/200000830051/article/dauhu_cbe32b173ac14ee8bdfb433e439aa7b4_large.jpg"
                                                data-src="//file.hstatic.net/200000830051/article/dauhu_cbe32b173ac14ee8bdfb433e439aa7b4_large.jpg"
                                                class="d-block img img-cover position-absolute lazy loaded"
                                                alt="ĐẬU HỦ NHỒI THỊT SỐT CÀ CHUA ngon tuyệt đẹp mắt dễ làm nhất">
                                            <div class="position-absolute w-100 h-100 video_open lazy_bg loaded"
                                                data-video="bmzS3FXEDQs"
                                                data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)"
                                                style="background-image: url(&quot;//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502&quot;);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title_blo mt-2"><a class="line_2"
                                        title="ĐẬU HỦ NHỒI THỊT SỐT CÀ CHUA ngon tuyệt đẹp mắt dễ làm nhất">ĐẬU HỦ NHỒI
                                        THỊT SỐT CÀ CHUA ngon tuyệt đẹp mắt dễ làm nhất</a></h3>
                            </div>
                        </div>

                        <div class="swiper-slide" style="width: 268.75px; margin-right: 15px;" role="group"
                            aria-label="5 / 5">
                            <div class="item_grid">
                                <div class="img_thm position-relative rounded-10 modal-open">
                                    <a href="javascript:;" data-video="756hQQQmAbQ" class="effect-ming open_popup"
                                        title="Cách Làm Mực Chiên Nước Mắm Đơn Giản Mà Ngon">
                                        <div
                                            class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                            <img src="//theme.hstatic.net/200000830051/1001188866/14/placeholder_1x1.png?v=502"
                                                data-src="//file.hstatic.net/200000830051/article/mucchien_2f2f1e589b45461c9171de3dd7f394da_large.jpg"
                                                class="d-block img img-cover position-absolute lazy"
                                                alt="Cách Làm Mực Chiên Nước Mắm Đơn Giản Mà Ngon">
                                            <div class="position-absolute w-100 h-100 video_open lazy_bg"
                                                data-video="756hQQQmAbQ"
                                                data-background="url(//theme.hstatic.net/200000830051/1001188866/14/play-button.png?v=502)">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title_blo mt-2"><a class="line_2"
                                        title="Cách Làm Mực Chiên Nước Mắm Đơn Giản Mà Ngon">Cách Làm Mực Chiên Nước
                                        Mắm Đơn Giản Mà Ngon</a></h3>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination mew_video_p"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>

        <div class="popup_box position-fixed w-100 h-100 justify-content-center align-items-center d-flex">
            <div class="position-relative max-100">
                <a href="javascript:;"
                    class="close_popup position-absolute d-flex justify-content-center align-items-center bg-dark"
                    title="Đóng">
                    <svg width="18" height="18">
                        <use href="#svg-close"></use>
                    </svg>
                </a>
                <div class="b_video p-2 p-md-3 bg-white rounded-10 m-auto"></div>
            </div>
        </div>
        <section class="m_banner mb-3 mb-lg-4">
            <div class="container">
                <div
                    class="mew_slide_banner swiper-container position-relative rounded-10 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-52a40819d64c47e6" aria-live="off"
                        style="transform: translate3d(0px, 0px, 0px);">

                        <div class="swiper-slide text-center swiper-slide-active" role="group" aria-label="1 / 1">
                            <a class="d-block w-100 h-100 modal-open" href="#" title="Banner">
                                <picture class="position-relative w-100 m-0 ratio6by1 d-block aspect">
                                    <source media="(min-width: 1200px)"
                                        srcset="https://file.hstatic.net/200000830049/file/banner4_1_d847bfe7b2b94ad8bd560c563457acac.jpg">
                                    <source media="(min-width: 992px)"
                                        srcset="https://file.hstatic.net/200000830049/file/banner4_1_d847bfe7b2b94ad8bd560c563457acac.jpg">
                                    <source media="(max-width: 569px)"
                                        srcset="https://file.hstatic.net/200000830049/file/banner4_1_d847bfe7b2b94ad8bd560c563457acac_large.jpg">
                                    <source media="(max-width: 480px)"
                                        srcset="https://file.hstatic.net/200000830049/file/banner4_1_d847bfe7b2b94ad8bd560c563457acac_large.jpg">
                                    <img class="d-block img img-cover position-absolute"
                                        src="https://file.hstatic.net/200000830049/file/banner4_1_d847bfe7b2b94ad8bd560c563457acac.jpg"
                                        alt="Banner">
                                </picture>
                            </a>
                        </div>


                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>

        {{-- liên kết website --}}
        <section class="mb-3 mb-lg-4">
            <div class="container">
                <div class="p-2 rounded-10 border_flash mew_marquee">
                    <div class="time_box row align-items-center mb-2">
                        <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="title position-relative pt-2 m-0 text-center text-lg-left font-coiny">
                                        <a class="position-relative" href="" title="Liên kết website">
                                            Liên kết website
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b_products mg">
                        <div
                            class="mew_flash swiper-container position-relative px-2 pb-3 pb-lg-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-multirow">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <a href="https://www.mard.gov.vn/Pages/default.aspx" target="_blank"
                                        class="name font-weight-bold m-0 d-block mb-2 modal-open position-relative rounded thumb"
                                        title="Bộ nông nghiệp và phát triển nông thôn">
                                        <li class="filter-item filter-item--check-box  ">
                                            <label class="d-flex align-items-baseline m-0">
                                                <span class="fa2 px-2 py-1 rounded-10 border"
                                                    style="border-color: #00d500 !important;">Bộ nông nghiệp và phát
                                                    triển nông thôn</span>
                                            </label>
                                        </li>
                                    </a>
                                </div>

                                <!-- Liên kết 2 -->

                                <div class="swiper-slide">
                                    <a href="https://dcrd.gov.vn/" target="_blank"
                                        class="name font-weight-bold m-0 d-block mb-2 modal-open position-relative rounded thumb"
                                        title="Cục Kinh tế hợp tác và Phát triển nông thôn">
                                        <li class="filter-item filter-item--check-box  ">
                                            <label class="d-flex align-items-baseline m-0">
                                                <span class="fa2 px-2 py-1 rounded-10 border"
                                                    style="border-color: #00d500 !important;">Cục Kinh tế hợp tác và
                                                    Phát triển nông thôn</span>
                                            </label>
                                        </li>
                                    </a>
                                </div>

                                <!-- Liên kết 3 -->
                                <div class="swiper-slide">
                                    <a href="https://nongnghiep.vn/" target="_blank"
                                        class="name font-weight-bold m-0 d-block mb-2 modal-open position-relative rounded thumb"
                                        title="Trang tin tức nông nghiệp Việt Nam">
                                        <li class="filter-item filter-item--check-box  ">
                                            <label class="d-flex align-items-baseline m-0">
                                                <span class="fa2 px-2 py-1 rounded-10 border"
                                                    style="border-color: #00d500 !important;">Trang tin tức nông nghiệp
                                                    Việt Nam</span>
                                            </label>
                                        </li>
                                    </a>
                                </div>

                                <!-- Liên kết 4 -->
                                <div class="swiper-slide">
                                    <a href="https://vca.org.vn/" target="_blank"
                                        class="name font-weight-bold m-0 d-block mb-2 modal-open position-relative rounded thumb"
                                        title="Liên minh hợp tác xã Việt Nam">
                                        <li class="filter-item filter-item--check-box  ">
                                            <label class="d-flex align-items-baseline m-0">
                                                <span class="fa2 px-2 py-1 rounded-10 border"
                                                    style="border-color: #00d500 !important;">Liên minh hợp tác xã Việt
                                                    Nam</span>
                                            </label>
                                        </li>
                                    </a>
                                </div>

                                <!-- Liên kết 5 -->
                                <div class="swiper-slide">
                                    <a href="https://ocop.thainguyen.gov.vn/" target="_blank"
                                        class="name font-weight-bold m-0 d-block mb-2 modal-open position-relative rounded thumb"
                                        title="Sản phẩm OCOP tỉnh Thái Nguyên">
                                        <li class="filter-item filter-item--check-box  ">
                                            <label class="d-flex align-items-baseline m-0">
                                                <span class="fa2 px-2 py-1 rounded-10 border"
                                                    style="border-color: #00d500 !important;">Sản phẩm OCOP tỉnh Thái
                                                    Nguyên</span>
                                            </label>
                                        </li>
                                    </a>
                                </div>
                            </div>

                            <!-- Nút điều hướng -->
                            <div class="swiper-button-prev mf_prev swiper-button-disabled" tabindex="-1"
                                role="button"></div>
                            <div class="swiper-button-next mf_next" tabindex="0" role="button"></div>

                            <!-- Thanh cuộn -->
                            <div class="swiper-scrollbar sb_flash d-lg-none">
                                <div class="swiper-scrollbar-drag"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Đánh giá của khách hàng --}}
        <section class="mew_reviews mb-3 mb-lg-4">
            <div class="container">
                <h2 class="title font-coiny position-relative pb-2 m-0">
                    Khách hàng đánh giá
                </h2>
                <div
                    class="m_people swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper">
                        @foreach ($comments as $comment)
                            <div class="swiper-slide item_yk p-2">
                                <div class="content_tip m-0 p-3">
                                    <div class="imga d-flex align-items-center mb-2">
                                        <div class="i_fm">
                                            <picture class="aspect d-block m-0 modal-open position-relative ratio1by1 rounded-circle w-100">
                                                @if ($comment->user && $comment->user->avatar_url)
                                                    <img style="width: 80px; height: 80px;" src="{{ $comment->user->avatar_url }}" alt="Avatar">
                                                @else
                                                    <img style="width: 80px; height: 80px;" src="{{ asset('website/images/avatar-default-icon.png') }}" alt="Default Avatar">
                                                @endif
                                            </picture>                                            
                                        </div>
                                        <div class="i_ff">
                                            <p class="name font-weight-bold m-0">{{ optional($comment->user)->name ?? 'Khách' }}</p>
                                        </div>
                                    </div>
                                    <div class="hgroup pb-4 position-relative">
                                        <p class="jt text-justify">{{ $comment->content }}</p>
                                        <svg width="20px" height="20px">
                                            <use xlink:href="#quote"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        {{-- tin tức  --}}
        <section id="m_blog" class="m_blog mb-3 mb-lg-4">
            <div class="container">
                <h2 class="title font-coiny position-relative pb-2 pb-lg-3 m-0">
                    <a class="position-relative" href="{{ route('web.post.all') }}" title="Tin tức sự kiện">
                        Tin tức sự kiện
                    </a>
                </h2>
                <div class="b_blog">
                    <div class="mew_blog swiper-container position-relative">
                        <div class="swiper-wrapper">
                            @foreach ($latestPosts as $post)
                                <div class="swiper-slide">
                                    <div class="item_grid mb-4">
                                        <div class="img_thm position-relative modal-open rounded-10">
                                            <a href="{{ route('web.post.show_only_post', ['category' => $post->category->slug, 'post' => $post->slug]) }}"
                                                title="{{ $post->title }}"
                                                class="d-block position-relative effect-ming thumb modal-open rounded-10">
                                                <div
                                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 aspect">
                                                    @php
                                                        $image = $post->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                                                    @endphp

                                                    <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                                        class="d-block img img-cover position-absolute loaded"
                                                        style="max-width: 430px;" alt="{{ $post->title }}">

                                                    <div class="position-absolute w-100 h-100 overlay">
                                                    </div>
                                                </div>
                                                <div class="entry-date position-absolute text-center rounded-right">
                                                    <p class="day font-weight-bold">
                                                        {{ $post->published_at->format('d') }}
                                                        <!-- Đúng cú pháp ở đây -->
                                                    </p>
                                                    <p class="yeah">
                                                        {{ $post->published_at->format('m/Y') }}
                                                        <!-- Đúng cú pháp ở đây -->
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="custom-article-item_info mt-2">
                                            <h3 class="title_blo mb-2">
                                                <a class="line_2 font-weight-bold h-auto" style="font-size: 16px"
                                                    href="{{ route('web.post.show_only_post', ['category' => $post->category->slug, 'post' => $post->slug]) }}"
                                                    title="{{ $post->title }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h3>
                                            <div class="mb-2" style="font-size: 14px">
                                                {!! Str::limit(strip_tags($post->content), 120) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-website-layout>
