import $ from 'jquery';

export default {
  data: {
    isNavOpen: false,
    theNav: document.querySelector('.js-nav'),
    theMobileNavBtn: document.querySelector('.js-nav-trigger'),
    theMobileNavList: document.querySelector('.js-nav-list'),
    allSubMenus: document.querySelectorAll('.menu-item-has-children .sub-menu'),
    allDropdownItems: document.querySelectorAll('.menu-item-has-children'),
    closeMobileNavBtn: document.querySelector('.js-nav-close'),
    theBody: document.body,
    noScrollClass: 'no-scroll',
    navOpenClass: 'js-nav--open',
  },
  init() {
    const isMinTabletWidth = window.matchMedia(`(min-width: 58.125em)`);
    const checkIfTablet = (e) => e.matches ? this.destroyMobileNav() : this.addNavListeners();

    checkIfTablet(isMinTabletWidth); // check media query on init
    isMinTabletWidth.addListener(checkIfTablet); // add media query listener
  },
  openNav() {
    this.data.theBody.classList.add(this.data.noScrollClass);
    this.data.theNav.classList.add(this.data.navOpenClass);
  },
  closeNav() {
    this.data.theBody.classList.remove(this.data.noScrollClass);
    this.data.theNav.classList.remove(this.data.navOpenClass);
  },
  toggleNavDropdown(e) {
    const isDropdownListItem = e.target && e.target.nodeName === 'LI' && e.target.classList.contains('menu-item-has-children');

    if (isDropdownListItem) {
      const $subMenu = $(e.target.lastElementChild);

      $subMenu.slideToggle();
      $(e.target).toggleClass('sub-menu--open');
    }
  },
  addNavListeners() {
    this.data.theMobileNavBtn.addEventListener('click', () => this.openNav(), false);
    this.data.closeMobileNavBtn.addEventListener('click', () => this.closeNav(), false);
    this.data.theMobileNavList.addEventListener('click', this.toggleNavDropdown, false);
  },
  destroyMobileNav() {
    this.closeNav();
    this.data.theMobileNavBtn.removeEventListener('click', this.openNav, false);
    this.data.closeMobileNavBtn.removeEventListener('click', () => this.closeNav, false);
    this.data.theMobileNavList.removeEventListener('click', this.toggleNavDropdown, false);
    this.data.allSubMenus.forEach(el => el.style = '');
    this.data.allDropdownItems.forEach(el => $(el).removeClass('sub-menu--open'));
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
