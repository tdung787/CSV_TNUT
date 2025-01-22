let optionsMap = {};
(updateOptionsInSelector = function (o) {
    let t,
        e,
        n = $(".single-option-selector");
    switch (o) {
        case 0:
            (e = "root"), (t = n.eq(0));
            break;
        case 1:
            (e = n.eq(0).val()), (t = n.eq(1));
            break;
        case 2:
            (e = n.eq(0).val()), (e += " / " + n.eq(1).val()), (t = n.eq(2));
    }
    let i = t.val(),
        a = optionsMap[e],
        p = "";
    for (option of a) p += `<option value="${option}">${option}</option>`;
    t.empty().append(p),
        $('.swatch[data-option-index="' + o + '"] .swatch-element').each(
            function () {
                a.includes($(this).attr("data-value"))
                    ? $(this)
                          .removeClass("soldout")
                          .find("[type=radio]")
                          .removeAttr("disabled", "disabled")
                          .removeAttr("checked")
                    : $(this)
                          .addClass("soldout")
                          .find("[type=radio]")
                          .removeAttr("checked")
                          .attr("disabled", "disabled");
            }
        ),
        a.includes(i) && t.val(i),
        t.trigger("change");
}),
    (linkOptionSelectors = function (o) {
        let t = $(".single-option-selector"),
            e = o.options.length;
        for (variant of o.variants)
            if (variant.available) {
                if (
                    ((optionsMap.root = optionsMap.root || []),
                    optionsMap.root.push(variant.option1),
                    (optionsMap.root = $.unique(optionsMap.root)),
                    e > 1)
                ) {
                    let o = variant.option1;
                    (optionsMap[o] = optionsMap[o] || []),
                        optionsMap[o].push(variant.option2),
                        (optionsMap[o] = $.unique(optionsMap[o]));
                }
                if (3 === e) {
                    let o = variant.option1 + " / " + variant.option2;
                    (optionsMap[o] = optionsMap[o] || []),
                        optionsMap[o].push(variant.option3),
                        (optionsMap[o] = $.unique(optionsMap[o]));
                }
            }
        updateOptionsInSelector(0),
            e > 1 && updateOptionsInSelector(1),
            3 === e && updateOptionsInSelector(2),
            t.eq(0).on("change", function () {
                return (
                    updateOptionsInSelector(1),
                    3 === e && updateOptionsInSelector(2),
                    !0
                );
            }),
            t.eq(1).on("change", function () {
                return 3 === e && updateOptionsInSelector(2), !0;
            });
    });
