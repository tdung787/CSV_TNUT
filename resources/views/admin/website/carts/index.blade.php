<x-website-layout>
    <link rel="preload" as="style" href="{{ asset('website/css/cart.scss.css') }}" type="text/css">
    <link href="{{ asset('website/css/cart.scss.css') }}" rel="stylesheet" type="text/css" media="all">

    <div class="w-100 clearfix">
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
                            <li>Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
                <section class="cart-layout mt-3 mb-3">
                    <div class="container">
                        <h1 class="cart-name font-coiny text-uppercase pb-2 pt-2 mb-2 d-none">
                            Giỏ hàng
                        </h1>
                        <div class="row js-cart">
                            <div class="col-lg-8">
                                <div class="basket cart__basket">
                                    @forelse ($carts as $cart)
                                        <div
                                            class="d-flex cart__basket__item product mb-3 mb-lg-4 ux-card position-relative clearfix">
                                            <!-- Hình ảnh sản phẩm -->
                                            <img src="{{ asset('storage/' . $cart->product->images->first()->file_path) }}"
                                                class="position-absolute" alt="{{ $cart->product->name }}">

                                            <!-- Thông tin sản phẩm -->
                                            <div class="col-12 d-flex p-0">
                                                <p class="item-title clearfix mb-0 mb-md-2">
                                                    <a href="{{ route('web.product.show_only_product', ['category' => $cart->product->category->slug, 'product' => $cart->product->slug]) }}"
                                                        title="{{ $cart->product->name }}" class="font-weight-bold">
                                                        {{ $cart->product->name }}
                                                    </a>
                                                </p>
                                            </div>

                                            <!-- Giá và số lượng -->
                                            <div
                                                class="align-items-center b_ac d-flex flex-wrap justify-content-between mt-2 w-100">
                                                <div class="js-number-input number-input rounded d-inline-flex"
                                                    data-price-per-unit="{{ $cart->product->price }}">
                                                    <button type="button"
                                                        class="step-down-qty js-step-qty text-main2 rounded-circle"
                                                        data-cart-id="{{ $cart->id }}" data-action="decrease">
                                                    </button>
                                                    <input
                                                        class="text-center font-weight-bold text-main2 quantity-input"
                                                        min="1" name="quantity" value="{{ $cart->quantity }}"
                                                        size="1" type="number"
                                                        data-cart-id="{{ $cart->id }}">
                                                    <button type="button"
                                                        class="position-relative m-0 p-0 step-up-qty js-step-qty plus text-main2 rounded-circle"
                                                        data-cart-id="{{ $cart->id }}" data-action="increase">

                                                    </button>
                                                </div>

                                                <span
                                                    class="price font-weight-bold text-right clearfix text-main2 cart-item-total"
                                                    id="cart-item-total-{{ $cart->id }}">
                                                    {{ number_format($cart->quantity * $cart->product->price) }}₫
                                                </span>
                                            </div>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    // Gửi yêu cầu cập nhật giỏ hàng
                                                    function updateCartQuantity(cartId, quantity) {
                                                        if (quantity < 1) return; // Ngăn số lượng dưới 1

                                                        fetch(`/gio-hang/update/${cartId}`, {
                                                                method: 'PATCH',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                                                },
                                                                body: JSON.stringify({
                                                                    quantity: quantity
                                                                })
                                                            })
                                                            .then(response => {
                                                                if (!response.ok) {
                                                                    throw new Error(`HTTP error! status: ${response.status}`);
                                                                }
                                                                return response.json();
                                                            })
                                                            .then(data => {
                                                                if (data.success) {
                                                                    // Cập nhật giao diện
                                                                    const totalElement = document.getElementById(`cart-item-total-${cartId}`);
                                                                    totalElement.textContent = `${new Intl.NumberFormat().format(data.item_total)}₫`;

                                                                    const cartTotalElement = document.querySelector('.cart__summary_total');
                                                                    if (cartTotalElement) {
                                                                        cartTotalElement.textContent =
                                                                            `${new Intl.NumberFormat().format(data.cart_total)}₫`;
                                                                    }
                                                                } else {
                                                                    console.error('Error from server:', data.message);
                                                                }
                                                            })
                                                            .catch(error => console.error('Fetch error:', error.message));
                                                    }


                                                    // Đảm bảo mỗi sự kiện chỉ được gắn một lần
                                                    document.querySelectorAll('.js-step-qty').forEach(button => {
                                                        button.addEventListener('click', function(e) {
                                                            e.preventDefault(); // Ngăn chặn hành vi mặc định
                                                            e.stopImmediatePropagation(); // Ngăn chặn sự kiện lặp

                                                            const cartId = this.dataset.cartId;
                                                            const action = this.dataset.action;
                                                            const input = this.closest('.js-number-input').querySelector('.quantity-input');
                                                            let quantity = parseInt(input.value);

                                                            // Tăng hoặc giảm số lượng
                                                            if (action === 'increase') quantity++;
                                                            if (action === 'decrease') quantity--;

                                                            if (quantity < 1) return;

                                                            // Cập nhật input ngay lập tức
                                                            input.value = quantity;

                                                            // Cập nhật tổng giá sản phẩm ngay lập tức
                                                            const pricePerUnit = parseFloat(this.closest('.js-number-input').dataset
                                                                .pricePerUnit);
                                                            const totalElement = document.getElementById(`cart-item-total-${cartId}`);
                                                            totalElement.textContent =
                                                                `${new Intl.NumberFormat().format(pricePerUnit * quantity)}₫`;

                                                            // Gửi yêu cầu AJAX để cập nhật giỏ hàng
                                                            updateCartQuantity(cartId, quantity);
                                                        });
                                                    });

                                                    // Sự kiện thay đổi trực tiếp trên input
                                                    document.querySelectorAll('.quantity-input').forEach(input => {
                                                        input.addEventListener('change', function(e) {
                                                            e.preventDefault(); // Ngăn chặn hành vi mặc định
                                                            e.stopImmediatePropagation(); // Ngăn chặn sự kiện lặp

                                                            const cartId = this.dataset.cartId;
                                                            const quantity = parseInt(this.value);

                                                            if (quantity < 1) return;

                                                            // Cập nhật tổng giá sản phẩm ngay lập tức
                                                            const pricePerUnit = parseFloat(this.closest('.js-number-input').dataset
                                                                .pricePerUnit);
                                                            const totalElement = document.getElementById(`cart-item-total-${cartId}`);
                                                            totalElement.textContent =
                                                                `${new Intl.NumberFormat().format(pricePerUnit * quantity)}₫`;

                                                            // Gửi yêu cầu AJAX để cập nhật giỏ hàng
                                                            updateCartQuantity(cartId, quantity);
                                                        });
                                                    });
                                                });
                                            </script>
                                            <!-- Nút xoá -->
                                            <form method="POST" action="{{ route('web.carts.destroy', $cart->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="btn text-main remove ml-auto js-remove-item-cart position-absolute rounded-circle font-weight-bold"
                                                    title="Xoá">
                                                    Xoá
                                                </button>
                                            </form>
                                        </div>
                                    @empty
                                        <p>Giỏ hàng của bạn đang trống.</p>
                                    @endforelse
                                </div>
                            </div>

                            <!-- Tổng tiền -->
                            <div class="summary cart__summary col-lg-4 mt-3 mt-lg-0">
                                <div class="bx_right_cart d-flex flex-column bg-white border p-2 p-lg-3 rounded-10">
                                    <div class="bm_checkout">
                                        <dl
                                            class="align-items-center d-flex flex-wrap justify-content-between mb-3 total">
                                            <dt class="text-uppercase font-weight-bold text-btn">Tổng tiền</dt>
                                            <dd class="cart__summary_total font-weight-bold mb-0">
                                                {{ number_format($totalAmount) }}₫
                                            </dd>
                                        </dl>
                                        <a class="d-none d-lg-block text-white btn btn-checkout rounded-10 mb-0 mb-lg-3 text-uppercase font-weight-bold py-2 py-lg-3 px-3 px-lg-4"
                                            href="{{ route('web.checkout.index') }}" role="button">
                                            Thanh toán ngay
                                        </a>
                                        <a class="d-block font-weight-bold px-3 rounded-10 text-center text-primary"
                                            href="{{ route('web.product.all') }}">
                                            Tiếp tục mua hàng?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row cart__empty d-none">
                            <div class="col-md-12">
                                <div class="alert alert-warning" role="alert">Không có sản phẩm nào. Quay
                                    lại <a href="{{ route('web.product.all') }}" class="alert-link">cửa hàng</a> để
                                    tiếp tục
                                    mua sắm.</div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

</x-website-layout>
