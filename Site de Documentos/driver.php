<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de Condução</title>
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
        <h1 class="text-center">
            Carta de Condução em Angola: Navegando pelas Estradas da Mobilidade Responsável</h1>
        <div class="container mt-5">
            <img src="driver.png" alt="Driver" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>A Carta de Condução em Angola é mais do que um simples documento que permite operar um veículo; é um símbolo de responsabilidade, mobilidade e participação ativa na sociedade. Este documento desempenha um papel vital na vida dos cidadãos, proporcionando não apenas a liberdade de dirigir, mas também estabelecendo padrões para uma condução segura e consciente.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância da Carta de Condução</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância da Carta de Condução
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Mobilidade e Independência:</strong> A Carta de Condução confere aos cidadãos a liberdade de se locomoverem de forma independente. Facilita o acesso a oportunidades de trabalho, educação e lazer, promovendo a mobilidade pessoal.</li>
                                <li><strong>Responsabilidade na Condução:</strong> Ao obter a Carta de Condução, os indivíduos assumem a responsabilidade de operar veículos de forma segura e respeitosa. Este documento destaca a importância de seguir as leis de trânsito e contribuir para a segurança rodoviária.</li>
                                <li><strong>Participação na Economia:</strong> Muitos empregos e atividades econômicas exigem a capacidade de conduzir. A posse da Carta de Condução amplia as oportunidades de emprego e participação em setores que dependem da mobilidade.</li>
                                <li><strong>Integração Social:</strong> A Carta de Condução é um meio de integração social, permitindo que os indivíduos participem ativamente em eventos sociais, encontros familiares e outras atividades que envolvem deslocações.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter a Carta de Condução?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter a Carta de Condução Angolana
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Formação Teórica e Prática:</strong> O processo para obter a Carta de Condução geralmente inclui a participação em cursos de formação teórica e prática. Isso garante que os futuros condutores estejam cientes das regras de trânsito e possuam as habilidades necessárias para conduzir com segurança.</li>
                                <li><strong>Exames Oficiais:</strong> Os candidatos são submetidos a exames teóricos e práticos para avaliar seu conhecimento e habilidades de condução. A aprovação nestes exames é essencial para a obtenção da Carta de Condução.
                                </li>
                                <li><strong>Documentação Necessária:</strong> Durante o processo de candidatura, são exigidos documentos como bilhete de identidade, atestado médico e comprovante de residência. É fundamental fornecer informações precisas e completas.</li>
                                <li><strong>Emissão pela Entidade Competente:</strong> Após a conclusão bem-sucedida do processo, a Carta de Condução é emitida pela entidade competente, geralmente o Departamento de Trânsito ou uma instituição semelhante.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir uma Carta de Condução Angolana</a>
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
                                <li><strong>Acesso a Oportunidades Profissionais:</strong> Muitas carreiras exigem mobilidade, e a Carta de Condução abre portas para oportunidades profissionais em diversos setores.</li>
                                <li><strong>Condução Consciente e Responsável:</strong> A obtenção da Carta de Condução é acompanhada pela compreensão das responsabilidades do condutor. Isso promove uma cultura de condução consciente e segura.
                                </li>
                                <li><strong>Participação Ativa na Comunidade:</strong> A Carta de Condução facilita a participação em atividades comunitárias, eventos sociais e outras experiências que requerem deslocações.</li>
                                <li><strong>Contribuição para a Economia:</strong> Ao permitir que os cidadãos se movam eficientemente, a Carta de Condução contribui para o funcionamento eficaz da economia, conectando pessoas e negócios.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Em Resumo</h2>
            <p>A Carta de Condução é mais do que uma permissão para conduzir; é um marco que simboliza a responsabilidade, a mobilidade e a participação ativa na vida. Ao guiar os cidadãos pelas estradas, este documento desempenha um papel crucial na construção de uma comunidade segura, conectada e consciente. Possuir uma Carta de Condução é mais do que um privilégio; é um compromisso com a segurança, a responsabilidade e a liberdade de explorar os caminhos da vida.</p>
        </div>
    </div>
</body>

</html>