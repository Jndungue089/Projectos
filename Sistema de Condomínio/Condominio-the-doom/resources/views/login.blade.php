<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | The Doom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
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
    </style>
</head>

<body class="d-flex align-items-center" style="height: 100vh; background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="loading-overlay" id="loadingOverlay">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-door-closed placeholder-glow fade-in-out" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                    </svg>
                </div>
                <form action="{{route('login')}}" method="POST" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    @csfr
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                            <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                            <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                        </svg>
                        <h2 class="mt-3" style="font-family: 'Catamaran', sans-serif;">The DOOM</h2>
                    </div>
                    <hr>
                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <label for="floatingInput" value="{{ __('Email') }}">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required autocomplete="current-password" name="password" id="password">
                        <label for="floatingPassword" value="{{ __('Password') }}">Palavra-Passe</label>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        <a href="#" class="mt-3" style="text-decoration: none;">Esqueci-me da Palavra-Passe</a>
                        <div class="col">
                            <p class="mt-3">Ainda não possui uma conta?</p>
                            <form action="{{route('create')}}" method="POST">
                                <button type="submit" class="btn btn-primary">Criar conta</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Simulando um carregamento de 3 segundos
            setTimeout(function() {
                document.getElementById("loadingOverlay").style.display = "none";
            }, 3000);
        });
    </script>
</body>

</html>