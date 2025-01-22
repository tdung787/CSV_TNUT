@if ($relatedPosts->isNotEmpty())
<div class="main blogs mt-4">
    <h3 class="title font-weight-bold position-relative pb-2 pb-lg-3 m-0">
        <a class="position-relative" title="Bài viết liên quan">
            Bài viết liên quan
        </a>
    </h3>
    <div class="widget-content latest-blog swiper-container position-relative">
        <div class="swiper-wrapper">
            @foreach ($relatedPosts as $relatedPost)
                <div class="swiper-slide">
                    <div class="item_grid mb-4">
                        <div class="img_thm position-relative modal-open rounded-10">
                            <a href="{{ route('web.post.show_only_post', ['category' => $relatedPost->category->slug, 'post' => $relatedPost->slug]) }}"
                                title="{{ $relatedPost->title }}"
                                class="d-block position-relative effect-ming thumb modal-open rounded-10">
                                <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 aspect">
                                    @php
                                        // Kiểm tra ảnh đầu tiên của bài viết
                                        $image = $relatedPost->images->first();
                                        $imagePath = $image
                                            ? "post/images/{$relatedPost->id}/{$image->file_name}"
                                            : 'default-image.jpg';
                                    @endphp
                                    <img src="{{ asset('storage/' . $imagePath) }}" style="max-width: 300px; max-height: 345px;"
                                        class="d-block img img-cover position-absolute" alt="{{ $relatedPost->title }}">
                                    <div class="position-absolute w-100 h-100 overlay">
                                    </div>
                                </div>
                                <div class="entry-date position-absolute text-center rounded-right">
                                    <p class="day font-weight-bold">
                                        {{ $relatedPost->published_at->format('d') }}
                                        <!-- Đúng cú pháp ở đây -->
                                    </p>
                                    <p class="yeah">
                                        {{ $relatedPost->published_at->format('m/Y') }}
                                        <!-- Đúng cú pháp ở đây -->
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="custom-article-item_info mt-2">
                            <h3 class="title_blo mb-2">
                                <a class="line_2 font-weight-bold h-auto"
                                    style="font-size: 16px"
                                    href="{{ route('web.post.show_only_post', ['category' => $category->slug, 'post' => $relatedPost->slug]) }}"
                                    title="{{ $relatedPost->title }}">
                                    {{ $relatedPost->title }}
                                </a>
                            </h3>
                            <div class="mb-2" style="font-size: 14px">
                                {!! Str::limit(strip_tags($relatedPost->content), 120) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev me_latest_blog_prev"></div>
        <div class="swiper-button-next me_latest_blog_next"></div>
    </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        speed: 600,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });
</script>
@endif