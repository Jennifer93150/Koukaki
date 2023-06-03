window.addEventListener('load', (event) => {

const siteNavigation = document.getElementById('navigation');
console.log(siteNavigation);
var burger = document.querySelector('.header_nav_bar_burger');
const button = siteNavigation.getElementsByTagName( 'button' )[0];
const cross = document.querySelector('.header_nav_bar_cross');

burger.addEventListener( 'click', function() {
    siteNavigation.classList.toggle( 'toggled' );

    if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
        button.setAttribute( 'aria-expanded', 'false' );
        
    } else {
        button.setAttribute( 'aria-expanded', 'true' );
    }
    cross.style.display = "block";
    burger.style.display = "none";
} );

cross.addEventListener( 'click', function() {
   
    if ( button.getAttribute( 'aria-expanded' ) === 'false' ) {
        button.setAttribute( 'aria-expanded', 'true' );
    } else {
        button.setAttribute( 'aria-expanded', 'false' );
    }
    cross.style.display = "none";
    burger.style.display = "block";
    siteNavigation.classList.remove( 'toggled' );
    siteNavigation.classList.add( 'closed' );
    
} );

});

