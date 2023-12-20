<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passaporte</title>
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
                <button type="button" id="themeToggleBtn" class="btn btn-primary">
                    <i id="themeIcon" class="fas <?php echo isset($_GET['light-theme']) ? 'fa-moon' : 'fa-sun'; ?>"></i><!-- Ícone para o modo claro/escuro -->
                </button>
                <ul class="navbar-nav bg-primary me-auto mb-2 mb-lg-0">
                    <li class=" nav-item active"><a class="p-3 nav-link" href="index.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="p-3 nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Documentos</a>
                        <div class="dropdown-menu bg-primary dropdown-center" aria-labelledby="navbarDropdown">
                            <a href="bi.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Bilhete de Identidade</a>
                            <a href="passport.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Passaporte</a>
                            <a href="birth.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Certidão de Nascimento</a>
                            <a href="driver.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Carta de Condução</a>
                            <a href="militar.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Documento Militar</a>
                            <a href="nif.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>" class="p-3 nav-link dropdown-item">Número de Identificação Fiscal</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="p-3 nav-link" href="tratar.php<?php echo isset($_GET['light-theme']) ? '?light-theme"' : ''; ?>">Onde Tratar</a></li>
                </ul>
                <script src="script.js"></script>
            </div>
        </div>
    </nav>
    <div class="page-content container-fluid">
        <h1 class="text-center">O Passaporte Angolano: Uma Jornada de Descoberta e Conexão Global</h1>
        <div class="container mt-5">
            <img src="passaporte.jpg" alt="Passport" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>O passaporte é mais do que um documento de viagem; é a chave que desbloqueia um mundo de
                oportunidades e conecta os cidadãos angolanos à vasta tapeçaria da experiência global.
                Além de ser uma necessidade para viagens internacionais, o passaporte é um símbolo de
                liberdade, aventura e participação ativa no cenário internacional.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância do Passaporte Angolano</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância do Passaporte
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Facilitação de Viagens Internacionais:</strong> O passaporte angolano é a porta de entrada
                                    para o mundo. Ele é essencial para cruzar fronteiras e explorar novos destinos, seja para fins
                                    turísticos, educacionais, de negócios ou outros.</li>
                                <li><strong>Representação Nacional:</strong> O passaporte é uma representação tangível da cidadania
                                    angolana em solo estrangeiro. Ele identifica o portador como um legítimo representante da nação perante
                                    as autoridades de outros países.
                                </li>
                                <li><strong>Acesso a Serviços Consulares:</strong> Em caso de emergências ou necessidades durante a
                                    estadia no exterior, o passaporte é um documento crucial para acessar serviços consulares, garantindo
                                    proteção e assistência adequadas.</li>
                                <li><strong>Participação em Eventos Internacionais:</strong> O passaporte possibilita a participação
                                    em eventos internacionais, conferências, intercâmbios culturais e esportivos, permitindo que os cidadãos
                                    angolanos se envolvam ativamente no cenário global.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter o Passaporte Angolano?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter o Passaporte Angolano
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Solicitação nos Serviços de Migração e Estrangeiros (SME):</strong> O processo de obtenção
                                    do passaporte geralmente começa com a solicitação na Direção de Migração e Estrangeiros. Isso envolve
                                    a apresentação de documentos, incluindo o Bilhete de Identidade.</li>
                                <li><strong>Avaliação e Emissão:</strong> Após a solicitação, a DME avalia a elegibilidade e, se
                                    aprovado, emite o passaporte. É essencial fornecer informações precisas e completas durante o processo.</li>
                                <li><strong>Renovação e Atualização:</strong> Os passaportes têm uma validade limitada, e a renovação pode
                                    ser necessária. Manter as informações atualizadas é crucial para garantir a eficácia contínua do passaporte.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir um Passaporte Angolano</a>
            </div>
            <div class="modal fade" id="vantagemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Vantagens
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Exploração Cultural e Educacional: </strong> O passaporte permite que os cidadãos angolanos
                                    explorem diferentes culturas, vivenciem novas experiências educacionais e expandam seus horizontes pessoais.</li>
                                <li><strong>Oportunidades Profissionais: </strong> Para profissionais que buscam oportunidades de
                                    trabalho ou negócios no exterior, o passaporte é uma ferramenta essencial para abrir portas e
                                    estabelecer conexões internacionais.
                                </li>
                                <li><strong>Conexões Pessoais e Familiares:</strong> Facilita a reunião com familiares e entes
                                    queridos que podem residir em outros países, promovendo conexões pessoais e mantendo laços familiares.</li>
                                <li><strong>Participação em Programas de Intercâmbio:</strong> O passaporte é muitas vezes um requisito para
                                    participação em programas de intercâmbio estudantil, enriquecendo a educação e promovendo a compreensão global.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Em Resumo</h2>
            <p>O passaporte angolano é mais do que um documento de viagem; é um símbolo da liberdade de explorar, aprender e conectar-se globalmente. Cada página do
                passaporte conta uma história única, cheia de descobertas e experiências. Possuir um passaporte não apenas abre portas para o mundo, mas também
                fortalece o senso de identidade e cidadania, lembrando a cada angolano que eles fazem parte de uma comunidade global diversificada e interconectada.</p>
        </div>
    </div>
</body>

</html>