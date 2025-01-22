var stopAllYouTubeVideos = () => {
    var e = document.querySelectorAll("iframe");
    Array.prototype.forEach.call(e, (e) => {
        e.contentWindow.postMessage(
            JSON.stringify({ event: "command", func: "stopVideo" }),
            "*"
        );
    });
};
String.prototype.slugify = function () {
    const e =
            "Ă Ă¡Ă¤Ă¢Ă£Ă¥ÄƒĂ¦Ä…Ă§Ä‡ÄÄ‘ÄĂ¨Ă©Ä›Ä—Ă«ĂªÄ™ÄŸÇµá¸§Ă¬Ă­Ă¯Ă®Ä¯Å‚á¸¿Ç¹Å„ÅˆĂ±Ă²Ă³Ă¶Ă´Å“Ă¸á¹•Å•Å™ĂŸÅŸÅ›Å¡È™Å¥È›Ă¹ĂºĂ¼Ă»Ç˜Å¯Å±Å«Å³áºƒáºĂ¿Ă½ÅºÅ¾Å¼Â·/_,:;",
        a = new RegExp(e.split("").join("|"), "g");
    return this.toString()
        .toLowerCase()
        .replace(
            /Ă¡|Ă |áº£|áº¡|Ă£|Äƒ|áº¯|áº±|áº³|áºµ|áº·|Ă¢|áº¥|áº§|áº©|áº«|áº­/gi,
            "a"
        )
        .replace(/Ă©|Ă¨|áº»|áº½|áº¹|Ăª|áº¿|á»|á»ƒ|á»…|á»‡/gi, "e")
        .replace(/i|Ă­|Ă¬|á»‰|Ä©|á»‹/gi, "i")
        .replace(
            /Ă³|Ă²|á»|Ăµ|á»|Ă´|á»‘|á»“|á»•|á»—|á»™|Æ¡|á»›|á»|á»Ÿ|á»¡|á»£/gi,
            "o"
        )
        .replace(/Ăº|Ă¹|á»§|Å©|á»¥|Æ°|á»©|á»«|á»­|á»¯|á»±/gi, "u")
        .replace(/Ă½|á»³|á»·|á»¹|á»µ/gi, "y")
        .replace(/Ä‘/gi, "d")
        .replace(/\s+/g, "-")
        .replace(a, (a) =>
            "aaaaaaaaacccddeeeeeeegghiiiiilmnnnnooooooprrsssssttuuuuuuuuuwxyyzzz------".charAt(
                e.indexOf(a)
            )
        )
        .replace(/&/g, "-and-")
        .replace(/[^\w\-]+/g, "")
        .replace(/\-\-+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");
};
const io = new IntersectionObserver((e, t) => {
        e.forEach((e) => {
            e.isIntersecting &&
                ((e.target.src = e.target.dataset.src),
                e.target.classList.add("loaded"),
                t.unobserve(e.target));
        });
    }),
    bo = new IntersectionObserver((e, t) => {
        e.forEach((e) => {
            if (e.isIntersecting) {
                const r = e.target;
                (r.style.backgroundImage = r.dataset.background),
                    e.target.classList.add("loaded"),
                    t.unobserve(e.target);
            }
        });
    });
document.addEventListener("DOMContentLoaded", function () {
    const arr = document.querySelectorAll(".lazy");
    arr.forEach((v) => {
        io.observe(v);
    });
    const arrBg = document.querySelectorAll(".lazy_bg");
    arrBg.forEach((v) => {
        bo.observe(v);
    });
});
const formSearch = document.getElementById("js-search-form");
const menuButton = document.querySelectorAll(".js-menu-toggle");
const colLeft = document.getElementById("col-left-mew");
const bodyOverlay = document.getElementById("body_overlay");
const menu = document.getElementById("menu-mew");
const contactButtons = document.querySelectorAll(".js-contact-toggle");
const m_mb_bar = document.getElementById("mb_bar");
const bodyM = document.getElementById("body_m");
let isMobile = window.matchMedia("(min-width: 992px)").matches;
let vW =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

/*Quick Search*/
if (formSearch) {
    formSearch.addEventListener("focusin", (event) => {
        //event.target.parentNode.classList.add('active');
        bodyOverlay.classList.add("d-none");
        colLeft.classList.remove("active");
        menuButton.forEach((menu) => menu.classList.remove("active"));
        $(".sidebar_mobi").removeClass("openf");
    });
    formSearch.addEventListener("focusout", (event) => {
        window.setTimeout(function () {
            //event.target.parentNode.classList.remove('active');
            document
                .querySelectorAll(".searchResult")
                .forEach((el) => el.classList.add("d-none"));
        }, 200);
    });
}
/*Menu mobi*/
if (menuButton && colLeft) {
    menuButton.forEach((menu) =>
        menu.addEventListener("click", (event) => {
            event.preventDefault();
            formSearch.classList.remove("open");
            m_mb_bar.classList.remove("active");
            $(".mobile_open_box_swatch").removeClass("active");
            $(".sidebar_mobi").removeClass("openf");
            if (menu.classList.contains("active")) {
                colLeft.classList.remove("active");
                menu.classList.remove("active");
                bodyOverlay.classList.add("d-none");
                document.querySelector("body").classList.remove("modal-open");
            } else {
                colLeft.classList.add("active");
                menu.classList.add("active");
                bodyOverlay.classList.remove("d-none");
                document.querySelector("body").classList.add("modal-open");
            }
            var closeMenu = document.querySelector(".close_menu_mobile");
            closeMenu.addEventListener("click", (event) => {
                colLeft.classList.remove("active");
                menu.classList.remove("active");
                bodyOverlay.classList.add("d-none");
                document.querySelector("body").classList.remove("modal-open");
            });
        })
    );
}
window.addEventListener("DOMContentLoaded", (event) => {
    let shouldSkip = false;
    document
        .querySelectorAll("#menu-mew .level0 .m_chill")
        .forEach((item, index) => {
            if (shouldSkip) {
                return;
            }
            if (index >= 0) {
                shouldSkip = true;
            }
            item.parentNode.classList.add("open");
        });
    if (shouldSkip == true) {
        menu.classList.add("no_waring");
    }

    if (menu) {
        menu.addEventListener("click", (event) => {
            if (event.target.className.includes("js-submenu")) {
                let mn_x = document.querySelectorAll("#menu-mew > li");
                if (!mn_x.length) return;
                for (var i = 0; i < mn_x.length; i++) {
                    mn_x[i].classList.remove("open");
                }
                event.target.parentNode.classList.add("open");
            }
        });
    }
});

/*Contact Button*/
if (contactButtons) {
    contactButtons.forEach((contactButton) => {
        contactButton.addEventListener("click", (event) => {
            contactButton.classList.toggle("active");
            m_mb_bar.classList.toggle("active");
            colLeft.classList.remove("active");
            formSearch.classList.remove("open");
            menuButton.forEach((menu) => menu.classList.remove("active"));
            $(".mobile_open_box_swatch").removeClass("active");
            bodyOverlay.classList.add("d-none");
            document.querySelector("body").classList.remove("modal-open");
        });
        var closeSupport = document.querySelector(".close_support");
        closeSupport.addEventListener("click", (event) => {
            contactButton.classList.remove("active");
            m_mb_bar.classList.remove("active");
        });
    });
}

/*Body Overlay*/
bodyOverlay.addEventListener("click", function (e) {
    bodyOverlay.classList.add("d-none");
    formSearch.classList.remove("open");
    colLeft.classList.remove("active");
    document.querySelector("body").classList.remove("modal-open");
    menuButton.forEach((menu) => menu.classList.remove("active"));
    m_mb_bar.classList.remove("active");
    $(".mobile_open_box_swatch").removeClass("active");
    $(".sidebar_mobi").removeClass("openf");
    $(".popup_box").removeClass("open");
    //animationMenu();
});

window.addEventListener(
    "resize",
    throttle(function () {
        let vW =
            window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
        if (vW > 991) {
            bodyOverlay.classList.add("d-none");
            colLeft.classList.remove("active");
        }
    }, 200)
);
var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.createTemplateTagFirstArg = function (a) {
    return (a.raw = a);
};
$jscomp.createTemplateTagFirstArgWithRaw = function (a, b) {
    a.raw = b;
    return a;
};
function checkElOverViewPort(a, b, c) {
    b = a.parentNode.querySelector(":scope> " + b);
    null !== b &&
        (a.parentNode.getBoundingClientRect().right + b.clientWidth > vW
            ? b.classList.add(c)
            : b.classList.remove(c));
}
window.addEventListener(
    "resize",
    throttle(function () {
        vW =
            window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
        isMobile = window.matchMedia("(min-width: 992px)").matches;
        isMobile &&
            document.querySelectorAll(".js-checkMenu").forEach((item) => {
                checkElOverViewPort(item, "ul", "sub-right");
            });
    }, 300)
);
document.addEventListener("readystatechange", function (e) {
    document.readyState === "complete" &&
        isMobile &&
        document.querySelectorAll(".js-checkMenu").forEach((item) => {
            checkElOverViewPort(item, "ul", "sub-right");
        });
});

$('.js-search-form input[type="text"]').on(
    "keyup click",
    debounce(function (e) {
        let searchResult = $(this).parents("form").find(".searchResult");
        let queryString = `/search?type=product&q=${e.target.value.trim()}`;
        if (e.target.value.trim() != "") {
            //searchType.map(item => MewServices.getSearchView(e.target.value.trim(), item, item));
            Promise.all(
                searchType.map((item) =>
                    MewServices.getSearchView(e.target.value.trim(), item, item)
                )
            )
                .then((values) => {
                    if (values.join("").trim() === "") {
                        searchResult.addClass("d-none");
                        searchResult.html("");
                    } else {
                        searchResult.html(values.join(""));
                        searchResult.removeClass("d-none");
                    }
                })
                .catch((error) => {
                    searchResult.addClass("d-none");
                    console.error("ÄĂ£ cĂ³ lá»—i xáº£y ra: " + error.message);
                });
        } else {
            searchResult.addClass("d-none");
            searchResult.html("");
        }
    }, 300)
);

const delay = (ms) => new Promise((res) => setTimeout(res, ms));
async function showPopSale() {
    let popsale = document.getElementById("popsale");
    if (!popsale_cate.length) return;
    if (typeof popsale === "undefined") return;
    let index = Math.floor(Math.random() * popsale_cate.length);
    let time = `${Math.floor(Math.random() * 59) + 1} ${pmin}`;
    popsale.innerHTML = `<a href='${popsale_cate[index].img_url}}' class='jas-sale-pop-img mr-3'>
    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
    <img class='d-block img img-cover position-absolute' src='${popsale_cate[index].img_url}' alt='${popsale_cate[index].title}'/>
    </div>
  </a>
  <div class='jas-sale-pop-content'><p class='font-weight-bold mb-0'>${ptit}</p>
    <h3 class='mb-1'>
    <a href='${popsale_cate[index].url}' title=''>${popsale_cate[index].title}</a>
    </h3>
    <span class='jas-sale-pop-timeago small text-muted'>${pdes} ${time}</span>
  </div>
  <span class='btn btn-close position-absolute'></span>`;
    popsale.classList.add("slideUp");
    document.querySelectorAll("#popsale .btn-close").forEach((btn) => {
        btn.addEventListener("click", function (e) {
            document.querySelector("#popsale").classList.remove("slideUp");
        });
    });
    await delay(timeDelay);
    popsale.classList.remove("slideUp");
}
window.addEventListener("load", function () {
    setTimeout(() => {
        showPopSale();
        setInterval(showPopSale, timeSpace);
    }, 5000);
});
