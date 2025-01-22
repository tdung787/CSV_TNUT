class CheckQuantityUtil {
    static validURL(t) {
        try {
            let a = new URL(string);
            return "http:" === a.protocol || "https:" === a.protocol;
        } catch (n) {
            return !1;
        }
    }
    static getCart(t) {
        return fetch(`${window.location.origin}${routes.cart_url}`).then((t) =>
            t.json()
        );
    }
    static getJson(t) {
        return CheckQuantityUtil.validURL(t)
            ? fetch(`${t}.js`).then((t) => t.json())
            : fetch(
                  `${window.location.origin}/products/${t
                      .replace(/\/products/gi, "")
                      .replace(/\//gi, "")}.js`
              ).then((t) => t.json());
    }
    static isNotManagement(t) {
        return !(
            "" !== t.inventory_management && null !== t.inventory_management
        );
    }
    static isAllowBuyWhenSoldOut(t) {
        return "allow" === t.inventory_policy;
    }
    static async check(t, a, n = "") {
        let i = parseInt(t),
            e = parseInt(a),
            u = await CheckQuantityUtil.getCart(),
            s = u.items.find((t) => t.variant_id === e);
        return new Promise(async (t, a) => {
            if ("" !== n) {
                let r = await CheckQuantityUtil.getJson(n).then((t) =>
                    t.variants.find((t) => t.id === e)
                );
                return void 0 === r
                    ? a({ status: "404", quantity: 0 })
                    : !0 !== r.available
                    ? t({ status: "soldOut", quantity: 0 })
                    : CheckQuantityUtil.isNotManagement(r) ||
                      CheckQuantityUtil.isAllowBuyWhenSoldOut(r)
                    ? t({ status: "available", quantity: i })
                    : void 0 === s || 0 === u.items.length
                    ? t(
                          i > r.inventory_quantity
                              ? {
                                    status: "overAdd",
                                    quantity: r.inventory_quantity,
                                }
                              : i === r.inventory_quantity
                              ? {
                                    status: "exactMatch",
                                    quantity: r.inventory_quantity,
                                }
                              : { status: "inStock", quantity: i }
                      )
                    : t(
                          s.quantity > r.inventory_quantity
                              ? {
                                    status: "exceeded",
                                    quantity: r.inventory_quantity,
                                }
                              : r.inventory_quantity - s.quantity > i
                              ? { status: "inStock", quantity: i }
                              : r.inventory_quantity - s.quantity === i
                              ? { status: "exactMatch", quantity: i }
                              : {
                                    status: "overAdd",
                                    quantity: r.inventory_quantity - s.quantity,
                                }
                      );
            }
            if (0 === u.items.length || void 0 === s)
                return a({ status: "404", quantity: 0 });
            let y = await CheckQuantityUtil.getJson(s.url).then((t) =>
                t.variants.find((t) => t.id === e)
            );
            return void 0 === y
                ? a({ status: "404", quantity: 0 })
                : t(
                      !0 !== y.available
                          ? { status: "soldOut", quantity: 0 }
                          : CheckQuantityUtil.isNotManagement(y) ||
                            CheckQuantityUtil.isAllowBuyWhenSoldOut(y)
                          ? { status: "available", quantity: i }
                          : i > y.inventory_quantity
                          ? {
                                status: "exceeded",
                                quantity: y.inventory_quantity,
                            }
                          : i === y.inventory_quantity
                          ? {
                                status: "exactMatch",
                                quantity: y.inventory_quantity,
                            }
                          : { status: "inStock", quantity: i }
                  );
        });
    }
}
