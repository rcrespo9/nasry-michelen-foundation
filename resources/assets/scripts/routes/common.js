export default {
  data: {
    isNavOpen: false,
  },
  init() {
    // JavaScript to be fired on all pages
  },
  openNav() {
    const $body = document.body;

    this.data.isNavOpen = !this.data.isNavOpen;

    if (this.data.isNavOpen) {
      $body.classList.remove('nav-open');
    } else {
      $body.classList.add('nav-open');
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
