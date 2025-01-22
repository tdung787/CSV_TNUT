window.addEventListener("DOMContentLoaded", (event) => {
    var swiperProductSaleSlider = new Swiper(".mew_flash", {
        spaceBetween: 15,
        loop: false,
        speed: 1000,
        autoplay: false,
        slidesPerColumnFill: "row",
        slidesPerColumn: 2,
        navigation: {
            nextEl: ".mf_next",
            prevEl: ".mf_prev",
        },
        freeMode: true,
        scrollbar: {
            el: ".sb_flash",
            hide: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    var mainProductSlider = new Swiper(".mew_product_main", {
        loop: false,
        spaceBetween: 15,
        speed: 1000,
        autoplay: false,
        slidesPerView: 2,
        slidesPerColumnFill: "row",
        slidesPerColumn: 2,
        navigation: {
            nextEl: ".mm_next",
            prevEl: ".mm_prev",
        },
        freeMode: true,
        scrollbar: {
            el: ".sb_tm",
            hide: false,
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
    let mewTab = new MewTab(
        {
            tabContainer: "[data-tab]",
            slideContainerClass: "swiper-container",
            view: "ajaxtab",
            noItem: "KhĂ´ng cĂ³ sáº£n pháº©m nĂ o trong danh má»¥c nĂ y.",
            useSlide: true,
            slideConfig: {
                loop: false,
                spaceBetween: 15,
                speed: 1000,
                autoplay: false,
                slidesPerView: 2,
                slidesPerColumnFill: "row",
                slidesPerColumn: 2,
                navigation: {
                    nextEl: ".mf_next",
                    prevEl: ".mf_prev",
                },
                freeMode: true,
                scrollbar: {
                    el: ".sb_aj",
                    hide: false,
                },
                breakpoints: {
                    375: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 5,
                    },
                },
            },
        },
        function (target) {
            target.querySelectorAll(".js-addToCart").forEach((btn) => {
                btn.removeEventListener("click", addToCart);
                btn.addEventListener("click", addToCart);
            });
            target.querySelectorAll(".lazy").forEach((v) => {
                io.observe(v);
            });
        }
    );
    mewTab.init();
    var tabProductSlider = new Swiper(".mew_product_tab", {
        loop: false,
        spaceBetween: 15,
        speed: 1000,
        autoplay: false,
        slidesPerView: 2,
        navigation: {
            nextEl: ".mm_next",
            prevEl: ".mm_prev",
        },
        freeMode: true,
        scrollbar: {
            el: ".sb_tm",
            hide: false,
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    let mewTab2 = new MewTab(
        {
            tabContainer: "[data-tab2]",
            slideContainerClass: "swiper-container",
            view: "ajaxtab",
            noItem: "KhĂ´ng cĂ³ sáº£n pháº©m nĂ o trong danh má»¥c nĂ y.",
            useSlide: true,
            slideConfig: {
                loop: false,
                spaceBetween: 15,
                speed: 1000,
                autoplay: false,
                slidesPerView: 2,
                navigation: {
                    nextEl: ".mf_next",
                    prevEl: ".mf_prev",
                },
                freeMode: true,
                scrollbar: {
                    el: ".sb_aj",
                    hide: false,
                },
                breakpoints: {
                    375: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    },
                },
            },
        },
        function (target) {
            target.querySelectorAll(".js-addToCart").forEach((btn) => {
                btn.removeEventListener("click", addToCart);
                btn.addEventListener("click", addToCart);
            });
            target.querySelectorAll(".lazy").forEach((v) => {
                io.observe(v);
            });
        }
    );
    mewTab2.init();
    var swiperBnSlider = new Swiper(".mew_slide_banner", {
        spaceBetween: 10,
        loop: false,
        speed: 1200,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        slidesPerView: 1,
    });
    var swiperPeoSlider = new Swiper(".m_people", {
        spaceBetween: 10,
        loop: false,
        speed: 1500,
        slidesPerView: 2,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2,
            },
        },
    });
    var swiperVideoSlider = new Swiper(".mew_video_index", {
        spaceBetween: 15,
        loop: false,
        speed: 1000,
        autoplay: false,
        navigation: {
            nextEl: ".mv_next",
            prevEl: ".mv_prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 1.2,
            },
            768: {
                slidesPerView: 2.3,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
    var swiperBlogSlider = new Swiper(".mew_blog", {
        spaceBetween: 15,
        loop: false,
        speed: 1000,
        autoplay: false,
        navigation: {
            nextEl: ".ml_next",
            prevEl: ".ml_prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1.8,
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        },
    });
    let videos = document.querySelectorAll(".open_popup");
    let popupVideo = document.querySelector(".popup_box");
    let close_vd = document.querySelectorAll(".close_popup");
    videos.forEach((v) =>
        v.addEventListener("click", function (e) {
            e.preventDefault();
            popupVideo.classList.add("open");
            bodyOverlay.classList.remove("d-none");
            let bVideoContainer = popupVideo.querySelector(".b_video");
            if (bVideoContainer) {
                bVideoContainer.innerHTML = `<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/${v.dataset.video}?enablejsapi=1" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>`;
            }
        })
    );
    close_vd.forEach((v) =>
        v.addEventListener("click", function (e) {
            e.preventDefault();
            popupVideo.classList.remove("open");
            bodyOverlay.classList.add("d-none");
            let bVideoContainer = popupVideo.querySelector(".b_video");
            if (bVideoContainer) {
                setTimeout(function () {
                    bVideoContainer.innerHTML = "";
                }, 500);
            }
        })
    );
});
