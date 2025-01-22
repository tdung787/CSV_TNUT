<x-website-layout>
    <link rel="stylesheet" href="{{ asset('website/css/dat_hang.css') }}">

    <div class="flexbox">
        <div class="content">
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
                        <li><a href="{{ route('web.carts.index') }}">Giỏ hàng <span class="slash-divider ml-2 mr-2">
                                    <svg width="4" height="8">
                                        <use href="#svg-next-mini"></use>
                                    </svg>
                                </span></a></li>
                        <li>
                            Thông tin giao hàng
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrap">
                <div class="sidebar">
                    <div class="sidebar-content">
                        <div class="order-summary">
                            <h2 class="mt-3">Thông tin đơn hàng</h2>
                            <div class="order-summary-sections mt-3">
                                <div class="order-summary-section order-summary-section-product-list"
                                    data-order-summary-section="line-items">
                                    {{-- Hiển thị danh sách sản phẩm --}}
                                    <table class="product-table">
                                        <thead>
                                            <tr>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                <tr class="product" style="font-size: 14px">
                                                    <td class="product-image">
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail-wrapper">
                                                                @php
                                                                    $image = $cart->product->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                                                                @endphp
                                                                <img class="product-thumbnail-image"
                                                                    alt="{{ $cart->product->name }}"
                                                                    src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}" />
                                                            </div>
                                                            <span class="product-thumbnail-quantity"
                                                                aria-hidden="true">{{ $cart->quantity }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="product-description">
                                                        <span class="product-description-name order-summary-emphasis">
                                                            {{ $cart->product->name }}
                                                        </span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span
                                                            class="order-summary-emphasis">{{ number_format($cart->quantity * $cart->product->price) }}₫</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-summary-section order-summary-section-total-lines payment-lines">
                                    <table class="total-line-table">
                                        <tbody>
                                            <tr class="total-line total-line-subtotal">
                                                <td class="total-line-name">Tạm tính</td>
                                                <td class="total-line-price">
                                                    <span class="order-summary-emphasis">
                                                        {{ number_format($totalAmount) }}₫
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="total-line total-line-shipping">
                                                <td class="total-line-name">Phí vận chuyển</td>
                                                <td class="total-line-price">
                                                    <span class="order-summary-emphasis"> — </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="total-line-table-footer">
                                            <tr class="total-line">
                                                <td class="total-line-name payment-due-label">
                                                    <span class="payment-due-label-total">Tổng cộng</span>
                                                </td>
                                                <td class="total-line-name payment-due">
                                                    <span class="payment-due-currency">VND</span>
                                                    <span class="payment-due-price">
                                                        {{ number_format($totalAmount) }}₫
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main" style="padding-top: 0px">
                    <div class="main-content">
                        <div class="step">
                            <div class="step-sections">
                                <div class="section">
                                    <div class="section-header" style="margin-top: 20px">
                                        <h2 class="section-title">Thông tin giao hàng</h2>
                                    </div>
                                    <div class="section-content section-customer-information no-mb">
                                        @guest
                                            <p class="section-content-text">
                                                Bạn đã có tài khoản?
                                                <a href="/login">Đăng nhập</a>
                                            </p>
                                        @else
                                        @endguest
                                    </div>
                                    <div class="section-content">
                                        <div class="fieldset">
                                            <form method="POST" action="{{ route('web.checkout.placeOrder') }}">
                                                @csrf

                                                <style>
                                                    .error-message {
                                                        color: red;
                                                        font-size: smaller;
                                                    }
                                                </style>
                                                <div class="content-box radio-wrapper p-3">
                                                    <div class="field">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="name_user">
                                                                Họ và tên</label>
                                                            <input placeholder="Họ và tên" autocapitalize="off"
                                                                spellcheck="false" class="field-input" size="30"
                                                                type="text" id="name_user" name="name_user"
                                                                autocomplete="false" />
                                                            @error('name_user')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="field field-two-thirds">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="email_user">Email</label>
                                                            <input autocomplete="false" placeholder="Email"
                                                                autocapitalize="off" spellcheck="false"
                                                                class="field-input" size="30" type="email"
                                                                id="email_user" name="email_user" />
                                                                @error('email_user')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="field field-required field-third">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="phone">Số điện
                                                                thoại</label>
                                                            <input autocomplete="false" placeholder="Số điện thoại"
                                                                autocapitalize="off" spellcheck="false"
                                                                class="field-input" size="30" maxlength="15"
                                                                type="tel" id="phone" name="phone" />
                                                                @error('phone')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="field field-show-floating-label field-third">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="city">Tỉnh /
                                                                thành</label>
                                                            <select class="field-input" id="city"
                                                                name="province">
                                                                <option value="" selected>Chọn tỉnh thành
                                                                </option>
                                                            </select>
                                                            @error('province')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="field field-show-floating-label field-third">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for=""> Quận /
                                                                huyện
                                                            </label>
                                                            <select class="field-input" id="district"
                                                                aria-label=".form-select-sm" name="district">
                                                                <option value="" selected>Chọn quận huyện
                                                                </option>
                                                            </select>
                                                            @error('district')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="field field-show-floating-label field-third">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for=""> Phường / xã
                                                            </label>
                                                            <select class="field-input" id="ward"
                                                                aria-label=".form-select-sm" name="commune">
                                                                <option value="" selected>Chọn phường xã
                                                                </option>
                                                            </select>
                                                            @error('commune')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="field field-required">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="shipping_address">
                                                                Địa chỉ chi tiết
                                                            </label>
                                                            <input autocomplete="false" spellcheck="false"
                                                                class="field-input" size="30" maxlength="15"
                                                                type="tel" id="shipping_address"
                                                                name="shipping_address" />
                                                                @error('shipping_address')
                                                                <div class="error-message">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                                                <script>
                                                    var citis = document.getElementById("city");
                                                    var districts = document.getElementById("district");
                                                    var wards = document.getElementById("ward");
                                                    var Parameter = {
                                                        url: "{{ asset('website/data_hanh_chinh.json') }}",
                                                        method: "GET",
                                                        responseType: "application/json",
                                                    };
                                                    var promise = axios(Parameter);
                                                    promise.then(function(result) {
                                                        renderCity(result.data);
                                                    });

                                                    function renderCity(data) {
                                                        for (const x of data) {
                                                            citis.options[citis.options.length] = new Option(x.Name, x.Id);
                                                        }
                                                        citis.onchange = function() {
                                                            district.length = 1;
                                                            ward.length = 1;
                                                            if (this.value != "") {
                                                                const result = data.filter(n => n.Id === this.value);

                                                                for (const k of result[0].Districts) {
                                                                    district.options[district.options.length] = new Option(k.Name, k.Id);
                                                                }
                                                            }
                                                        };
                                                        district.onchange = function() {
                                                            ward.length = 1;
                                                            const dataCity = data.filter((n) => n.Id === citis.value);
                                                            if (this.value != "") {
                                                                const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                                                                for (const w of dataWards) {
                                                                    wards.options[wards.options.length] = new Option(w.Name, w.Id);
                                                                }
                                                            }
                                                        };
                                                    }
                                                </script>

                                                <div class="step-footer">
                                                    <button type="submit"
                                                        class="p-2 btn-cart position-relative d-inline-flex text-uppercase head_svg justify-content-center align-items-center rounded-10"
                                                        title="Giỏ hàng">
                                                        <span class="btn-content p-2">Đặt hàng</span>
                                                    </button>
                                                    <a class="mr-auto" href="{{ route('web.carts.index') }}">
                                                        Quay lại giỏ hàng
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
