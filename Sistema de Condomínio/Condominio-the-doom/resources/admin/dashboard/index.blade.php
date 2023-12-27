<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | The Doom</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="{{ isset($_GET['light-theme']) ? 'bg-light' : 'bg-dark' }}" data-bs-theme="{{ isset($_GET['light-theme']) ? 'light' : 'dark' }}">
  <div id="app">
    <div class="container" id="loadingOverlay">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="loading-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-door-closed placeholder-glow fade-in-out" viewBox="0 0 16 16">
              <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
              <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <!-- Top navigation-->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button type="button" id="themeToggleBtn" class="btn btn-primary">
            <i id="themeIcon" class="fas <?php echo isset($_GET['light-theme']) ? 'fa-moon' : 'fa-sun'; ?>"></i><!-- Ícone para o modo claro/escuro -->
          </button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="p-3 nav-link" href="{{ url('/') }}{{ isset($_GET['light-theme']) ? '?light-theme' : '' }}">Home</a>

          </ul>

          <li class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
          </li>

          <script src="script.js"></script>
        </div>
      </div>
    </nav>
    <div class="text text-center mt-5">
    </div>

  </div>
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Simulando um carregamento de 3 segundos
      setTimeout(function() {
        document.getElementById("loadingOverlay").style.display = "none";
        document.getElementById("mainContainer").classList.add("show");
      }, 1000);
    });

    // Adicionando funcionalidade ao botão de alternar tema
    document.getElementById("themeToggleBtn").addEventListener("click", function() {
      const body = document.body;
      const currentTheme = body.getAttribute("data-bs-theme");
      const navBar = document.querySelector(".navbar");

      // Alternar entre temas
      if (currentTheme === "dark") {
        body.setAttribute("data-bs-theme", "light");
        body.classList.remove("bg-dark");
        body.classList.add("bg-light");
        navBar.classList.remove("navbar-dark");
        navBar.classList.add("navbar-light");
      } else {
        body.setAttribute("data-bs-theme", "dark");
        body.classList.remove("bg-light");
        body.classList.add("bg-dark");
        navBar.classList.remove("navbar-light");
        navBar.classList.add("navbar-dark");
      }
    });
  </script>
</body>

</html>