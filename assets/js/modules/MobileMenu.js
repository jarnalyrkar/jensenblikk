class MobileMenu {

  constructor() {
    this.hamburger = document.getElementById('hamburger')
    this.menu = document.querySelector('.mainNav')
    this.links = document.querySelectorAll('.mainNav__item')
    this.open = false;
    this.events()
  }

  events() {
    this.hamburger.addEventListener('click', (ev) => {
      if (this.open) {
        this.open = false
        this.menu.style.visibility = "hidden"
        this.menu.style.height = "0";
      } else {
        this.open = true;
        this.menu.style.visibility = "visible"
        this.menu.style.height = "100vh";
      }

    });
  }
}

export default MobileMenu;


