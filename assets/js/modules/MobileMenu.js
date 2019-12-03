class MobileMenu {

  constructor() {
    this.hamburger = document.getElementById('hamburger')
    this.menu = document.querySelector('.c-main-header__nav-list')
    this.links = document.querySelectorAll('.c-main-header__nav-list li')
    this.html = document.querySelector('html');
    this.events();
  }

  events() {
    this.hamburger.addEventListener('click', (ev) => {
      this.menu.classList.toggle('open');
      this.hamburger.classList.toggle('open');

      if (this.html.style.overflow === 'hidden') {
        this.html.style.overflow = 'auto';
      } else {
        this.html.style.overflow = 'hidden';
      }

    });
  }
}

export default MobileMenu;


