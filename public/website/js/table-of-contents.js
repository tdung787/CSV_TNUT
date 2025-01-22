var tableOfContents = function (e, t, n) {
    var r = document.querySelector(e),
        l = document.querySelector(t);
    if (r && l) {
        var a,
            i,
            o,
            c,
            h = {
                levels: "h2, h3, h4, h5, h6",
                heading: "Table of Contents",
                headingLevel: "h2",
                listType: "ul",
            },
            u = {},
            s = function (e) {
                for (var t = "", n = 0; n < e; n++)
                    t += "</" + u.listType + "></li>";
                return t;
            },
            f = function (e, t) {
                return e > 0
                    ? (function (e) {
                          for (var t = "", n = 0; n < e; n++)
                              t += "<" + u.listType + ">";
                          return t;
                      })(e)
                    : e < 0
                    ? s(Math.abs(e))
                    : t && !e
                    ? "</li>"
                    : "";
            };
        (function (e) {
            for (var t in h)
                Object.prototype.hasOwnProperty.call(h, t) &&
                    (u[t] = Object.prototype.hasOwnProperty.call(e, t)
                        ? e[t]
                        : h[t]);
        })(n || {}),
            (a = r.querySelectorAll(u.levels)).length &&
                ((i = a[0].tagName.slice(1)),
                (o = i),
                (c = a.length - 1),
                (l.innerHTML =
                    "<" +
                    u.headingLevel +
                    ">" +
                    u.heading +
                    "</" +
                    u.headingLevel +
                    "><" +
                    u.listType +
                    ">" +
                    Array.prototype.map
                        .call(a, function (e, t) {
                            !(function (e) {
                                e.id.length ||
                                    (e.id = "toc_" + e.textContent.slugify());
                            })(e);
                            var n = e.tagName.slice(1),
                                r = n - i;
                            i = n;
                            var l = f(r, t);
                            return (
                                (l +=
                                    '<li><a href="#' +
                                    e.id +
                                    '">' +
                                    e.innerText.trim() +
                                    "</a>"),
                                t === c && (l += s(Math.abs(o - n))),
                                l
                            );
                        })
                        .join("") +
                    "</" +
                    u.listType +
                    ">"));
    }
};
