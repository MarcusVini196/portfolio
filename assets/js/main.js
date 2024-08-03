let btnMenu = document.getElementById('btn-abri-menu')
let menu = document.getElementById('menu-mobile')


btnMenu.addEventListener('click', () => {
    menu.classList.add('hidden-menu')
})


menu.addEventListener('click', () => {
    menu.classList.remove('hidden-menu')
})
