function MewUtilsb(a, b) {
    const c = MewUtilsa();
    return (
        (MewUtilsb = function (d, e) {
            d = d - 0x74;
            let f = c[d];
            return f;
        }),
        MewUtilsb(a, b)
    );
}
const MewUtilsi = MewUtilsb;
(function (a, b) {
    const f = MewUtilsb,
        c = a();
    while (!![]) {
        try {
            const d =
                -parseInt(f(0x7f)) / 0x1 +
                (-parseInt(f(0xe6)) / 0x2) * (-parseInt(f(0xab)) / 0x3) +
                (parseInt(f(0xc5)) / 0x4) * (-parseInt(f(0xbe)) / 0x5) +
                -parseInt(f(0xc1)) / 0x6 +
                (parseInt(f(0x79)) / 0x7) * (parseInt(f(0xaa)) / 0x8) +
                (-parseInt(f(0xac)) / 0x9) * (-parseInt(f(0xdb)) / 0xa) +
                parseInt(f(0xe2)) / 0xb;
            if (d === b) break;
            else c["push"](c["shift"]());
        } catch (e) {
            c["push"](c["shift"]());
        }
    }
})(MewUtilsa, 0xab70e);
function MewUtilsa() {
    const G = [
        "copyTextToClipboard",
        "appendChild",
        "select",
        "innerHTML",
        "visibilityState",
        "true",
        "lazy",
        "style",
        "ÄĂ£\x20lÆ°u",
        "fallbackCopyTextToClipboard",
        "log",
        "options",
        "checkContent",
        "define",
        "copy",
        "observe",
        "scrollHeight",
        "innerText",
        "3704yclSbA",
        "12vSfPpv",
        "27yJinoO",
        "padStart",
        ".minutes",
        "getTime",
        "success",
        "then",
        "click",
        "endTime",
        "toggleContent",
        "error",
        ".days",
        "clientHeight",
        "classList",
        "maxHeight",
        "Thu\x20gá»n",
        "textarea",
        ".expandable-content-toggle",
        "day",
        "241720rTUMkP",
        "position",
        "0px",
        "1190370lthOUe",
        ".hours",
        "querySelector",
        "body",
        "16WjWtOP",
        "dispatchEvent",
        "preventDefault",
        "currentTarget",
        "updateUI",
        "add",
        "expandText",
        "collapseText",
        "button",
        "minutes",
        "hidden",
        "parse",
        "addEventListener",
        "maxheight",
        "successCopyText",
        "text",
        "hours",
        "target",
        "formatTime",
        "customElements",
        "expandable-content",
        "removeChild",
        "318410aguogl",
        "toString",
        "left",
        "days",
        ".toggle-text",
        "isLazy",
        "scrollable",
        "13222033JJIilm",
        "value",
        "startCountdown",
        "<div\x20class=\x22days\x22></div><div\x20class=\x22hours\x22></div><div\x20class=\x22minutes\x22></div><div\x20class=\x22seconds\x22></div>",
        "392558fqLEgm",
        "floor",
        "setAttribute",
        "observer",
        "timeRemaining",
        "writeText",
        "1379NbNAUN",
        "countdown-timer",
        "intervalId",
        "getAttribute",
        "expand",
        "false",
        "1079860FqXdXm",
        "min",
        "remove",
        "expanded",
        "textContent",
        "Fallback:\x20Oops,\x20unable\x20to\x20copy",
        "content",
        "time",
        "data-isexpand",
        "sec",
        "clollapse",
        "Xem\x20thĂªm",
        "resize",
        "countdownComplete",
        "dataset",
        "hour",
        "toggleText",
        "trim",
        "throttle",
        "stopCountDown",
        "focus",
        "connectedCallback",
        "fixed",
        "visible",
        "top",
    ];
    MewUtilsa = function () {
        return G;
    };
    return MewUtilsa();
}
class CopyText extends HTMLElement {
    constructor() {
        super();
    }
    ["successCopyText"](a) {
        const g = MewUtilsb;
        let b = a[g(0x83)],
            c = a[g(0x8d)][g(0xb0)] ?? g(0xa0);
        console[g(0xa2)](c),
            (a[g(0x83)] = c),
            setTimeout(function () {
                const h = g;
                a[h(0x83)] = b;
            }, 0x1f4);
    }
    [MewUtilsi(0xa1)](a) {
        const j = MewUtilsi;
        let b = document["createElement"](j(0xbb));
        (b[j(0xe3)] = a),
            (b["style"][j(0x97)] = "0"),
            (b["style"][j(0xdd)] = "0"),
            (b["style"][j(0xbf)] = j(0x95)),
            document[j(0xc4)][j(0x99)](b),
            b[j(0x93)](),
            b[j(0x9a)]();
        try {
            document["execCommand"](j(0xa6));
        } catch (c) {
            console[j(0xb5)](j(0x84), c);
        }
        document[j(0xc4)][j(0xda)](b);
    }
    [MewUtilsi(0x98)](a) {
        const k = MewUtilsi;
        let b = this;
        if (!navigator["clipboard"]) {
            b[k(0xa1)](a), b[k(0xd3)](b);
            return;
        }
        navigator["clipboard"][k(0x78)](a)[k(0xb1)](
            function () {
                const l = k;
                b[l(0xd3)](b);
            },
            function (c) {
                const m = k;
                console[m(0xb5)](
                    "Async:\x20Could\x20not\x20copy\x20text:\x20",
                    c
                );
            }
        );
    }
    [MewUtilsi(0x94)]() {
        const n = MewUtilsi;
        this[n(0xd1)](n(0xb2), function (a) {
            const o = n;
            a[o(0xc7)]();
            const b = this[o(0x8d)][o(0xd4)] ?? "";
            this[o(0x98)](b);
        });
    }
}
window[MewUtilsi(0xd8)][MewUtilsi(0xa5)]("copy-text", CopyText);
class CountdownTimer extends HTMLElement {
    constructor() {
        const p = MewUtilsi;
        super(),
            (this["endTime"] = new Date(this["dataset"][p(0x86)])),
            (this[p(0xe0)] = this[p(0x8d)][p(0x9e)] ?? ![]),
            (this[p(0x7b)] = null),
            this["addEventListener"]("countdownComplete", function (a) {
                const q = p;
                a[q(0xc8)][q(0xb8)][q(0xca)]("hidden");
            }),
            (this[p(0xa3)] = {
                root: null,
                rootMargin: p(0xc0),
                threshold: 0x1,
            });
    }
    [MewUtilsi(0x94)]() {
        const r = MewUtilsi;
        if (isNaN(this[r(0xb3)][r(0xaf)]())) {
            this[r(0xc6)](new Event(r(0x8c)));
            return;
        }
        if (this["innerHTML"][r(0x90)]() === "") this[r(0x9b)] = r(0xe5);
        this[r(0xe0)] ? this[r(0x76)][r(0xa7)](this) : this[r(0xe4)](),
            document["addEventListener"]("visibilitychange", () => {
                const s = r;
                document[s(0x9c)] === s(0x96)
                    ? this[s(0xe4)]()
                    : this[s(0x92)]();
            });
    }
    [MewUtilsi(0xc9)](a) {
        const t = MewUtilsi;
        let b = this["formatTime"](a);
        (this[t(0xbd)] = this["querySelector"](t(0xb6))),
            (this["hour"] = this[t(0xc3)](t(0xc2))),
            (this["min"] = this[t(0xc3)](t(0xae))),
            (this[t(0x88)] = this[t(0xc3)](".seconds")),
            this[t(0xbd)] !== null &&
                this[t(0xbd)]["textContent"] !== b[t(0xde)] &&
                (this["day"][t(0x83)] = b[t(0xde)]),
            this["hour"] !== null &&
                this[t(0x8e)] !== b[t(0xd5)] &&
                (this[t(0x8e)][t(0x83)] = b[t(0xd5)]),
            this[t(0x80)] !== null &&
                this[t(0x80)][t(0x83)] !== b[t(0xce)] &&
                (this[t(0x80)][t(0x83)] = b[t(0xce)]),
            (this[t(0x88)][t(0x83)] = b["seconds"]);
    }
    [MewUtilsi(0xe4)]() {
        const u = MewUtilsi;
        (this[u(0x77)] = this[u(0xb3)] - Date[u(0xd0)](new Date())),
            (this[u(0x7b)] = setInterval(() => {
                const v = u;
                (this[v(0x77)] -= 0x3e8),
                    this[v(0xc9)](this["timeRemaining"]),
                    this[v(0x77)] <= 0x0 &&
                        (clearInterval(this["intervalId"]),
                        this[v(0xc6)](new Event(v(0x8c))));
            }, 0x3e8));
    }
    [MewUtilsi(0x92)]() {
        const w = MewUtilsi;
        clearInterval(this[w(0x7b)]);
    }
    [MewUtilsi(0xd7)](a = 0x0) {
        const x = MewUtilsi;
        let b = Math[x(0x74)]((a / 0x3e8) % 0x3c) || 0x0,
            c = Math[x(0x74)]((a / 0x3e8 / 0x3c) % 0x3c) || 0x0,
            d = Math[x(0x74)]((a / (0x3e8 * 0x3c * 0x3c)) % 0x18) || 0x0,
            e = Math[x(0x74)](a / (0x3e8 * 0x3c * 0x3c * 0x18)) || 0x0;
        return {
            total: a,
            days: e[x(0xdc)]()["padStart"](0x2, "0"),
            hours: d[x(0xdc)]()[x(0xad)](0x2, "0"),
            minutes: c[x(0xdc)]()[x(0xad)](0x2, "0"),
            seconds: b[x(0xdc)]()[x(0xad)](0x2, "0"),
        };
    }
    ["observer"] = new IntersectionObserver(function (entries, observer) {
        entries["forEach"]((entry) => {
            const y = MewUtilsb;
            entry["isIntersecting"] &&
                (entry[y(0xd6)]["startCountdown"](),
                observer["unobserve"](entry[y(0xd6)]));
        });
    }, this[MewUtilsi(0xa3)]);
}
customElements[MewUtilsi(0xa5)](MewUtilsi(0x7a), CountdownTimer);
class ExpandableContent extends HTMLElement {
    constructor() {
        const z = MewUtilsi;
        super(),
            (this[z(0x85)] = this[z(0xc3)](".expandable-content")),
            (this[z(0xcd)] = this[z(0xc3)](z(0xbc))),
            (this[z(0x8f)] = this["querySelector"](z(0xdf))),
            (this["expandText"] = this[z(0x8d)][z(0x7d)] ?? z(0x8a)),
            (this[z(0xcc)] = this[z(0x8d)][z(0x89)] ?? z(0xba)),
            (this[z(0xb9)] = parseInt(this[z(0x8d)][z(0xd2)]) || 0x118),
            (this[z(0x85)][z(0x9f)][z(0xb9)] = this[z(0xb9)] + "px");
    }
    ["connectedCallback"]() {
        const A = MewUtilsi;
        this[A(0xa4)](),
            window[A(0xd1)](A(0x8b), () => {
                const B = A;
                this[B(0x91)](this["checkContent"], 0xc8);
            });
    }
    [MewUtilsi(0xa4)]() {
        const C = MewUtilsi;
        this[C(0x85)][C(0xa8)] > this["content"][C(0xb7)] ||
        this[C(0x85)][C(0xa8)] > this[C(0xb9)]
            ? (this["button"][C(0xb8)]["remove"]("hidden"),
              this[C(0x85)][C(0xb8)][C(0xca)](C(0xe1)))
            : (this[C(0xcd)]["classList"]["add"](C(0xcf)),
              this["content"][C(0xb8)]["remove"]("scrollable")),
            this[C(0xb4)]();
    }
    [MewUtilsi(0xb4)]() {
        const D = MewUtilsi;
        let a = this[D(0x7c)](D(0x87)) || "false";
        this[D(0xcd)]["addEventListener"](D(0xb2), () => {
            const E = D;
            a === "false"
                ? ((a = "true"),
                  this[E(0x75)](E(0x87), E(0x9d)),
                  this[E(0xb8)][E(0xca)]("expanded"),
                  (this["toggleText"][E(0xa9)] = this[E(0xcc)]))
                : ((a = "false"),
                  this[E(0x75)](E(0x87), E(0x7e)),
                  this[E(0xb8)][E(0x81)](E(0x82)),
                  (this[E(0x8f)][E(0xa9)] = this[E(0xcb)]));
        });
    }
    [MewUtilsi(0x91)](a, b) {
        let c = 0x0;
        return function (...d) {
            const F = MewUtilsb,
                e = new Date()[F(0xaf)]();
            if (e - c < b) return;
            return (c = e), a(...d);
        };
    }
}
customElements[MewUtilsi(0xa5)](MewUtilsi(0xd9), ExpandableContent);
