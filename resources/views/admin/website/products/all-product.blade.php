<x-website-layout>
    <div class="page-body">
        <div class="w-100 clearfix">
            <div class="col-right position-relative open_slogan">
                <div class="contentWarp ">
                    <div class="opacity_filter"></div>
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
                                <li>Tất cả sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                    <section class="collection-layout mt-3 mb-3">
                        <div class="container">
                            <div
                                class="banner_collection mb-3 swiper-container position-relative swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                @php
                                    $productTests = [
                                        ['src' => 'website/banner/banner_2 - Copy.jpg', 'alt' => 'Banner 1'],
                                        ['src' => 'website/banner/banner_3 - Copy.jpg', 'alt' => 'Banner 2'],
                                        ['src' => 'website/banner/banner_4 - Copy.jpg', 'alt' => 'Banner 3'],
                                    ];
                                @endphp
                                <div class="swiper-wrapper" id="swiper-wrapper-6b9844dd5610de07d" aria-live="off"
                                    style="transform: translate3d(-1695px, 0px, 0px); transition-duration: 0ms;">
                                    @foreach ($productTests as $index => $product)
                                        <div class="swiper-slide text-center effect-ming {{ $index === 0 ? 'swiper-slide-prev swiper-slide-duplicate-next' : 'swiper-slide-active' }}"
                                            data-swiper-slide-index="{{ $index }}"
                                            style="width: 555px; margin-right: 10px;" role="group"
                                            aria-label="{{ $index + 1 }} / {{ count($productTests) }}">
                                            <a href="/" title="Banner">
                                                <picture
                                                    class="rounded-10 modal-open position-relative w-100 m-0 ratio1by3 d-block aspect">
                                                    <img class="d-block img img-cover position-absolute"
                                                        src="{{ asset($product['src']) }}" alt="{{ $product['alt'] }}"
                                                        style="width: 555px !important;">
                                                </picture>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="swiper-pagination mew_bn_p"></div>
                                <div class="swiper-button-prev mbc_prev d-none d-md-flex" tabindex="0" role="button"
                                    aria-label="Previous slide" aria-controls="swiper-wrapper-6b9844dd5610de07d"></div>
                                <div class="swiper-button-next mbc_next d-none d-md-flex" tabindex="0" role="button"
                                    aria-label="Next slide" aria-controls="swiper-wrapper-6b9844dd5610de07d"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            {{-- Slider đầu trang --}}
                            <script src="{{ asset('website/js/slider_image_small.js') }}" defer=""></script>


                            <div class="row">
                                <div class="col-12 col-lg-9 order-lg-2 pt-3 pt-lg-0">
                                    <div class="sortPagiBar pb-2 border-bottom">
                                        <ul
                                            class="aside-content filter-sort list-unstyled mb-0 d-flex align-items-baseline gap-10">
                                            <li>
                                                <span class="h6 title-head m-0 pt-2 pb-2 font-weight-bold">Sắp xếp
                                                    theo:</span>
                                            </li>
                                            <li class="filter-item filter-item--check-box">
                                                <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                    <input type="radio" class="d-none sortby-default" name="sortBy"
                                                        onclick="sortby('default')" checked="">
                                                    <span class="fa2 px-2 py-1 rounded-10 border">Mặc định</span>
                                                </label>
                                            </li>
                                            <li class="filter-item filter-item--check-box">
                                                <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                    <input type="radio" class="d-none sortby-price-asc" name="sortBy"
                                                        onclick="sortby('price-asc')">
                                                    <span class="fa2 px-2 py-1 rounded-10 border">Giá tăng dần</span>
                                                </label>
                                            </li>
                                            <li class="filter-item filter-item--check-box">
                                                <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                    <input type="radio" class="d-none sortby-price-desc"
                                                        name="sortBy" onclick="sortby('price-desc')" checked="true">
                                                    <span class="fa2 px-2 py-1 rounded-10 border">Giá giảm dần</span>
                                                </label>
                                            </li>
                                            <li class="filter-item filter-item--check-box">
                                                <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                                    <input type="radio" class="d-none sortby-created-asc"
                                                        name="sortBy" onclick="sortby('created-asc')">
                                                    <span class="fa2 px-2 py-1 rounded-10 border">Mới nhất</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection">
                                        <div class="category-products position-relative mt-3">
                                            <div class="row slider-items mb-3">
                                                @foreach ($products as $product)
                                                    <div
                                                        class="col-lg-3 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3">
                                                        <div
                                                            class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                                            <!-- Hình ảnh sản phẩm -->
                                                            <a href="{{ route('web.product.show_only_product', ['category' => $categories->firstWhere('id', $product->category_id)->slug, 'product' => $product->slug]) }}"
                                                                class="d-block mb-2 modal-open position-relative rounded thumb"
                                                                title="{{ $product->name }}">
                                                                <picture
                                                                    class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                                                    @php
                                                                        $image = $product->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                                                                    @endphp
                                                                    <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                                                        alt="{{ $image ? $image->file_name : 'default-image' }}"
                                                                        decoding="async"
                                                                        class="d-block img img-cover position-absolute">
                                                                </picture>
                                                            </a>

                                                            <!-- Thông tin sản phẩm -->
                                                            <div class="item-info position-relative">
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
                                                               
                                                                <h3 class="item-title font-weight-normal m-0">
                                                                    <a class="line_1"
                                                                        href="{{ route('web.product.show_only_product', ['category' => $categories->firstWhere('id', $product->category_id)->slug, 'product' => $product->slug]) }}"
                                                                        title="{{ $product->name }}">
                                                                        {{ $product->name }}
                                                                    </a>
                                                                </h3>
                                                                <div class="item-price position-relative">
                                                                    <span
                                                                        class="special-price font-weight-bold position-relative">
                                                                        {{ number_format($product->price) }}₫
                                                                    </span>
                                                                    @if ($product->original_price)
                                                                        <del class="old-price">
                                                                            {{ number_format($product->original_price) }}₫</del>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @if ($products->lastPage() > 1)
                                                <ul
                                                    class="pagination d-flex justify-content-center clearfix mt-4 mb-4">
                                                    {{-- Trang trước --}}
                                                    <li
                                                        class="page-item mx-1 {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                                        <a class="prev d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                            href="{{ $products->previousPageUrl() }}"
                                                            title="Trang trước">
                                                            <svg width="20" height="20">
                                                                <use href="#svg-prev"></use>
                                                            </svg>
                                                        </a>
                                                    </li>

                                                    {{-- Các trang số --}}
                                                    @foreach ($products->links()->elements[0] as $page => $url)
                                                        <li
                                                            class="page-item mx-1 {{ $page == $products->currentPage() ? 'active disabled' : '' }}">
                                                            <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                                href="{{ $url }}"
                                                                title="Trang {{ $page }}">
                                                                {{ $page }}
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                    {{-- Dấu ba chấm (khi có thêm trang) --}}
                                                    @if ($products->hasMorePages())
                                                        <li class="page-item mx-1">
                                                            <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                                href="javascript:;" title="Trang …">
                                                                …
                                                            </a>
                                                        </li>
                                                    @endif

                                                    {{-- Trang sau --}}
                                                    <li
                                                        class="page-item mx-1 {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                                        <a class="next d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                            href="{{ $products->nextPageUrl() }}" title="Trang sau">
                                                            <svg width="20" height="20">
                                                                <use href="#svg-next"></use>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            @endif


                                        </div>
                                    </div>

                                    {{-- Sản phẩm đã xem --}}
                                    <x-website.recently-viewed-products />

                                </div>
                                {{-- sidebar sản phẩm --}}
                                <x-website.sidebar-products />
                            </div>
                        </div>
                    </section>
                    <input type="text" class="d-none" id="coll-handle" value="(collectionid:product>0)">
                    <script>
                        var colId = 0;
                        var selectedViewData = 'data';
                        var isFilterRange = false;
                    </script>
                </div>
            </div>
        </div>


    </div>
</x-website-layout>
