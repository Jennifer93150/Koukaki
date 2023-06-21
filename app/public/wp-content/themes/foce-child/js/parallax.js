window.addEventListener("DOMContentLoaded", (event) => {
  /**
   * calcul position elt par rapport au haut page
   * fonction recursive qui permet de connaitre position de l'elt 
   * par rapport au haut complet de la page et pas au haut de la fenetre
   * @param {HTMLElement} element 
   * @returns {number}
   */
  function offsetTop(element, acc = 0) {
    //si elt a un parent je calcul offsettop de ce parent 
    if (element.offsetParent) {
      //retourne le top du parent, et 
      return offsetTop(element.offsetParent, acc + element.offsetTop)
    }
    //si l'elt n'a pas de parent
    return acc + element.offsetTop;
  }

  class Parallax {
    /**
     * je construit mon element
     * @param {HTMLElement} element 
     */
    constructor(element) {
      this.element = element;
      //ratio = la vitesse, parsefloat pr avoir un number
      this.ratio = parseFloat(element.dataset.parallax);
      this.onScroll = this.onScroll.bind(this);
      document.addEventListener('scroll', this.onScroll); 
    }
    
    onScroll() {
      this.element.classList.remove('floating');
      const story = document.querySelector('#story');
      //Valeur du haut de page (avec scroll) jusqu'au haut section histoire
      const storyTop = offsetTop(story) - window.scrollY;
      //Valeur du haut de la page au bas du logo
      const logoY = offsetTop(this.element) + this.element.offsetHeight

      const diffY = storyTop - logoY;
      if (diffY <= 0) {
        this.element.style.setProperty('transform', `translateY(${diffY * this.ratio}px)`);
      }
    }
    
    /**
     * ajoutera le comportement
     * en static car elle appelable sur la classe
     * retourn un array 
     * @returns {Parallax[]}
     */
    static bind() {
      //ON VEUT TROUVER TOUS LE ELTS QUI ONT DATA-PARALLAX
      // et on map le tableau
      return Array.from(document.querySelectorAll("[data-parallax]")).map((element) => {
        // achq elt je retourne une nouvelle classe(nouvel element)
        return new Parallax(element)
      })
    }
  }
  
  //j'appelle bind
  Parallax.bind()

  
});

