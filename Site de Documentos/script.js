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

document.getElementById('themeToggleBtn').addEventListener('click', function() {
    // Adiciona ou remove ?light-theme na URL ao clicar no botão
    var currentUrl = window.location.href;
    var newUrl;

    if (currentUrl.includes('?light-theme')) {
        newUrl = currentUrl.replace('?light-theme', '');
    } else {
        newUrl = currentUrl + (currentUrl.includes('?') ? '&' : '?') + 'light-theme';
    }

    window.location.href = newUrl;
});

mapboxgl.accessToken = 'SUA_CHAVE_DE_ACESSO_MAPBOX';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-48.858844, -15.780148], // Coordenadas iniciais
            zoom: 10
        });

        function calcularRota() {
            var origem = document.getElementById('origem').value;
            var destino = document.getElementById('destino').value;

            // Use a API Mapbox Directions para obter uma rota entre origem e destino
            map.addControl(
                new MapboxDirections({
                    accessToken: mapboxgl.accessToken,
                    unit: 'metric',
                    profile: 'mapbox/driving',
                    alternatives: true,
                    language: 'pt-BR',
                }),
                'top-left'
            );
        }