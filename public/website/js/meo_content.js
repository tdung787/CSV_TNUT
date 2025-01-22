const ifo = new IntersectionObserver((e, t) => {
    e.forEach((e) => {
        e.isIntersecting &&
            ((e.target.src = e.target.dataset.src), t.unobserve(e.target));
    });
});
function contentLazy(e) {
    const t = e.querySelectorAll("iframe"),
        r = e.querySelectorAll("img");
    t.length &&
        t.forEach((e) => {
            if (!e.hasAttribute("data-src")) {
                let t = e.getAttribute("src") || "";
                e.removeAttribute("src"),
                    e.setAttribute("data-src", t),
                    ifo.observe(e);
            }
        }),
        r.length &&
            r.forEach((e) => {
                if (!e.hasAttribute("data-src")) {
                    let t = e.getAttribute("src") || "";
                    e.removeAttribute("src"),
                        e.setAttribute("data-src", t),
                        e.setAttribute("class", "lazy"),
                        e.setAttribute("decoding", "async"),
                        io.observe(e);
                }
            });
}
document.addEventListener(
    "DOMContentLoaded",
    function () {
        Array.from(document.querySelectorAll(".rte iframe")).forEach((e) => {
            const t = document.createElement("div");
            (t.className = "embed-responsive embed-responsive-16by9"),
                e.parentNode.insertBefore(t, e),
                t.appendChild(e);
        }),
            document.querySelectorAll(".rte").forEach((e) => {
                contentLazy(e);
            });
    },
    !1
);
