
let menu = {
    body: document.getElementsByTagName('body'),
    menuWrapper: document.getElementById("menu-wrapper"),
    menu: document.getElementById("site-navigation"),
    openMenu: document.getElementById("menu-button"),
    closeMenu: document.getElementById('close-menu'),

    init: function () {
        this.openMenu.addEventListener("click", () => {
            this.body[0].classList.add('overflow-hidden');
            this.menuWrapper.classList.remove('hidden');
            this.menuWrapper.classList.add('fixed');
            this.closeMenu.classList.remove('hidden');
        });
        this.closeMenu.addEventListener("click", () => {
            this.body[0].classList.remove('overflow-hidden');
            this.menuWrapper.classList.add('hidden');
            this.menuWrapper.classList.remove('fixed');
            this.closeMenu.classList.add('hidden');
        });
    },
};

/**
 * Logo carousel
 */
let logoCarousel = {
    list: document.getElementById("thumbnail-carousel"),

    init: function () {
        console.log (this.list);
    }
};

(function() {
    "use strict";

    menu.init();
}());
