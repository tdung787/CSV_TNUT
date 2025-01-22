<x-website-layout>
    <div class="col-right position-relative open_slogan">
        <div class="contentWarp ">
            <h1 class="d-none font-weight-bold pt-2 pt-lg-0 mt-0 mb-3 page_name">
                Giới thiệu
            </h1>
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
                        <li>Liên kết chuỗi</li>
                    </ul>
                </div>
            </div>
            <div class="page_intro">
                <div class="container my-4 my-lg-2">
                    <div class="col-main page-title">
                        {!! $recruitment->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
