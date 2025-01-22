class SwatchColor {
    constructor(t) {
        (this.storageName = "swColor" + this.setUniqueId(t)),
            (this.fileURL = t);
    }
    getLocalData = (t) => JSON.parse(localStorage.getItem(t));
    getDataFromFile = (t) =>
        new Promise((e, a) => {
            Papa.parse(t, {
                download: !0,
                error: () => e([]),
                complete: (t) => e(t.data),
            });
        });
    setUniqueId = (t) => {
        let e = 5381;
        for (let a = 0; a < t.length; a++) e = (33 * e) ^ t.charCodeAt(a);
        return e >>> 0;
    };
    setLocalData = (t, e) => localStorage.setItem(t, JSON.stringify(e));
    setColor = (t) => {
        let e = Array.from(document.querySelectorAll("[data-swatch-color]"))
                .map((t) => t.dataset.swatchColor.toLowerCase())
                .filter((t) => void 0 !== t),
            a = t.filter((t) => e.includes(t.at(0).toString().toLowerCase()));
        a.length &&
            a.forEach((t) => {
                document
                    .querySelectorAll(
                        `[data-swatch-color="${t[0]
                            .toString()
                            .toLocaleLowerCase()}"]:not(.loaded)`
                    )
                    .forEach((e) => {
                        if (t[1].includes("-")) {
                            let a = t[1].split("-")[0] || "#fff",
                                o = t[1].split("-")[1] || "#fff";
                            (e.style.backgroundColor = `background-color: ${a}`),
                                "" === e.style.backgroundImage &&
                                    (e.style.backgroundImage = `linear-gradient(-45deg,${a} 0%,${a} 50%,${o} 51%)`);
                        } else e.style.backgroundColor = t[1];
                        e.classList.add("loaded");
                    });
            });
    };
    init = async () => {
        let t,
            e = this.getLocalData(this.storageName);
        null === e
            ? ((t = await this.getDataFromFile(this.fileURL)),
              this.setLocalData(this.storageName, t))
            : (t = e),
            t.length && this.setColor(t);
    };
}
