// Ouverture et fermeture du menu burger
let icone = document.querySelector('#menu-bars');
let menu = document.querySelector('#menu');

// console.log(icone);
// console.log(typeof icone);
// console.log('Element : ' + icone);

// console.log(menu);
// console.log(typeof menu);
// console.log('Element : ' + menu);

icone.addEventListener('click', function() 
{
    // console.log("hello");
    // let menuHeight = menu.style.height;
    // // console.log('hello');
    // console.log(menuHeight);

    // Nécessaire de modifier la balise style dans le html
    if( menu.style.height == '0px' )
    {
        menu.style.height = '150px';
    }
    else if ( menu.style.height == '150px' )
    {
        menu.style.height = '0px';
    }
});