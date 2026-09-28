document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.site-header__menu-btn');
    const headerNav = document.querySelector('.header-nav');

    if (!menuBtn || !headerNav) return;

    menuBtn.addEventListener('click', function () {
        const isOpen = headerNav.classList.toggle('is-open');
        menuBtn.setAttribute('aria-expanded', isOpen);
    });

    headerNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            headerNav.classList.remove('is-open');
            menuBtn.setAttribute('aria-expanded', 'false');
        });
    });
});