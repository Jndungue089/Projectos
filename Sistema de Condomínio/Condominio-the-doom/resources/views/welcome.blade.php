<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | The Doom</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .text {
            padding-top: 40px;
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .fade-in-out {
            animation: fadeInOut 2s infinite;
            /* Pode ajustar a duração da animação conforme necessário */
        }

        .full-width-section {
            width: 100%;
            /* Faz a seção ocupar 100% da largura da tela */
            display: flex;
            align-items: center;
        }

        .image-container {
            flex: 1;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        .separator {
            flex: 1;
            padding: 20px;
            /* Ajuste conforme necessário */
        }

        section {
            height: 100vh;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .text-container {
            color: black;
            height: 50vh;
        }

        body[data-bs-theme="dark"] .text-container {
            color: white;
            height: 50vh;
        }

        body[data-bs-theme="dark"] .navbar-toggler-icon,
        body[data-bs-theme="dark"] #themeIcon {
            color: white;
        }

        body[data-bs-theme="dark"] .btn-primary {
            color: white;
        }

        body[data-bs-theme="dark"] .btn-primary:hover {
            background-color: #495057;
            border-color: #495057;
        }

        body[data-bs-theme="dark"] .modal-header,
        body[data-bs-theme="dark"] .modal-content {
            color: white;
        }
    </style>
</head>

<body <?php echo isset($_GET['light-theme']) ? 'data-bs-theme="light"' : 'data-bs-theme="dark"'; ?>>
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
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button type="button" id="themeToggleBtn" class="btn btn-primary">
                    <i id="themeIcon" class="fas <?php echo isset($_GET['light-theme']) ? 'fa-moon' : 'fa-sun'; ?>"></i><!-- Ícone para o modo claro/escuro -->
                </button>
                <ul class="navbar-nav bg-primary me-auto mb-2 mb-lg-0">
                    <li class=" nav-item active"><a class="p-3 nav-link" href="index.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>">Home</a></li>
                </ul>
                <form action="{{route('login')}}<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>">
                    <button class="nav-item btn btn-primary" type="submit">Login</button>
                </form>
                <script src="script.js"></script>
            </div>
        </div>
    </nav>
    <div class="text text-center mt-5">
        <p>Welcome To</p>
        <h1>The DOOM</h1>
    </div>
    <section class="full-width-section" id="mainContainer">
        <div class="separator">
            <div class="container px-4 px-lg-5 text-container">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum molestie felis, non
                            sagittis augue sagittis feugiat. Integer auctor ex ut felis convallis maximus. Aliquam
                            placerat ante nec ligula volutpat bibendum. Proin sodales, sem vitae iaculis volutpat, magna
                            tortor tincidunt turpis, laoreet efficitur nunc felis eget mi. Vivamus euismod blandit
                            sodales. Phasellus efficitur, ex non eleifend consequat, nisi sem pulvinar sem, sit amet
                            vulputate dui felis eu nisl. Etiam tempor quis ante quis tincidunt. Vestibulum ac porta
                            massa. Mauris commodo enim at risus rhoncus, eget dictum lectus aliquet.

                        <p>Nullam aliquam lacus at ipsum laoreet maximus. Vivamus congue tortor nulla, vel vulputate
                            magna auctor non. Quisque luctus maximus pretium. Orci varius natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Ut pharetra feugiat mi. Praesent pulvinar
                            dapibus convallis. Nullam at commodo diam, vel feugiat ex. Donec tempus vehicula justo, vel
                            sagittis enim dictum vitae. Aliquam vel risus mattis, sollicitudin nisi eget, vehicula urna.
                            Suspendisse eget mi sit amet eros dapibus fringilla. Etiam volutpat nulla risus, in
                            malesuada dolor blandit vel. Donec consectetur consectetur porttitor. Integer vehicula
                            vehicula tortor, nec varius nibh faucibus eu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="{{ asset('assets/condo1.jpg') }}" alt="Background Image" class="rounded img-fluid">

        </div>
    </section>
    <section class="full-width-section" id="mainContainer2">
        <div class="image-container">
            <img src="{{ asset('assets/condo2.jpg') }}" alt="Background Image" class="rounded img-fluid">

        </div>
        <div class="separator">
            <div class="container px-4 px-lg-5 text-container">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum molestie felis, non
                            sagittis augue sagittis feugiat. Integer auctor ex ut felis convallis maximus. Aliquam
                            placerat ante nec ligula volutpat bibendum. Proin sodales, sem vitae iaculis volutpat, magna
                            tortor tincidunt turpis, laoreet efficitur nunc felis eget mi. Vivamus euismod blandit
                            sodales. Phasellus efficitur, ex non eleifend consequat, nisi sem pulvinar sem, sit amet
                            vulputate dui felis eu nisl. Etiam tempor quis ante quis tincidunt. Vestibulum ac porta
                            massa. Mauris commodo enim at risus rhoncus, eget dictum lectus aliquet.

                        <p>Nullam aliquam lacus at ipsum laoreet maximus. Vivamus congue tortor nulla, vel vulputate
                            magna auctor non. Quisque luctus maximus pretium. Orci varius natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Ut pharetra feugiat mi. Praesent pulvinar
                            dapibus convallis. Nullam at commodo diam, vel feugiat ex. Donec tempus vehicula justo, vel
                            sagittis enim dictum vitae. Aliquam vel risus mattis, sollicitudin nisi eget, vehicula urna.
                            Suspendisse eget mi sit amet eros dapibus fringilla. Etiam volutpat nulla risus, in
                            malesuada dolor blandit vel. Donec consectetur consectetur porttitor. Integer vehicula
                            vehicula tortor, nec varius nibh faucibus eu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="full-width-section" id="mainContainer3">
        <div class="separator">
            <div class="container px-4 px-lg-5 text-container">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum molestie felis, non
                            sagittis augue sagittis feugiat. Integer auctor ex ut felis convallis maximus. Aliquam
                            placerat ante nec ligula volutpat bibendum. Proin sodales, sem vitae iaculis volutpat, magna
                            tortor tincidunt turpis, laoreet efficitur nunc felis eget mi. Vivamus euismod blandit
                            sodales. Phasellus efficitur, ex non eleifend consequat, nisi sem pulvinar sem, sit amet
                            vulputate dui felis eu nisl. Etiam tempor quis ante quis tincidunt. Vestibulum ac porta
                            massa. Mauris commodo enim at risus rhoncus, eget dictum lectus aliquet.

                        <p>Nullam aliquam lacus at ipsum laoreet maximus. Vivamus congue tortor nulla, vel vulputate
                            magna auctor non. Quisque luctus maximus pretium. Orci varius natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Ut pharetra feugiat mi. Praesent pulvinar
                            dapibus convallis. Nullam at commodo diam, vel feugiat ex. Donec tempus vehicula justo, vel
                            sagittis enim dictum vitae. Aliquam vel risus mattis, sollicitudin nisi eget, vehicula urna.
                            Suspendisse eget mi sit amet eros dapibus fringilla. Etiam volutpat nulla risus, in
                            malesuada dolor blandit vel. Donec consectetur consectetur porttitor. Integer vehicula
                            vehicula tortor, nec varius nibh faucibus eu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="{{ asset('assets/condo3.jpg') }}" alt="Background Image" class="rounded img-fluid">

        </div>
    </section>

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

        document.addEventListener("DOMContentLoaded", function() {
            // Simulando um carregamento de 3 segundos
            setTimeout(function() {
                document.getElementById("loadingOverlay").style.display = "none";
                document.getElementById("mainContainer").classList.add("show");
                document.getElementById("mainContainer2").classList.add("show");
                document.getElementById("mainContainer3").classList.add("show");
            }, 1000);
        });

        // Adicionando funcionalidade ao botão de alternar tema
        document.getElementById("themeToggleBtn").addEventListener("click", function() {
            const body = document.body;
            const currentTheme = body.getAttribute("data-bs-theme");

            // Alternar entre temas
            if (currentTheme === "dark") {
                body.setAttribute("data-bs-theme", "light");
            } else {
                body.setAttribute("data-bs-theme", "dark");
            }
        });
    </script>
</body>

</html>