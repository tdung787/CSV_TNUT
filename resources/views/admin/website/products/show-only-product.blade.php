<x-website-layout>
    <div class="col-right position-relative open_slogan">
        <div class="contentWarp ">
            <div class="breadcrumbs bg-white">
                <div class="container position-relative">
                    <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 border-bottom bg-white">
                        <li class="home">
                            <a href="/" title="Trang chủ">
                                <svg width="14" height="14">
                                    <use href="#svg-home"></use>
                                </svg>
                                Trang chủ
                            </a>
                            <span class="slash-divider ml-2 mr-2">
                                <svg width="4" height="8">
                                    <use href="#svg-next-mini"></use>
                                </svg>
                            </span>
                        </li>
                        <li>
                            <a href="{{ route('web.product.all') }}" title="Sản phẩm">Sản phẩm</a>
                            <span class="slash-divider ml-2 mr-2">
                                <svg width="4" height="8">
                                    <use href="#svg-next-mini"></use>
                                </svg>
                            </span>
                        </li>
                        <li><a href="{{ route('web.product.by_category', $category->slug) }}">{{ $category->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container mt-3 mb-3 mb-lg-4">
                <section class="product-layout product-layout2 ">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="row">
                                <div class="col-12 h_pr mb-3">
                                    <h1 class="product-name font-weight-bold mb-2 d-inline-flex mr-3">
                                        {{ $product->name }}
                                    </h1>
                                </div>
                                <?php
                                $productImagesPath = storage_path('app/public/product/images/' . $product->id);
                                $productImages = [];
                                
                                if (is_dir($productImagesPath)) {
                                    $files = scandir($productImagesPath);
                                    foreach ($files as $file) {
                                        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                                            $productImages[] = asset('storage/product/images/' . $product->id . '/' . $file);
                                        }
                                    }
                                }
                                ?>

                                <div class="product-layout_col-left col-12 col-sm-12 col-md-5 col-lg-6 col-xl-6 mb-3">
                                    <div class="position-sticky top_product">
                                        <div class="position-relative arrow_main_slide">
                                            <div
                                                class="product-main-slide swiper-container border rounded-10 mb-2 swiper-container-fade">
                                                <div id="lightgallery" class="swiper-wrapper" style="height: 406px;"
                                                    aria-live="polite">
                                                    @foreach ($productImages as $index => $image)
                                                        <div class="swiper-slide {{ $index === 0 ? 'swiper-slide-active' : '' }}"
                                                            src="{{ $image }}"
                                                            style="width: 406px; opacity: {{ $index === 0 ? 1 : 0 }}; transform: translate3d(-{{ $index * 406 }}px, 0px, 0px);"
                                                            role="group"
                                                            aria-label="{{ $index + 1 }} / {{ count($productImages) }}">
                                                            <picture
                                                                class="position-relative d-block aspect ratio1by1 rounded-10 modal-open">
                                                                <source media="(min-width: 1200px)"
                                                                    srcset="{{ $image }}">
                                                                <source media="(min-width: 575px)"
                                                                    srcset="{{ $image }}">
                                                                <img src="{{ $image }}"
                                                                    alt="Product Image {{ $index + 1 }}"
                                                                    class="d-block m-auto img position-absolute img-contain gradient-load"
                                                                    data-zoom-image="{{ $image }}">
                                                            </picture>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-button-prev mew_product_main-slide_prev swiper-button-disabled"
                                                    tabindex="-1" role="button" aria-label="Previous slide"
                                                    aria-controls="lightgallery" aria-disabled="true">
                                                </div>
                                                <div class="swiper-button-next mew_product_main-slide_next"
                                                    tabindex="0" role="button" aria-label="Next slide"
                                                    aria-controls="lightgallery" aria-disabled="false">
                                                </div>
                                            </div>
                                            <div class="product-thumb-slide swiper-container swiper-container-thumbs">
                                                <div class="swiper-wrapper" aria-live="polite">
                                                    @foreach ($productImages as $index => $image)
                                                        <div class="swiper-slide rounded-10 m_thumb_pl modal-open crp {{ $index === 0 ? 'swiper-slide-thumb-active' : '' }}"
                                                            style="width: 94.5px; margin-right: 10px;" role="group"
                                                            aria-label="{{ $index + 1 }} / {{ count($productImages) }}">
                                                            <div class="position-relative w-100 m-0 ratio1by1 aspect">
                                                                <img src="{{ $image }}"
                                                                    data-img="{{ $image }}"
                                                                    alt="Thumbnail {{ $index + 1 }}"
                                                                    class="d-block img position-absolute w-100 h-100">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="product-layout_col-right col-12 col-sm-12 col-md-7 col-lg-6 col-xl-6 product-warp">
                                    <ul class="list-unstyled mb-3 position-relative product-info mt-3 mt-lg-0">
                                        <li class="in_1 font-weight-bold">
                                            Tình trạng:
                                            <span class="inventory_quantity text-success font-weight-normal">
                                                {!! $product->getStockStatus() !!}
                                            </span>
                                        </li>
                                        <li class="in_1 font-weight-bold">
                                            Thương hiệu:
                                            <span class="text-dark font-weight-normal"> {{ $product->brand }}</span>
                                        </li>

                                        <li class="in_1 font-weight-bold">
                                            Loại:
                                            <span id="sku" class="text-dark font-weight-normal">
                                                {{ $product->product_type }}
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="align-items-center bg-light d-flex price_scroll px-3 rounded-10 mb-3"
                                        style="justify-content: center">
                                        <div class="product-price py-2">
                                            <span class="special-price font-weight-bold m-0">
                                                {{ number_format($product->price, 0, ',', ',') }}₫
                                            </span>
                                        </div>
                                    </div>

                                    <div id="" class="mobile_open_box_swatch mb-3">
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="product-control w-100">
                                                <div class="buy_scroll">
                                                    <div class="product-quantity d-flex align-items-center mb-3">
                                                        <header class="mr-3">Số lượng</header>
                                                        <div class="custom-btn-number form-inline border-0">

                                                            <input type="number" name="quantity" min="1"
                                                                value="{{ $product->stock }}" disabled
                                                                class="border rounded-10 text-center form-control prd_quantity"
                                                                id="qtym">
                                                        </div>
                                                    </div>
                                                    <div class="active_buy mb-2 d-flex gap_8 mxs_100">
                                                        <div>
                                                            <form
                                                                action="{{ route('web.carts.add', ['productId' => $product->id]) }}"
                                                                method="POST">
                                                                @csrf

                                                                <input type="hidden" name="quantity" value="1">
                                                                <input type="hidden" name="action" value="buy_now">
                                                                <button type="submit"
                                                                    class="btn d-flex w-100 justify-content-center flex-column align-items-center rounded-10 pt-2 pb-2 product-action_buynow js-buynow sitdown modal-open position-relative text-white">
                                                                    <span class="text-uppercase font-weight-bold">Mua
                                                                        ngay</span>
                                                                    <small class="ml-3 mr-3"
                                                                        style="width: max-content;">(Giao tận nơi hoặc
                                                                        lấy tại cửa hàng)</small>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div>
                                                            <form
                                                                action="{{ route('web.carts.add', ['productId' => $product->id]) }}"
                                                                method="POST">
                                                                @csrf

                                                                <input type="hidden" name="quantity" value="1">
                                                                <input type="hidden" name="action"
                                                                    value="add_to_cart">
                                                                <button type="submit"
                                                                    class="btn d-flex justify-content-center flex-column align-items-center rounded-10 p-2 product-action_buy js-addToCart modal-open font-weight-bold position-relative">
                                                                    <svg width="20" height="20">
                                                                        <use href="#svg-shopping-cart"></use>
                                                                    </svg>
                                                                    <small>Thêm vào giỏ</small>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="linehot_pro alert alert-warning mt-3 mb-3 d-flex align-items-center rounded-10">
                                                        <img class="mr-3 loaded" alt="0339902798"
                                                            src="{{ asset('website/images/anh_tu_van.jpg') }}">
                                                        <div class="b_cont font-weight-bold">
                                                            <span class="d-block">
                                                                Gọi ngay <a href="tel:0339902798"
                                                                    title="0339902798">0339902798</a>
                                                                để được tư vấn tốt nhất!
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="m_content mb-4">
                                <div class="border pl-2 pr-2 pl-lg-3 pr-lg-3 rounded-10">
                                    <h3
                                        class="special-content_title font-coiny d-block w-100 pt-3 pb-3 border-bottom text-uppercase mb-0">
                                        Thông tin chi tiết </h3>
                                    <expandable-content data-expand="Xem thêm" data-clollapse="Thu gọn"
                                        data-maxheight="380" style="--maxHeight: 380px;">
                                        <div class="expandable-content text-left rte py-4" style="max-height: 380px;">
                                            {!! $product->content !!}
                                        </div>
                                        <button
                                            class="bg-transparent border-0 expandable-content-toggle font-weight-bold modal-open pb-2 pl-4 position-relative pr-4 pt-2 w-100 hidden">
                                            <span class="toggle-text">Xem thêm</span>
                                            <svg width="5" height="10">
                                                <use href="#svg-next-mini"></use>
                                            </svg>
                                        </button>
                                    </expandable-content>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 d-lg-block ba_sidebar">
                            <div class="position-sticky top_20px">

                                @include('website.products.san-pham-cung-loai')

                                {{-- Bài viết liên quan --}}
                                <x-website.product-sidebar-only-product />
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-12 order-lg-2 mb-3">
                        </div>
                    </div>

                    {{-- nhận xét  --}}
                    <div>
                        <div class="m_content mb-4">
                            <div class="border pl-2 pr-2 pl-lg-3 pr-lg-3 rounded-10">
                                <h3
                                    class="special-content_title font-coiny d-block w-100 pt-3 pb-3 border-bottom text-uppercase mb-0">
                                    Đánh giá </h3>
                                <expandable-content data-expand="Xem thêm" data-clollapse="Thu gọn"
                                    data-maxheight="380" style="--maxHeight: 380px;">
                                    <div class="expandable-content text-left rte py-4" style="max-height: 380px;">
                                        <div style="width: 100%; height: 50px;">
                                            <div class="float-left">
                                                <span>{{ $commentCount }} đánh giá</span>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="float-left">
                                                <div class="relative">
                                                    <a class="mr-2 block">
                                                        <img style="width: 48px !important; height: 48px !important;"
                                                            alt="User Avatar"
                                                            src="{{ optional(Auth::user())->avatar_url ?? asset('website/images/avatar-default-icon.png') }}">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="overflow-hidden">
                                                <div class="comment-box rounded w-full m-0 grid"
                                                    style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; background-color: #f9f9f9;">
                                                    <!-- Form bình luận mới -->
                                                    <form id="comment-form" class="contents">
                                                        <textarea id="comment-content" class="w-full text-sm p-2 h-20"
                                                            style="border: none; outline: none; resize: none; background-color: #ffffff;" placeholder="Đánh giá ..."></textarea>
                                                        <div class="comment-actions flow-root"
                                                            style="border-top: 1px solid #ddd;">
                                                            <button class="submit-btn m-2 float-right">Gửi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <style>
                                                    .comment-box textarea {
                                                        border: none;
                                                        outline: none;
                                                        resize: none;
                                                        background-color: #ffffff;
                                                    }

                                                    .comment-actions .submit-btn {
                                                        background-color: #4267b2;
                                                        color: #fff;
                                                        border: none;
                                                        padding: 8px 16px;
                                                        border-radius: 5px;
                                                        font-size: 14px;
                                                        cursor: pointer;
                                                    }

                                                    .comment-actions .submit-btn:hover {
                                                        background-color: #365899;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                        <div id="comments-section">
                                            @foreach ($comments as $comment)
                                                <div class="mt-3">
                                                    <div class="float-left">
                                                        <a class="mr-2 block">
                                                            @if ($comment->user && $comment->user->avatar_url)
                                                                <img style="width: 50px; height: 50px; border-radius: 99px;"
                                                                    src="{{ $comment->user->avatar_url }}"
                                                                    alt="Avatar">
                                                            @else
                                                                <img style="width: 50px; height: 50px; border-radius: 99px;"
                                                                    src="{{ asset('website/images/avatar-default-icon.png') }}"
                                                                    alt="Default Avatar">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <div class="overflow-hidden">
                                                            <a class=" font-semibold">
                                                                {{ optional($comment->user)->name ?? 'Khách' }}
                                                            </a>
                                                            <div class="my-1">
                                                                <span style="word-wrap: break-word;">
                                                                    {!! $comment->content !!}
                                                                </span>
                                                            </div>
                                                            <div class="text-xs mt-1">
                                                                <span>
                                                                    <a style="color: #90949c">
                                                                        <abbr aria-label="6 năm trước" minimize="true"
                                                                            data-minimize="true"
                                                                            data-shorten="true">{{ $comment->created_at->diffForHumans() }}
                                                                        </abbr>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button
                                        class="bg-transparent border-0 expandable-content-toggle font-weight-bold modal-open pb-2 pl-4 position-relative pr-4 pt-2 w-100 hidden">
                                        <span class="toggle-text">Xem thêm</span>
                                        <svg width="5" height="10">
                                            <use href="#svg-next-mini"></use>
                                        </svg>
                                    </button>
                                </expandable-content>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript xử lý form bình luận -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Gửi yêu cầu lưu bình luận mới
                            document.getElementById('comment-form').addEventListener('submit', function(event) {
                                event.preventDefault();

                                let content = document.getElementById('comment-content').value;
                                let productId = {{ $product->id }};

                                fetch('{{ route('web.comments.storeComment') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        body: JSON.stringify({
                                            content: content,
                                            product_id: productId
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        // Chỉ xử lý nếu có thông báo trả về từ server
                                        if (data.success) {
                                            // Đặt session trên server
                                            window.location.reload(); // Reload trang để hiển thị thông báo toast
                                        } else {
                                            // Đặt session lỗi nếu có
                                            window.location.reload();
                                        }
                                    })
                                    .catch(error => {
                                        // Đặt session lỗi nếu có
                                        window.location.reload();
                                    });
                            });
                        });
                    </script>


                    {{-- Sản phẩm đã xem --}}
                    <x-website.recently-viewed-products />
                </section>
            </div>
        </div>
    </div>
</x-website-layout>
