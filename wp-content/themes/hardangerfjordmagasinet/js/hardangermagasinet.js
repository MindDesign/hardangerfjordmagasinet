
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
    listWrapper: document.getElementById("thumbnail-carousel"),
    listElements: document.getElementById("thumbnail-carousel").getElementsByClassName("thumbnail-carousel-element"),
    leftButton: document.getElementById("thumbnail-carousel").getElementsByClassName("thumbnail-carousel-prev")[0],
    rightButton: document.getElementById("thumbnail-carousel").getElementsByClassName("thumbnail-carousel-next")[0],

    init: function () {
        let elementWidth = this.getElementWidth (this.listElements[0] );
        this.listWrapper.style["width"] = elementWidth * this.listElements.length + "px";
    },


    getElementWidth: function(el) {
        el = (typeof el === 'string') ? document.querySelector(el) : el;
        let styles = window.getComputedStyle(el);
        return Math.ceil ( el.offsetWidth + parseFloat(styles['marginLeft']) + parseFloat(styles['marginRight']) );
    }
};

(function() {
    "use strict";

    menu.init();

    logoCarousel.init();
}());
