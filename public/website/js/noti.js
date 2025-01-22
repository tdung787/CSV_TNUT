var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.createTemplateTagFirstArg = function (a) {
    return (a.raw = a);
};
$jscomp.createTemplateTagFirstArgWithRaw = function (a, c) {
    a.raw = c;
    return a;
};
var toastDefaultDuration = 3e3;
document.addEventListener("DOMContentLoaded", function (a) {
    0 === document.querySelectorAll(".toast-container").length &&
        (document.querySelector("body").innerHTML +=
            '<div class="toast-container"></div>');
});
function createToast(a, c, k, e) {
    a = void 0 === a ? "info" : a;
    e = void 0 === e ? toastDefaultDuration : e;
    var b = document.createElement("div"),
        f = document.createElement("p"),
        h = document.createElement("p"),
        g = document.createElement("p"),
        l = document.querySelector(".toast-container"),
        d = "";
    b.classList.add("toast");
    f.classList.add("t-title");
    if (a)
        switch ((b.classList.add(a), a)) {
            case "info":
                d = '<span class="t-icon-info"></span>';
                break;
            case "success":
                d = '<span class="t-icon-success"></span>';
                break;
            case "warning":
                d = '<span class="t-icon-warning"></span>';
                break;
            case "error":
                d = '<span class="t-icon-error"></span>';
                break;
            default:
                d = "";
        }
    f.innerHTML += d + c;
    h.classList.add("t-close");
    g.classList.add("t-text");
    g.innerHTML = k;
    b.appendChild(f);
    b.appendChild(h);
    b.appendChild(g);
    l.appendChild(b);
    setTimeout(function () {
        b.classList.add("active");
    }, 1);
    0 < e &&
        setTimeout(function () {
            b.classList.remove("active");
            setTimeout(function () {
                b.remove();
            }, 350);
        }, e);
}
document.addEventListener("click", function (a) {
    if (a.target.matches(".t-close")) {
        var c = a.target.parentElement;
        c.classList.remove("active");
        setTimeout(function () {
            c.remove();
        }, 350);
    }
});
document.addEventListener("click", function (a) {
    a.target.matches(".btn-toast") &&
        createToast(
            a.target.dataset.type,
            a.target.dataset.title,
            a.target.dataset.text,
            a.target.dataset.duration
        );
});
