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
                        <li><a href="{{ route('web.post.all') }}">Tin tức</a>
                            <span class="slash-divider ml-2 mr-2">
                                <svg width="4" height="8">
                                    <use href="#svg-next-mini"></use>
                                </svg>
                            </span>
                        </li>
                        <li>
                            <a>{{ $category->title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="col2-right-layout">
                <div class="main container blogs">
                    <div class="col-main art_container mt-3 mb-3">
                        <div class="row">
                            <article class="blog_entry clearfix row col-md-12 col-lg-8 col-xl-9"
                                style="height: max-content">
                                @foreach ($posts as $post)
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 its mb-3" style="height: max-content">
                                        <div class="item_grid mb-4">
                                            <div class="img_thm position-relative modal-open rounded-10">
                                                <a href="{{ route('web.post.show_only_post', ['category' => $category->slug, 'post' => $post->slug]) }}"
                                                    title="{{ $post->title }}"
                                                    class="d-block position-relative effect-ming thumb modal-open rounded-10">
                                                    <div
                                                        class="position-relative w-100 m-0 be_opa modal-open ratio3by2 aspect">
                                                        @php
                                                            $image = $post->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                                                        @endphp

                                                        <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                                            class="d-block img img-cover position-absolute loaded" style="max-width: 300px; max-height: 345px;"
                                                            alt="{{ $post->title }}">

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
                                                        href="{{ route('web.post.show_only_post', ['category' => $category->slug, 'post' => $post->slug]) }}"
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
                                <div class="col-12">
                                    @if ($posts->lastPage() > 1)
                                        <ul class="pagination d-flex justify-content-center clearfix mt-4 mb-4">
                                            {{-- Trang trước --}}
                                            <li class="page-item mx-1 {{ $posts->onFirstPage() ? 'disabled' : '' }}">
                                                <a class="prev d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                    href="{{ $posts->previousPageUrl() }}" title="Trang trước">
                                                    <svg width="20" height="20">
                                                        <use href="#svg-prev"></use>
                                                    </svg>
                                                </a>
                                            </li>

                                            {{-- Các trang số --}}
                                            @foreach ($posts->links()->elements[0] as $page => $url)
                                                <li
                                                    class="page-item mx-1 {{ $page == $posts->currentPage() ? 'active disabled' : '' }}">
                                                    <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                        href="{{ $url }}" title="Trang {{ $page }}">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @endforeach

                                            {{-- Dấu ba chấm (khi có thêm trang) --}}
                                            @if ($posts->hasMorePages())
                                                <li class="page-item mx-1">
                                                    <a class="d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                        href="javascript:;" title="Trang …">
                                                        …
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Trang sau --}}
                                            <li class="page-item mx-1 {{ $posts->hasMorePages() ? '' : 'disabled' }}">
                                                <a class="next d-flex align-items-center justify-content-center page-link rounded-10 text-center"
                                                    href="{{ $posts->nextPageUrl() }}" title="Trang sau">
                                                    <svg width="20" height="20">
                                                        <use href="#svg-next"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    @endif
                                </div>

                            </article>

                            {{-- Sidebar bài viết  --}}
                            <x-website.post-sidebar />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-website-layout>
