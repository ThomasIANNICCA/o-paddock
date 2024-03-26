
const burgerButton = document.querySelector('.burger-menu')

    console.log(burgerButton);

    burgerButton.addEventListener('click', openFunction);

function openFunction(){

    console.log("on a cliqué sur le burger menu")
    const burgerMenuList = document.querySelector('.header_nav');
    console.log(burgerMenuList);

    burgerMenuList.classList.toggle('open');

}