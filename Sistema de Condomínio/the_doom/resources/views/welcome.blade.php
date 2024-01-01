<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome | The DOOM</title>
    <meta name="description" content="Welcome to Condominium The DOOM">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased" <?php echo isset($_GET['light-theme']) ? 'data-bs-theme="light"' : 'data-bs-theme="dark"'; ?>>
    <div class="container mx-auto p-8">
        <nav class="navbar navbar-expand-lg sticky-top bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                    </svg></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        @if (Route::has('login'))
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        @auth
                        <a class="nav-link active" href="{{ url('/dashboard' . (isset($_GET['light-theme']) ? '?light-theme' : '')) }}">Dashboard</a>
                        @else
                        <a class="nav-link active" href="{{ route('login') . (isset($_GET['light-theme']) ? '?light-theme' : '') }}">Login</a>
                        @if (Route::has('register'))
                        <a class="nav-link active" href="{{ route('register') . (isset($_GET['light-theme']) ? '?light-theme' : '') }}">Register</a>
                        @endif
                        @endauth
                        <a href="#" id="themeToggleBtn" class="nav-link active">
                            {!! isset($_GET['light-theme']) ? 'Dark Theme' : 'Light Theme' !!}
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
        <section class="full-width-section mt-5">
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
        <section class="full-width-section mt-5">
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
        <section class="full-width-section mt-5">
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
        <section class="full-width-section mt-5">
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
    </div>
    <script>
        const themeToggleBtn = document.getElementById('themeToggleBtn');

        themeToggleBtn.addEventListener('click', () => {
            const body = document.body;
            body.dataset.bsTheme = body.dataset.bsTheme === 'dark' ? 'light' : 'dark';
            themeToggleBtn.innerHTML = body.dataset.bsTheme === 'dark' ?
                'Light Theme' :
                'Dark Theme';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>