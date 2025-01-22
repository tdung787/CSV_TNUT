var swiperRelateBlog = new Swiper(".latest-blog", {
    spaceBetween: 20,
    loop: false,
    speed: 900,
    navigation: {
        nextEl: ".mew_latest_blog_next",
        prevEl: ".mew_latest_blog_prev",
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    breakpoints: {
        375: {
            slidesPerView: 1,
        },
        568: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 3,
        },
    },
});

$(".open_mnu").on("click", function () {
    $(this).toggleClass("cls_mn").next().toggle();
});

const contentElement = $("[data-content]");
if (contentElement.length > 0 && contentElement.html()) {
    const contentHtml = contentElement.html();
    if (contentHtml.includes("h2") || contentHtml.includes("h3") || contentHtml.includes("h4")) {
        $(".table-of-contents").removeClass("d-none");
        tableOfContents("[data-content]", "[data-toc]", {
            levels: "h2, h3, h4",
            heading: "Mục lục",
            headingLevel: "h2",
            listType: "ol",
        });
        let h_toc = $(".js-toc").height();
        let h_ol = $(".js-toc>ol").height();
        if (h_toc > 170) {
            const h_css = document.querySelector(".js-toc");
            h_css.style.setProperty("--heightToc", h_ol + "px");
            $(".js-toc>ol").addClass("open_less");
            $(".more_toc").removeClass("d-none");
            $(".more_toc").on("click", function () {
                $(this).toggleClass("less");
                $(".open_less").toggleClass("more");
            });
        }
        console.log(h_toc, h_ol);
    }
} else {
    $("[data-toc]").addClass("d-none");
}

