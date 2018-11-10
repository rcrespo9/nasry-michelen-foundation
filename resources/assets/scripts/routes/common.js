export default {
  data: {
    isNavOpen: false,
    theNav: document.querySelector('.js-nav'),
    theMobileNavBtn: document.querySelector('.js-nav-trigger'),
    theBody: document.body,
    noScrollClass: 'no-scroll',
    navOpenClass: 'js-nav--open',
  },
  init() {
    const isMinTabletWidth = window.matchMedia(`(min-width: 930px)`);
    const checkIfTablet = (e) => e.matches ? this.destroyMobileNav() : this.addMobileNavBtnListener();

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
  addMobileNavBtnListener() {
    this.data.theMobileNavBtn.addEventListener('click', () => this.openNav(), false);
  },
  destroyMobileNav() {
    this.closeNav();
    this.data.theMobileNavBtn.removeEventListener('click', this.openNav, false);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
