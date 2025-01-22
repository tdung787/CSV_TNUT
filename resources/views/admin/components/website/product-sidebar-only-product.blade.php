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
                    <a href="{{ route('web.post.show_only_post', ['category' => $post->category?->slug, 'post' => $post->slug]) }}"
                        title="{{ $post->title }}" class="effect-ming">
                        @php
                            $image = $post->images->first(); // Lấy ảnh đầu tiên của sản phẩm (nếu có nhiều ảnh)
                        @endphp
                        <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                            <img src="{{ asset('storage/' . ($image ? $image->file_path : 'default-image.jpg')) }}"
                                class="d-block img img-cover position-absolute loaded"
                                style="max-width: 100px; max-height: 135px;" alt="{{ $post->title }}">
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
