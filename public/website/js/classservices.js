class MewServices {
    static #e = {
        Accept: "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
        "X-Requested-With": "XMLHttpRequest",
    };
    static #r = {
        Accept: "application/json",
        "Content-Type": "application/json",
        "X-Requested-With": "XMLHttpRequest",
    };
    static #t = {
        Accept: "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
        "X-Requested-With": "XMLHttpRequest",
    };
    static validURL(e) {
        try {
            const r = new URL(e);
            return r.protocol === "http:" || r.protocol === "https:";
        } catch (e) {
            return false;
        }
    }
    static normalize(e) {
        if (MewServices.validURL(e)) return e;
        return `${window.location.origin}/${e.replace(/\//, "")}`;
    }
    static getCart() {
        return fetch(`${MewServices.normalize(routes.cart_url)}`).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e.clone().json();
        });
    }
    static getCartByView(e) {
        return fetch(
            `${MewServices.normalize(
                routes.cart_url.replace(".js", "")
            )}?view=${e}`
        ).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e
                .clone()
                .text()
                .then((e) => {
                    if (e.includes("</html>")) {
                        return "";
                    } else {
                        return e;
                    }
                });
        });
    }
    static getProductJson(e) {
        return fetch(`${MewServices.normalize(e)}.js`).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e.clone().json();
        });
    }
    static getProductJsonByView(e, r) {
        return fetch(`${MewServices.normalize(e)}?view=${r}`).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e.clone().json();
        });
    }
    static getProductHTMLByView(e, r) {
        return fetch(`${MewServices.normalize(e)}?view=${r}`).then((e) => {
            if (!e.clone().ok) return "";
            return e
                .clone()
                .text()
                .then((e) => {
                    if (e.includes("</html>")) {
                        return "";
                    } else {
                        return e;
                    }
                });
        });
    }
    static getFilterHTML(e) {
        return fetch(`${MewServices.normalize(e)}`).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e
                .clone()
                .text()
                .then((e) => {
                    if (e.includes("</html>")) {
                        return "";
                    } else {
                        return e;
                    }
                });
        });
    }
    static getSearchView(e, r = "product", t, n) {
        if (
            typeof n === "undefined" ||
            MewServices.serializeObjToSearchParamsString(n) === ""
        ) {
            return fetch(`/search?type=${r}&q=${e}&view=${t}`).then((e) => {
                if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
                return e
                    .clone()
                    .text()
                    .then((e) => {
                        if (e.includes("</html>")) {
                            return "";
                        } else {
                            return e;
                        }
                    });
            });
        }
        return fetch(
            `/search?type=${r}&q=${e} AND ${MewServices.serializeObjToSearchParamsString(
                n
            )}&view=${t}`
        ).then((e) => {
            if (!e.clone().ok) throw new Error("ÄĂ£ cĂ³ lá»—i xáº£y ra!");
            return e
                .clone()
                .text()
                .then((e) => {
                    if (e.includes("</html>")) {
                        return "";
                    } else {
                        return e;
                    }
                });
        });
    }
    static addItem(e, r) {
        return fetch(routes.cart_add_url, {
            method: "POST",
            headers: MewServices.#e,
            body: new URLSearchParams({ id: e, quantity: r }).toString(),
        }).then((e) => {
            if (!e.ok) {
                if (e.status == 422) return e.json();
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static addFromForm(e) {
        return fetch(routes.cart_add_url, {
            method: "POST",
            headers: MewServices.#t,
            body: new URLSearchParams(e).toString(),
        }).then((e) => {
            console.log(e);
            if (!e.ok) {
                if (e.status == 422) return e.json();
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static updateItem(e, r) {
        return fetch(routes.cart_update_url, {
            method: "POST",
            headers: MewServices.#e,
            body: new URLSearchParams({ id: e, quantity: r }).toString(),
        }).then((e) => {
            if (!e.ok) {
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static updateLineItem(e, r) {
        return fetch(routes.cart_update_url, {
            method: "POST",
            headers: MewServices.#e,
            body: new URLSearchParams({ line: e, quantity: r }).toString(),
        }).then((e) => {
            if (!e.ok) {
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static updateLinesItem(e) {
        return fetch(routes.cart_change_url, {
            method: "POST",
            headers: MewServices.#r,
            body: JSON.stringify({ updates: e }),
        }).then((e) => {
            if (!e.ok) {
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static updateCartAttributes(e) {
        if (typeof e !== "object" || e === null)
            throw new Error("Thuá»™c tĂ­nh giá» hĂ ng khĂ´ng há»£p lá»‡");
        return fetch(routes.cart_update_url, {
            method: "POST",
            headers: MewServices.#e,
            body: new URLSearchParams(e),
        }).then((e) => {
            if (!e.ok) {
                if (e.status == 422) return e.json();
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
    static clearCartAttributes() {
        return MewServices.getCart().then((e) => {
            let r = e.attributes;
            let t = {};
            for (let [e, n] of Object.entries(r)) {
                t[`attributes[${e}]`] = "";
            }
            MewServices.updateCartAttributes(t);
        });
    }
    static serializeFormData(e) {
        let r = {};
        for (let [t, n] of e)
            void 0 !== r[t]
                ? (Array.isArray(r[t]) || (r[t] = [r[t]]), r[t].push(n))
                : (r[t] = n);
        return r;
    }
    static serializeObjToSearchParamsString(e) {
        let r = [];
        for (let t in e) {
            if (e.hasOwnProperty(t)) {
                if (Array.isArray(e[t])) {
                    if (e[t].length) {
                        let n = [];
                        e[t].forEach((e) => {
                            n.push(`(${e})`);
                        });
                        r.push(`${t}:(${n.join(" OR ")})`);
                    }
                } else {
                    r.push(`${t}:(${e[t]})`);
                }
            }
        }
        return r.join(" AND ");
    }
    static clearCart() {
        return fetch(routes.cart_clear_url, { method: "POST" }).then((e) => {
            if (!e.ok) {
                throw new Error("Network response was not ok");
            }
            return e.json();
        });
    }
}
