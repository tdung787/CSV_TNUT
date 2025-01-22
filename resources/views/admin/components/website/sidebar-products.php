<div class="col-12 col-lg-3 order-lg-1">
    <div class="sidebar sidebar_mobi mb-3 p-2 p-lg-0 d-flex flex-column">
        <div
            class="aside-filter mb-3 modal-open w-100 pr-0 pr-md-2 order-lg-3 clearfix">
            <div class="heading d-none">
                <div class="h2 title-head font-coiny big mt-2 mb-0">
                    Bộ lọc
                </div>
                <p class="font-italic pt-2 pb-2 mb-0">Giúp bạn tìm kiếm sản phẩm nhanh
                    hơn</p>
            </div>
            <div class="filter-container row">
                <aside class="aside-item filter-price mb-3 col-12 col-sm-6 col-lg-12">
                    <div class="h2 title-head font-coiny big p-2 px-3 rounded-10">Lọc giá
                    </div>
                    <div class="aside-content filter-group">
                        <ul class="ft_price list-unstyled m-0">
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0" for="filter-price-duoi-100-000d">
                                    <input type="checkbox" id="filter-price-duoi-100-000d" class="d-none" onchange="toggleFilter(this);" data-group="khoanggia" data-field="price_min" value="(price:product<=100000)" data-operator="OR">
                                    <i class="fa position-relative mr-2"></i> Dưới 100.000đ
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0"
                                    for="filter-price-100-000d-200-000d">
                                    <input type="checkbox"
                                        id="filter-price-100-000d-200-000d"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="khoanggia" data-field="price_min"
                                        value="(price:product>=100000)&amp;&amp;(price:product<200001)"
                                        data-operator="OR">
                                    <i class="fa position-relative mr-2"></i> 100.000đ
                                    - 200.000đ
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0"
                                    for="filter-price-200-000d-500-000d">
                                    <input type="checkbox"
                                        id="filter-price-200-000d-500-000d"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="khoanggia" data-field="price_min"
                                        value="(price:product>=200000)&amp;&amp;(price:product<500001)"
                                        data-operator="OR">
                                    <i class="fa position-relative mr-2"></i> 200.000đ
                                    - 500.000đ
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0"
                                    for="filter-price-500-000d-1-000-000d">
                                    <input type="checkbox"
                                        id="filter-price-500-000d-1-000-000d"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="khoanggia" data-field="price_min"
                                        value="(price:product>=500000)&amp;&amp;(price:product<1000001)"
                                        data-operator="OR">
                                    <i class="fa position-relative mr-2"></i> 500.000đ
                                    - 1.000.000đ
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0"
                                    for="filter-price-1-000-000d-2-000-000d">
                                    <input type="checkbox"
                                        id="filter-price-1-000-000d-2-000-000d"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="khoanggia" data-field="price_min"
                                        value="(price:product>=1000000)&amp;&amp;(price:product<2000001)"
                                        data-operator="OR">
                                    <i class="fa position-relative mr-2"></i>
                                    1.000.000đ - 2.000.000đ
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box ">
                                <label class="d-flex align-items-baseline py-1 m-0"
                                    for="filter-price-tren-2-000-000d">
                                    <input type="checkbox"
                                        id="filter-price-tren-2-000-000d"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="khoanggia" data-field="price_min"
                                        value="(price:product>=2000000)"
                                        data-operator="OR">
                                    <i class="fa position-relative mr-2"></i> Trên
                                    2.000.000đ
                                </label>
                            </li>
                        </ul>
                    </div>
                </aside>
                <aside class="aside-item filter-vendor mb-3 col-12 col-sm-4 col-lg-12">
                    <div class="h2 title-head font-coiny big p-2 px-3 rounded-10">Thương
                        hiệu</div>
                    <div class="aside-content filter-group">
                        <ul class="filter-vendor filter-grid list-unstyled m-0 pr-1">
                            <li class="filter-item filter-item--check-box  ">
                                <label class="d-flex align-items-baseline m-0 khac"
                                    data-filter="khác" for="filter-vendor-khac">
                                    <input type="checkbox" id="filter-vendor-khac"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="vendor" data-field="vendor"
                                        value="(vendor:product**Khác)"
                                        data-operator="OR">
                                    <span
                                        class="fa2 px-2 py-1 rounded-10 border">Khác</span>
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box  ">
                                <label class="d-flex align-items-baseline m-0 cag"
                                    data-filter="cag" for="filter-vendor-cag">
                                    <input type="checkbox" id="filter-vendor-cag"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="vendor" data-field="vendor"
                                        value="(vendor:product**CAG)"
                                        data-operator="OR">
                                    <span
                                        class="fa2 px-2 py-1 rounded-10 border">CAG</span>
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box  ">
                                <label class="d-flex align-items-baseline m-0 viet-gap"
                                    data-filter="viet gap"
                                    for="filter-vendor-viet-gap">
                                    <input type="checkbox" id="filter-vendor-viet-gap"
                                        class="d-none" onchange="toggleFilter(this)"
                                        data-group="vendor" data-field="vendor"
                                        value="(vendor:product**Viet Gap)"
                                        data-operator="OR">
                                    <span class="fa2 px-2 py-1 rounded-10 border">Viet
                                        Gap</span>
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box  ">
                                <label
                                    class="d-flex align-items-baseline m-0 khanh-hoa"
                                    data-filter="khánh hòa"
                                    for="filter-vendor-khanh-hoa">
                                    <input type="checkbox"
                                        id="filter-vendor-khanh-hoa" class="d-none"
                                        onchange="toggleFilter(this)"
                                        data-group="vendor" data-field="vendor"
                                        value="(vendor:product**Khánh Hòa)"
                                        data-operator="OR">
                                    <span class="fa2 px-2 py-1 rounded-10 border">Thái Nguyên</span>
                                </label>
                            </li>
                            <li class="filter-item filter-item--check-box  ">
                                <label
                                    class="d-flex align-items-baseline m-0 nova-scotia"
                                    data-filter="nova scotia"
                                    for="filter-vendor-nova-scotia">
                                    <input type="checkbox"
                                        id="filter-vendor-nova-scotia" class="d-none"
                                        onchange="toggleFilter(this)"
                                        data-group="vendor" data-field="vendor"
                                        value="(vendor:product**Nova Scotia)"
                                        data-operator="OR">
                                    <span class="fa2 px-2 py-1 rounded-10 border">Nova
                                        Scotia</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
        <!-- <div class="filter-container__selected-filter position-relative order-lg-2 rounded-10 p-2 mb-3">
            <div class="filter-container__selected-filter-header d-flex clearfix pt-1 pb-1">
                <div class="filter-container__selected-filter-header-title position-relative">Lọc theo:</div>

            </div>
            <ul class="filter-container__selected-filter-list pl-0 m-0 list-unstyled d-block w-100 position-relative clearfix">
                <li class="filter-container__selected-filter-item d-inline-flex align-items-center mr-2 mb-1" for="filter-price-duoi-100-000d"><a href="javascript:void(0)" class="p-1 pl-2 rounded" onclick="removeFilteredItem('filter-price-duoi-100-000d')">

                        Dưới 100.000đ
                        <svg width="18" height="18">
                            <use href="#svg-close"></use>
                        </svg></a></li>
            </ul>
        </div> -->
        <div class="aside-item mb-2 pt-2 order-3 d-none d-lg-block ">
            <a class="h2 title-head font-coiny big d-block mb-2 p-2 px-3 rounded-10"
                href="/blogs/news" title="Mẹo ăn ngon">
                Mẹo ăn ngon
            </a>
            <div class="list-blogs">
                <article
                    class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                    <div class="img_art thumb_img_blog_list">
                        <a href="/blogs/news/huong-dan-5-cach-lam-mon-ca-hoi-sot-vua-ngon-vua-nhieu-dinh-duong-cho"
                            title="Hướng dẫn 5 cách làm món cá hồi sốt vừa ngon, vừa nhiều dinh dưỡng cho gia đình"
                            class="effect-ming">
                            <div
                                class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                <img src="https://file.hstatic.net/200000830051/article/avt2_56b59f94bc2c4a45b95c4f741d6c740f_large.jpg"
                                    class="d-block img img-cover position-absolute"
                                    alt="Hướng dẫn 5 cách làm món cá hồi sốt vừa ngon, vừa nhiều dinh dưỡng cho gia đình">
                            </div>
                        </a>
                    </div>
                    <h3 class="blog-item-name pl-3 m-0 position-relative">
                        <a class="line_3"
                            href="/blogs/news/huong-dan-5-cach-lam-mon-ca-hoi-sot-vua-ngon-vua-nhieu-dinh-duong-cho"
                            title="Hướng dẫn 5 cách làm món cá hồi sốt vừa ngon, vừa nhiều dinh dưỡng cho gia đình">Hướng
                            dẫn 5 cách làm món cá hồi sốt vừa ngon, vừa nhiều dinh dưỡng
                            cho gia đình</a>
                    </h3>
                </article>
                <article
                    class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                    <div class="img_art thumb_img_blog_list">
                        <a href="/blogs/news/tong-hop-nhung-mon-ngon-tu-thit-bo-giup-noi-com-luon-sach-veo"
                            title="Tổng hợp những món ngon từ thịt bò giúp nồi cơm luôn sạch veo"
                            class="effect-ming">
                            <div
                                class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                <img src="https://file.hstatic.net/200000830051/article/avt_d6561d343b144ed5959dd9f434d8468f_large.jpg"
                                    class="d-block img img-cover position-absolute"
                                    alt="Tổng hợp những món ngon từ thịt bò giúp nồi cơm luôn sạch veo">
                            </div>
                        </a>
                    </div>
                    <h3 class="blog-item-name pl-3 m-0 position-relative">
                        <a class="line_3"
                            href="/blogs/news/tong-hop-nhung-mon-ngon-tu-thit-bo-giup-noi-com-luon-sach-veo"
                            title="Tổng hợp những món ngon từ thịt bò giúp nồi cơm luôn sạch veo">Tổng
                            hợp những món ngon từ thịt bò giúp nồi cơm luôn sạch veo</a>
                    </h3>
                </article>
            </div>
        </div>
    </div>
</div>