<!-- resources/views/components/recently-viewed-products.blade.php -->
<div class="template-product" style="height: fit-content">
    <div class="box_product_1">
        <div class="t1 align-items-center d-flex justify-content-between mb-3">
            <h3 class="special-content_title font-coiny position-relative m-0">
                <span class="position-relative">Sản phẩm đã xem</span>
            </h3>
        </div>
        <div class="mg">
            <div class="swiper-container position-relative js-recent-slider px-2 pb-3 pb-lg-2">
                <div class="swiper-wrapper js-recent-container">
                    @foreach ($products as $product)
                        <div class="swiper-slide" style="width: 157.4px; margin-right: 12px;">
                            <div class="product-item position-relative p-2 rounded-10 bg-white h-100 border">
                                @if ($product->sale_percentage)
                                    <span class="sale-label sale-top-right position-absolute font-weight-bold">
                                        Giảm {{ $product->sale_percentage }}%
                                    </span>
                                @endif
                                <a href="{{ route('web.product.show_only_product', ['category' => $product->category->slug, 'product' => $product->slug]) }}"
                                    class="d-block mb-2 modal-open position-relative rounded thumb"
                                    title="{{ $product->name }}">
                                    <picture class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block zoom">
                                        @php
                                            $image = $product->images->first(); // Lấy ảnh đầu tiên của sản phẩm
                                        @endphp
                                        <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                            alt="{{ $image ? $image->file_name : 'default-image' }}" decoding="async"
                                            class="d-block img img-cover position-absolute">
                                    </picture>

                                </a>
                                <!-- Thông tin sản phẩm -->
                                <div class="item-info position-relative">
                                    <form action="{{ route('web.carts.add', ['productId' => $product->id]) }}"
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

                                    <h3 class="item-title font-weight-normal m-0">
                                        <a class="line_1"
                                            href="{{ route('web.product.show_only_product', ['category' => $categories->firstWhere('id', $product->category_id)->slug, 'product' => $product->slug]) }}"
                                            title="{{ $product->name }}">
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <div class="item-price position-relative">
                                        <span class="special-price font-weight-bold position-relative">
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
                <!-- Các nút điều khiển swiper -->
                <div class="swiper-button-prev mce_prev swiper-button-disabled" tabindex="-1" role="button"
                    aria-label="Previous slide" aria-disabled="true"></div>
                <div class="swiper-button-next mce_next swiper-button-disabled" tabindex="-1" role="button"
                    aria-label="Next slide" aria-disabled="true"></div>
            </div>
        </div>
    </div>
</div>
