document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const navUl = document.querySelector('.header-nav ul');

    menuIcon.addEventListener('click', function() {
        navUl.style.display = navUl.style.display === 'block' ? 'none' : 'block';
    });
});