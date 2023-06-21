window.addEventListener("DOMContentLoaded", (event) => {

  const storyTitle = document.querySelector('.story__div__title');
  const studioTitle = document.querySelector('.studio__div__title-first');
  const koukakiTitle = document.querySelector('.studio__div__title-second');
  const charactersTitle = document.querySelector('.characters_div_title');
  const placeTitle = document.querySelector('.place_div_title');
  const cloud = document.querySelector('#place');
  const flowers = document.querySelectorAll('.fast-rotation-flower');

  //Renvoie la taille de l' élément et sa position par rapport à la fenêtre
  const {scrollTop, clientHeight} = document.documentElement;
  
  /** AJOUTE CLASSE ACTIVE QUAND le haut de L'ELEMENT EST VISIBLE A L'ECRAN */
  function addClassActive(element){
    const topElementToTopViewport = element.getBoundingClientRect().top;
    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.80){
      element.classList.add('active');
    }
  } 

  /**
  * ACTIVATION DES ANIMATIONS AU SCROLL
  */
  window.addEventListener(
    "scroll",
    () => {
        /* pr deplacement nuages en mm tps que le scroll */
        document.body.style.setProperty(
          "--scroll",
          window.pageYOffset / window.innerHeight
        );
        
        // TITRE HISTOIRE
        addClassActive(storyTitle);
        // TITRE Personnages
        addClassActive(charactersTitle);
        // TITRE STUDIO
        addClassActive(studioTitle);
        // TITRE KOUKAKI
        addClassActive(koukakiTitle);
        // TITRE LIEU
        addClassActive(placeTitle);
        //  NUAGES
        addClassActive(cloud);
        // FLEURS
        flowers.forEach(element => {
          addClassActive(element);
          //element.classList.add('active');
        });
        
    },
    false
  );
});

