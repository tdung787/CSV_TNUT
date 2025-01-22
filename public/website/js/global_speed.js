window.addEventListener("DOMContentLoaded", (event) => {
    var mn_show = document.querySelectorAll(".show_full");
    mn_show.forEach((item) =>
        item.addEventListener("click", (event) => {
            const level0Items = document.querySelectorAll("#menu-mew .level0");
            level0Items.forEach(function (item) {
                item.classList.toggle("show");
            });
        })
    );
});
/*Back to Top*/
var bg_top_mb = document.querySelector(".menubar");
var bg_head_mb = document.querySelector(".bg_head");
var f_search_mb = document.querySelector(".left-search");
var goTopBtn = document.querySelector(".back_top");
const closeSlogan = document.querySelectorAll(".js-close-slogan");
function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight / 3;
    if (scrolled > 1) {
        bg_head_mb.classList.add("min");
        bg_top_mb.classList.add("min");
        f_search_mb.classList.add("min");
        closeSlogan.forEach((item) => item.classList.remove("open_slogan"));
    }
    if (scrolled < 1) {
        bg_head_mb.classList.remove("min");
        bg_top_mb.classList.remove("min");
        f_search_mb.classList.remove("min");
        closeSlogan.forEach((item) => item.classList.add("open_slogan"));
    }
    if (scrolled > coords) {
        goTopBtn.classList.add("back_show");
    }
    if (scrolled < coords) {
        goTopBtn.classList.remove("back_show");
    }
}

window.addEventListener("scroll", trackScroll);
function scrollToTop(duration) {
    if (document.scrollingElement.scrollTop === 0) return;

    const cosParameter = document.scrollingElement.scrollTop / 2;
    let scrollCount = 0,
        oldTimestamp = null;

    function step(newTimestamp) {
        if (oldTimestamp !== null) {
            scrollCount += (Math.PI * (newTimestamp - oldTimestamp)) / duration;
            if (scrollCount >= Math.PI)
                return (document.scrollingElement.scrollTop = 0);
            document.scrollingElement.scrollTop =
                cosParameter + cosParameter * Math.cos(scrollCount);
        }
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}
