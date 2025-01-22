<div class="col-xl-3 col-lg-4 col-md-12 d-none d-lg-block ba_sidebar">
    <div class="position-sticky top_20px">
        <div class="aside-content">
            <div class="h2 title-head font-weight-bold big text-uppercase d-block mb-2 p-2 rounded-10">
                Chủ đề nổi bật
            </div>
            <nav class="nav-category navbar-toggleable-md pb-3">
                <ul class="nav navbar-pills flex-column">
                    <li class="nav-item position-relative ">
                        <a title="Trang chủ" class="nav-link pl-0" href="/">Trang
                            chủ</a>
                    </li>
                    <li class="nav-item position-relative position-relative">
                        <a title="Sản phẩm" class="nav-link pl-0 pr-5">Sản
                            phẩm</a>
                        <i class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                        <ul class="menu_down" style="display: none;">
                            @foreach ($productCategories as $category)
                                <li class="dropdown-submenu nav-item  position-relative">
                                    <a href="{{ route('web.product.by_category', $category->slug) }}"
                                        class="nav-link pr-5" title="{{ $category->name }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item position-relative  position-relative">
                        <a href="{{ route('web.post.all') }}" title="Tin tức" class="nav-link pl-0 pr-5">Tin tức</a>
                        {{-- <i class="open_mnu down_icon align-items-center justify-content-center position-absolute"></i>
                        <ul class="menu_down" style="display:none;">
                            @foreach ($postCategories as $category)
                                <li class="nav-item">
                                    <a title="Cùng Me vào bếp" class="nav-link"
                                        href="{{ route('web.post_categories.show', $category->slug) }}">
                                        {{ $category->title }}
                                    </a>
                                </li>
                            @endforeach

                        </ul> --}}
                    </li>
                    <li class="nav-item position-relative ">
                        <a title="Liên kết chuỗi" class="nav-link pl-0" href="/pages/tuyen-dung">Liên kết chuỗi</a>
                    </li>
                    <li class="nav-item position-relative ">
                        <a title="Giới thiệu" class="nav-link pl-0" href="/pages/about-us">Giới thiệu</a>
                    </li>
                    <li class="nav-item position-relative ">
                        <a title="Liên hệ" class="nav-link pl-0" href="/pages/lien-he">Liên hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="aside-item mb-2">
            <div class="title-head mb-2 font-weight-bold">
                <a class="h2 title-head font-weight-bold big text-uppercase d-block mb-2 p-2 px-3 rounded-10"
                     title="Có thể bạn quan tâm">
                    Có thể bạn quan tâm
                </a>
            </div>
            <div class="list-blogs">
                @forelse ($latestPosts as $post)
                    <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                        <div class="img_art thumb_img_blog_list">
                            <a href="{{ route('web.post.show_only_post', ['category' => $post->category->slug, 'post' => $post->slug]) }}"
                                title="{{ $post->title }}" class="effect-ming">
                                @php
                                    $image = $post->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                                @endphp
                                <div
                                    class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                    <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                        class="d-block img img-cover position-absolute loaded" style="max-width: 100px; max-height: 135px;"
                                        alt="{{ $post->title }}">
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-item-name pl-3 m-0 position-relative line_3">
                            <a href="{{ route('web.post.show_only_post', ['category' => $post->category->slug, 'post' => $post->slug]) }}"
                                title="{{ $post->title }}">
                                {{ $post->title }}
                            </a>
                        </h3>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</div>
