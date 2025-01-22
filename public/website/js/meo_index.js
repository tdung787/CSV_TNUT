window.addEventListener("DOMContentLoaded", (event) => {
    var swiperHomeSlider = new Swiper(".mew_slide", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".msl_next",
            prevEl: ".msl_prev",
        },
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 6000,
            disableOnInteraction: true,
        },
        slidesPerView: 1,
        effect: "fade",
        pagination: {
            el: ".mew_slide_p",
            clickable: true,
        },
    });
    var swiperPoliSlider = new Swiper(".product_poli", {
        spaceBetween: 15,
        loop: false,
        speed: 1000,
        autoplay: true,
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            480: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2.3,
            },
            992: {
                slidesPerView: 3.2,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiperCateSlider = new Swiper(".m_cate_slide", {
        spaceBetween: 16,
        loop: false,
        speed: 1000,
        autoplay: false,
        navigation: {
            nextEl: ".mc_next",
            prevEl: ".mc_prev",
        },
        pagination: {
            el: ".mc_pagi",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
});
