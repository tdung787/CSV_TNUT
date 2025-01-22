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
                        </li>
                    </ul>
                </div>
            </div>
            <section class="col2-right-layout">
                <div class="main container blogs">
                    <div class="col-main art_container mt-3 mb-3">
                        <div class="row">
                            <article class="blog_entry clearfix col-12 col-md-12 col-lg-8 col-xl-9">
                                <h1 class="article-name font-weight-bold">{{ $post->title }}</h1>
                                <div class="entry-date">
                                    <p class="day mb-3 pt-1 small">
                                        <i>
                                            <img width="24" height="24"
                                                src="https://img.icons8.com/color/48/calendar--v1.png"
                                                alt="calendar--v1" />
                                            <span style="padding-top: 3px">
                                                {{ $post->published_at->format('d/m/Y') }}</span>
                                        </i>
                                    </p>
                                </div>

                                <div class="entry-content text-justify rte article__content js-toc-content">
                                    {!! $post->content !!}
                                </div>

                                {{-- Bài viết liên quan --}}
                                @include('website.posts.bai-viet-lien-quan')

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
