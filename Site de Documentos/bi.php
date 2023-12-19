<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body <?php echo isset($_GET['light-theme']) ? 'data-bs-theme="light"' : 'data-bs-theme="dark"'; ?>>
    <!-- Top navigation-->
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Documentos</a>
                        <div class="dropdown-menu  dropdown-center" aria-labelledby="navbarDropdown">
                            <a href="#" class="p-3 dropdown-item">Bilhete de Identidade</a>
                            <a href="#" class="p-3 dropdown-item">Cartão de Contribuinte</a>
                            <a href="#" class="p-3 dropdown-item">Cartão de Eleitor</a>
                            <a href="#" class="p-3 dropdown-item">Passaporte</a>
                            <a href="#" class="p-3 dropdown-item">Certidão de Nascimento</a>
                            <a href="#" class="p-3 dropdown-item">Carteira de Condução</a>
                            <a href="#" class="p-3 dropdown-item">Documento Militar</a>
                            <a href="#" class="p-3 dropdown-item">Cartão Nacional de Saúde</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#!">Onde Tratar</a></li>
                </ul>
                <button type="button" id="themeToggleBtn" class="btn btn-primary">
                <i id="themeIcon" class="fas <?php echo isset($_GET['light-theme']) ? 'fa-moon' : 'fa-sun'; ?>"></i><!-- Ícone para o modo claro/escuro -->
                </button>
                <script>
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
                </script>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</body>

</html>