const leftNavigation = document.querySelector('.left-navigation');

leftNavigation.addEventListener('click', event => {
    let target = event.target
    if(target.tagName == 'A') {
        event.preventDefault();
        if(target.nextElementSibling != undefined) {
            target.nextElementSibling.classList.toggle('is-disabled')
        }
    }
})