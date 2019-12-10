class SetGalleryHeight {

  constructor() {
    this.gallery = document.querySelector('.mgl-justified');
    this.setRh();
  }

  setRh() {
    this.gallery.setAttribute("style", "--rh: 535px;");
  }

}

export default SetGalleryHeight;