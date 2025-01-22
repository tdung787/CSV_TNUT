window.Bizweb || (window.Bizweb = {}),
    (Bizweb.mediaDomainName = "//bizweb.dktcdn.net/"),
    (Bizweb.each = function (t, e) {
        for (var n = 0; n < t.length; n++) e(t[n], n);
    }),
    (Bizweb.getClass = function (t) {
        return Object.prototype.toString.call(t).slice(8, -1);
    }),
    (Bizweb.map = function (t, e) {
        for (var n = [], i = 0; i < t.length; i++) n.push(e(t[i], i));
        return n;
    }),
    (Bizweb.arrayContains = function (t, e) {
        for (var n = 0; n < t.length; n++) if (t[n] == e) return !0;
        return !1;
    }),
    (Bizweb.distinct = function (t) {
        for (var e = [], n = 0; n < t.length; n++)
            Bizweb.arrayContains(e, t[n]) || e.push(t[n]);
        return e;
    }),
    (Bizweb.getUrlParameter = function (t) {
        var e = RegExp("[?&]" + t + "=([^&]*)").exec(window.location.search);
        return e && decodeURIComponent(e[1].replace(/\+/g, " "));
    }),
    (Bizweb.uniq = function (t) {
        for (var e = [], n = 0; n < t.length; n++)
            Bizweb.arrayIncludes(e, t[n]) || e.push(t[n]);
        return e;
    }),
    (Bizweb.arrayIncludes = function (t, e) {
        for (var n = 0; n < t.length; n++) if (t[n] == e) return !0;
        return !1;
    }),
    (Bizweb.Product = (function () {
        function t(t) {
            if (void 0 !== t) for (property in t) this[property] = t[property];
        }
        return (
            (t.prototype.optionNames = function () {
                return "Array" == Bizweb.getClass(this.options)
                    ? this.options
                    : [];
            }),
            (t.prototype.optionValues = function (t) {
                if (void 0 === this.variants) return null;
                var e = Bizweb.map(this.variants, function (e) {
                    var n = "option" + (t + 1);
                    return void 0 === e[n] ? null : e[n];
                });
                return null == e[0] ? null : Bizweb.distinct(e);
            }),
            (t.prototype.getVariant = function (t) {
                var e = null;
                return t.length != this.options.length
                    ? null
                    : (Bizweb.each(this.variants, function (n) {
                          for (var i = !0, r = 0; r < t.length; r++)
                              n["option" + (r + 1)] != t[r] && (i = !1);
                          i && (e = n);
                      }),
                      e);
            }),
            (t.prototype.getVariantById = function (t) {
                for (var e = 0; e < this.variants.length; e++) {
                    var n = this.variants[e];
                    if (n.id == t) return n;
                }
                return null;
            }),
            (t.name = "Product"),
            t
        );
    })()),
    (Bizweb.OptionSelectors = (function () {
        function t(t, e) {
            return (
                (this.selectorDivClass = "selector-wrapper"),
                (this.selectorClass = "single-option-selector"),
                (this.variantIdFieldIdSuffix = "-variant-id"),
                (this.variantIdField = null),
                (this.selectors = []),
                (this.domIdPrefix = t),
                (this.product = new Bizweb.Product(e.product)),
                void 0 !== e.onVariantSelected
                    ? (this.onVariantSelected = e.onVariantSelected)
                    : (this.onVariantSelected = function () {}),
                this.replaceSelector(t),
                this.initDropdown(),
                !0
            );
        }
        return (
            (t.prototype.replaceSelector = function (t) {
                var e = document.getElementById(t),
                    n = e.parentNode;
                Bizweb.each(this.buildSelectors(), function (t) {
                    n.insertBefore(t, e);
                }),
                    (e.style.display = "none"),
                    (this.variantIdField = e);
            }),
            (t.prototype.buildSelectors = function () {
                for (var t = 0; t < this.product.optionNames().length; t++) {
                    var e = new Bizweb.SingleOptionSelector(
                        this,
                        t,
                        this.product.optionNames()[t],
                        this.product.optionValues(t)
                    );
                    (e.element.disabled = !1), this.selectors.push(e);
                }
                var n = this.selectorDivClass,
                    i = this.product.optionNames();
                return Bizweb.map(this.selectors, function (t) {
                    var e = document.createElement("div");
                    if ((e.setAttribute("class", n), i.length > 1)) {
                        var r = document.createElement("label");
                        (r.htmlFor = t.element.id),
                            (r.innerHTML = t.name),
                            e.appendChild(r);
                    }
                    return e.appendChild(t.element), e;
                });
            }),
            (t.prototype.initDropdown = function () {
                var t = { initialLoad: !0 };
                if (!this.selectVariantFromDropdown(t)) {
                    var e = this;
                    setTimeout(function () {
                        e.selectVariantFromParams(t) ||
                            e.selectors[0].element.onchange(t);
                    });
                }
            }),
            (t.prototype.selectVariantFromDropdown = function (t) {
                var e = document
                    .getElementById(this.domIdPrefix)
                    .querySelector("[selected]");
                return !!e && this.selectVariant(e.value, t);
            }),
            (t.prototype.selectVariantFromParams = function (t) {
                var e = Bizweb.getUrlParameter("variantid");
                return (
                    null == e && (e = Bizweb.getUrlParameter("variantId")),
                    this.selectVariant(e, t)
                );
            }),
            (t.prototype.selectVariant = function (t, e) {
                var n = this.product.getVariantById(t);
                if (null == n) return !1;
                for (var i = 0; i < this.selectors.length; i++) {
                    var r = this.selectors[i].element,
                        o = n[r.getAttribute("data-option")];
                    null != o &&
                        this.optionExistInSelect(r, o) &&
                        (r.value = o);
                }
                return (
                    "undefined" != typeof jQuery
                        ? jQuery(this.selectors[0].element).trigger("change", e)
                        : this.selectors[0].element.onchange(e),
                    !0
                );
            }),
            (t.prototype.optionExistInSelect = function (t, e) {
                for (var n = 0; n < t.options.length; n++)
                    if (t.options[n].value == e) return !0;
            }),
            (t.prototype.updateSelectors = function (t, e) {
                var n = this.selectedValues(),
                    i = this.product.getVariant(n);
                i
                    ? ((this.variantIdField.disabled = !1),
                      (this.variantIdField.value = i.id))
                    : (this.variantIdField.disabled = !0),
                    this.onVariantSelected(i, this, e),
                    null != this.historyState &&
                        this.historyState.onVariantChange(i, this, e);
            }),
            (t.prototype.selectedValues = function () {
                for (var t = [], e = 0; e < this.selectors.length; e++) {
                    var n = this.selectors[e].element.value;
                    t.push(n);
                }
                return t;
            }),
            (t.name = "OptionSelectors"),
            t
        );
    })()),
    (Bizweb.SingleOptionSelector = function (t, e, n, i) {
        (this.multiSelector = t),
            (this.values = i),
            (this.index = e),
            (this.name = n),
            (this.element = document.createElement("select"));
        for (var r = 0; r < i.length; r++) {
            var o = document.createElement("option");
            (o.value = i[r]), (o.innerHTML = i[r]), this.element.appendChild(o);
        }
        return (
            this.element.setAttribute(
                "class",
                this.multiSelector.selectorClass
            ),
            this.element.setAttribute("data-option", "option" + (e + 1)),
            (this.element.id = t.domIdPrefix + "-option-" + e),
            (this.element.onchange = function (n, i) {
                (i = i || {}), t.updateSelectors(e, i);
            }),
            !0
        );
    });
