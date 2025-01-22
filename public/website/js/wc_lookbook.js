class LookBook extends HTMLElement {
    constructor() {
        super(),
            (this.image = this.querySelector("[data-image]")),
            (this.dots = this.querySelectorAll("[data-dot]")),
            (this.infors = this.querySelectorAll("[data-dot-infor]")),
            (this.inforWrapper = this.querySelector("[data-scroll]")),
            (this.toolTipWidth = parseInt(this.dataset.tooltipWidth ?? 200)),
            (this.dotWidth = parseInt(this.dataset.dotWidth ?? 32)),
            (this.dotHeight = parseInt(this.dataset.dotHeight ?? 32));
    }
    connectedCallback() {
        this.dots.forEach((t) => {
            t.addEventListener("click", (t) => {
                this._dotOnClick(t);
            });
        }),
            window.addEventListener("resize", () =>
                this._throttle(this._tooltipHide(), 200)
            ),
            this.image.addEventListener("click", () => this._tooltipHide());
    }
    _dotOnClick(t) {
        t.preventDefault();
        let i = t.currentTarget.dataset.dot;
        if ("number" != typeof parseInt(i)) return;
        let e = this.querySelector(`.tooltip-${i}`);
        if (null === e) {
            let o = document.createElement("div");
            o.classList.add("tooltip", `tooltip-${i}`),
                (o.style.transform = this._tooltipSetPosition(
                    t.currentTarget,
                    this.image.clientWidth
                )),
                this.prepend(o);
        } else
            e.style.transform = this._tooltipSetPosition(
                t.currentTarget,
                this.image.clientWidth
            );
        this._tooltipOnClick(i);
    }
    _tooltipSetPosition(t, i) {
        return t.offsetLeft - this.toolTipWidth / 2 + this.dotWidth / 4 <= 0
            ? `translate(${t.offsetLeft}px, ${
                  t.offsetTop + t.clientHeight + this.dotHeight / 4
              }px)`
            : t.offsetLeft + this.toolTipWidth + this.dotWidth / 4 > i
            ? `translate(${
                  t.offsetLeft - this.toolTipWidth + this.dotWidth / 4
              }px, ${t.offsetTop + t.clientHeight + this.dotHeight / 4}px)`
            : `translate(${
                  t.offsetLeft - this.toolTipWidth / 2 + this.dotWidth / 4
              }px, ${t.offsetTop + t.clientHeight + this.dotHeight / 4}px)`;
    }
    _tooltipOnClick(t) {
        this._tooltipHide();
        let i = Array.from(this.infors).find((i) => i.dataset.dotInfor === t);
        void 0 !== i &&
            ("" === this.querySelector(`.tooltip-${t}`).innerHTML.trim() &&
                (this.querySelector(`.tooltip-${t}`).innerHTML = i.innerHTML),
            this.querySelector(`.tooltip-${t}`).classList.add("active"),
            this.inforWrapper.scrollTo({
                top: i.offsetTop,
                left: i.offsetLeft,
                behavior: "smooth",
            }),
            i.classList.add("focus"),
            setTimeout(() => {
                i.classList.remove("focus");
            }, 800));
    }
    _tooltipHide() {
        this.querySelectorAll(".tooltip").forEach((t) =>
            t.classList.remove("active")
        );
    }
    _throttle(t, i) {
        let e = 0;
        return function (...o) {
            let s = new Date().getTime();
            if (!(s - e < i)) return (e = s), t(...o);
        };
    }
}
customElements.define("look-book", LookBook);
