<div class="col-xl-12 col-lg-4 col-md-12 col-sm-12 col-12">
    <div class="m_product relate_pr mb-3 mt-3">
        <h3 class="title mb-3 font-coiny position-relative">
            <a class="position-relative" href="#" title="Sản phẩm cùng loại">Sản phẩm cùng loại</a>
            <div class="swiper-button-prev mre_prev swiper-button-disabled" tabindex="-1" role="button"
                aria-label="Previous slide" aria-disabled="true"></div>
            <div class="swiper-button-next mre_next" tabindex="0" role="button" aria-label="Next slide"
                aria-disabled="false"></div>
        </h3>
        <div class="relate_product swiper-container position-relative pl-2">
            <div class="swiper-wrapper">
                @foreach ($relatedProducts->chunk(3) as $chunkedProducts)
                    <!-- Sử dụng chunk để nhóm 3 sản phẩm lại với nhau -->
                    <div class="swiper-slide">

                        @foreach ($chunkedProducts as $relatedProduct)
                            <div class="product-item position-relative border rounded-10" style="margin-bottom: 8px">
                                <div class="row">
                                    <div class="col-4 pr-0">
                                        <a href="{{ route('web.product.show_only_product', ['category' => $category->slug, 'product' => $relatedProduct->slug]) }}"
                                            class="thumb d-block modal-open" title="{{ $relatedProduct->name }}">
                                            <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                                @php
                                                    $image = $relatedProduct->images->first();
                                                    $imagePath = $image
                                                        ? "product/images/{$relatedProduct->id}/{$image->file_name}"
                                                        : 'default-image.jpg';
                                                @endphp
                                                <img src="{{ asset('storage/' . $imagePath) }}"
                                                    class="d-block img img-cover position-absolute" style="border-radius: 10px; margin: 2px"
                                                    alt="{{ $image ? $image->file_name : 'default-image' }}">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item-info col-7 small">
                                        <p class="item-title font-weight-normal">
                                            <a class="modal-open h-auto line_2"
                                                href="{{ route('web.product.show_only_product', ['category' => $category->slug, 'product' => $relatedProduct->slug]) }}"
                                                title="{{ $relatedProduct->name }}">
                                                {{ $relatedProduct->name }}
                                            </a>
                                        </p>
                                        <div class="item-price mb-1">
                                            <span
                                                class="special-price font-weight-bold">{{ number_format($relatedProduct->price) }}₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endforeach
            </div>
            <a class="more_view d-block text-center py-2 px-3 border rounded-pill mt-2"
                href="{{ route('web.product.by_category', $category->slug) }}" title="Xem tất cả">Xem tất cả</a>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            var swiperRelateProduct = new Swiper('.relate_product', {
                spaceBetween: 16, // Khoảng cách giữa các sản phẩm
                loop: false, // Không lặp lại các sản phẩm
                speed: 1000, // Tốc độ cuộn
                navigation: {
                    nextEl: '.mre_next',
                    prevEl: '.mre_prev',
                },
                slidesPerView: 1, // Hiển thị 1 slide cho mỗi lần cuộn
                breakpoints: {
                    320: {
                        slidesPerView: 1, // Hiển thị 1 slide cho màn hình nhỏ
                    },
                    576: {
                        slidesPerView: 1, // Hiển thị 1 slide cho màn hình vừa
                    },
                    768: {
                        slidesPerView: 1, // Hiển thị 1 slide cho màn hình rộng
                    },
                    992: {
                        slidesPerView: 1, // Hiển thị 1 slide cho màn hình lớn
                    },
                    1200: {
                        slidesPerView: 1, // Hiển thị 1 slide cho màn hình rộng nhất
                    }
                }
            });
        });
    </script>
</div>
