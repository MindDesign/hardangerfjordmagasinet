
let menu = {
    menuShowing: false,
    body: document.getElementsByTagName('body'),
    menuWrapper: document.getElementById("mobile-menu-wrapper"),
    openMenu: document.getElementById("menu-button"),
    closeMenu: document.getElementById('close-menu'),

    init: function () {

        this.openMenu.addEventListener("click", () => {
            this.menuShowing = true;
            this.body[0].classList.add('fixed', 'overflow-y-auto');
            this.menuWrapper.classList.remove('hidden');
        });
        this.closeMenu.addEventListener("click", () => {
            this.menuShowing = false;
            this.body[0].classList.remove('fixed', 'overflow-y-auto');
            this.menuWrapper.classList.add('hidden');
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
