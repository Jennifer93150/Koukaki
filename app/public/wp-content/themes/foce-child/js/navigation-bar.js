window.addEventListener('load', (event) => {

const siteNavigation = document.getElementById('navigation');
var burger = document.querySelector('.header_nav_bar_burger');
const button = siteNavigation.getElementsByTagName( 'button' )[0];
const cross = document.querySelector('.header_nav_bar_cross');
const header = document.querySelector('.header');
const menu = document.querySelector('.header_nav_menu');
const links = document.querySelectorAll('.header_nav_menu_list_item_link');

function closedMenu(){
    if ( button.getAttribute( 'aria-expanded' ) === 'false' ) {
        button.setAttribute( 'aria-expanded', 'true' );
    } else {
        button.setAttribute( 'aria-expanded', 'false' );
    }
    cross.style.display = "none";
    burger.style.display = "block";
    siteNavigation.classList.remove( 'toggled' );
    siteNavigation.classList.add( 'closed' );
}

links.forEach(element => {
    element.addEventListener('click', function(){
        console.log(element)
        closedMenu();
    })
});

burger.addEventListener( 'click', function() {
    siteNavigation.classList.toggle( 'toggled' );
    if(siteNavigation.classList.contains('closed')){
        siteNavigation.classList.remove('closed')
    }
    if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
        button.setAttribute( 'aria-expanded', 'false' );
        
    } else {
        button.setAttribute( 'aria-expanded', 'true' );
    }
    cross.style.display = "block";
    burger.style.display = "none";
} );

cross.addEventListener( 'click', function() {
        closedMenu();
    });
});

