
const nav = document.getElementById('mainNav');
const hamburger = document.getElementById('hamburger');
const drawer = document.getElementById('navDrawer');

window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
});

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    drawer.classList.toggle('open');
    nav.classList.add('scrolled');
});