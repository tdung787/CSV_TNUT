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
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
            <div class="com_info">
                <div class="container mb-3">
                    <div class="bg-white px-2 p-lg-3 rounded-10 col-main page-title">
                        <h1 class="pt-2 pt-lg-0 mb-2 mb-lg-3 mt-0 font-weight-bold">
                            Liên hệ
                        </h1>
                        <div class="m-auto bg-white d-block">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <address class="vcard mb-4">
                                        <p class="adr mb-1"><b>Thái Nguyên: </b>Xóm Bãi Bông, xã Hợp Tiến Huyện Đồng Hỷ,
                                            tỉnh Thái Nguyên</p>
                                        <p class="mb-1"><b>Hotline: </b><a href="tel:0339902798"
                                                title="0339902798">0339902798</a></p>
                                        <p class="mb-1"><b>Email: </b><a href="mailto:btruongvan03@gmail.com"
                                                title="btruongvan03@gmail.com">btruongvan03@gmail.com</a></p>
                                    </address>
                                    <div class="mt-3 "
                                        style="border: 1px solid;border-color: #377e7d;border-radius: 6px;">

                                        <span class="require d-block mb-3"><em class="required">  * </em>Thông tin bắt
                                            buộc</span>

                                        <form action="{{ route('web.contacts.store') }}" method="POST"
                                            class="contact-form p-2">
                                            @csrf

                                            <div class="customer-name row">
                                                <div class="col-4 form-group">
                                                    <input type="text" class="form-control rounded-10" name="name"
                                                        placeholder="Tên *" required="">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <input type="email" class="form-control rounded-10" name="email"
                                                        placeholder="Địa chỉ email">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <input type="phone" class="form-control rounded-10" name="phone"
                                                        placeholder="Số điện thoại *">
                                                </div>
                                                <div class="col-12 form-group">
                                                    <div class="mb-3">
                                                        <label for="content" class="form-label">Nội dung *</label>
                                                        <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                                        @error('content')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons-set">
                                                <button type="submit" title="Submit" style="justify-self: center;
"
                                                    class="sitdown rounded-10 modal-open position-relative book-submit btn btn-primary text-center d-flex align-items-center font-weight-bold subml">Gửi</button>
                                            </div>



                                        </form>
                                    </div>

                                    <x-admin.forms.tinymce-config column="content" model="Contact" id="content" />

                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="google-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3622.5847510964336!2d106.02398759678954!3d21.604387099999993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31353bce4d1fb633%3A0x8414b0332e2e8cc5!2zQsOjaSBiw7RuZw!5e1!3m2!1svi!2s!4v1734664854408!5m2!1svi!2s"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
