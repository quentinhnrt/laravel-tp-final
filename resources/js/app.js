import "./bootstrap";
import Alpine from "alpinejs";
import TomSelect from "tom-select/dist/js/tom-select.base.js";
import TomSelect_remove_button from "tom-select/dist/js/plugins/remove_button.js";
import TomSelect_clear_button from "tom-select/dist/js/plugins/clear_button.js";

window.Alpine = Alpine;
Alpine.start();

TomSelect.define("remove_button", TomSelect_remove_button);
TomSelect.define("clear_button", TomSelect_clear_button);

document.querySelectorAll(".select-single").forEach((el) => {
    let settings = {
        maxItems: 1,
        plugins: {
            clear_button: {
                title: "Remove all selected options",
            },
        },
        persist: false,
        create: false,
    };
    new TomSelect(el, settings);
});

document.querySelectorAll(".select-multiple").forEach((el) => {
    let settings = {
        maxItems: el.getAttribute("max") ?? null,
        plugins: {
            remove_button: {
                title: "Remove this item",
            },
        },
        persist: false,
        create: false,
    };
    new TomSelect(el, settings);
});
