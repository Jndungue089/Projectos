document.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    var scrollTop = window.scrollY;

    // Adicione ou remova a classe 'fixed' dependendo da posição do scroll
    if (scrollTop > 50) {
        navbar.classList.add('fixed');
    } else {
        navbar.classList.remove('fixed');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const wrapper = document.getElementById('wrapper');

    if (sidebarToggle && wrapper) {
        sidebarToggle.addEventListener('click', () => {
            document.body.classList.toggle('sb-sidenav-toggled');
            const isToggled = document.body.classList.contains('sb-sidenav-toggled');
            wrapper.style.marginLeft = isToggled ? '0' : '-15rem';
        });
    }
});
$(document).ready(function () {
    $(".toggle-sidebar").click(function () {
        $("#sidebar").toggleClass("collapsed");
        $("#content").toggleClass("col-md-12 col-md-9");

        return false;
    });
});

document.getElementById('themeToggleBtn').addEventListener('click', function () {
    // Adiciona ?light-theme na URL ao clicar no botão
    window.location.href = window.location.href + (window.location.search ? '&light-theme' : '?light-theme');
});