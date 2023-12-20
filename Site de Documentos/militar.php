<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Militar</title>
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
        <h1 class="text-center">Documento Militar (Recenseamento Militar): Servindo com Comprometimento e Dever Cívico</h1>
        <div class="container mt-5">
            <img src="militar.jpg" alt="Passport" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>O Documento Militar, também conhecido como Recenseamento Militar, é mais do que uma simples formalidade; é um compromisso cívico e um símbolo do dever para com a nação. Este documento desempenha um papel fundamental na organização e preparação das forças de defesa, garantindo a segurança e soberania do país. Vamos explorar a importância, vantagens e o processo envolvido no Recenseamento Militar.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância do Documento Militar</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância do Documento Militar
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Defesa Nacional:</strong> O Documento Militar é um componente essencial das forças de defesa nacionais. Ele identifica e registra os cidadãos que estão disponíveis para o serviço militar, contribuindo para a prontidão e eficácia das forças armadas.</li>
                                <li><strong>Compromisso Cívico:</strong> O passaporte é uma representação tangível da cidadania
                                    angolana em solo estrangeiro. Ele identifica o portador como um legítimo representante da nação perante
                                    as autoridades de outros países.
                                </li>
                                <li><strong>Acesso a Serviços Consulares:</strong> O Recenseamento Militar é um ato de compromisso cívico, demonstrando a disposição do cidadão em servir e proteger a pátria. Reflete um sentido de responsabilidade para com a comunidade e o país como um todo.</li>
                                <li><strong>Manutenção da Ordem:</strong> O Documento Militar desempenha um papel na manutenção da ordem e segurança interna. Em situações de emergência ou necessidade, as autoridades podem contar com os reservistas para auxiliar em operações de defesa civil.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter o Documento Militar (Recenseamento Militar)?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter o Documento Militar
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Registo Obrigatório:</strong> O Recenseamento Militar é muitas vezes obrigatório para cidadãos em determinada faixa etária, geralmente homens. O registo normalmente é feito em datas específicas estabelecidas pelas autoridades.</li>
                                <li><strong>Submissão de Documentos:</strong> Durante o processo de recenseamento, os cidadãos são geralmente obrigados a apresentar documentos como o Bilhete de Identidade, comprovante de residência e outros documentos necessários.</li>
                                <li><strong>Exames Médicos:</strong> Em alguns casos, podem ser realizados exames médicos para avaliar a aptidão física dos recrutas. Isso garante que os indivíduos estejam em condições de cumprir as exigências do serviço militar.</li>
                                <li><strong>Formação Militar:</strong> Após o registo, os cidadãos podem passar por períodos de formação militar básica, preparando-os para possíveis obrigações futuras.</li>
                                <li><strong>Emissão do Documento Militar:</strong> Concluído o processo, o Documento Militar é emitido, identificando o indivíduo como registrado para potencial serviço militar. Este documento é muitas vezes necessário em várias situações, incluindo emprego e acesso a alguns serviços governamentais.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir um Documento Militar</a>
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
                                <li><strong>Participação no Serviço Militar:</strong> O Documento Militar é uma condição para participar no serviço militar, se necessário. Isso permite que o país mantenha uma força de defesa robusta e pronta.</li>
                                <li><strong>Reconhecimento Cívico:</strong> O cidadão que possui o Documento Militar é reconhecido como alguém que está disposto a cumprir o dever cívico de proteger a nação em tempos de necessidade.
                                </li>
                                <li><strong>Acesso a Oportunidades:</strong> Em alguns países, possuir o Documento Militar pode ser uma vantagem ao procurar emprego em setores governamentais ou empresas que valorizam o serviço militar.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Em Resumo</h2>
            <p>O Documento Militar é um testemunho do compromisso cívico e do dever para com a nação. Além de identificar indivíduos registrados para o serviço militar, este documento reflete a prontidão da população em contribuir para a defesa e segurança nacional. Possuir o Documento Militar não é apenas uma formalidade, mas um ato significativo que ressalta o papel vital dos cidadãos na preservação da soberania e estabilidade do país. É um símbolo de orgulho, dever e serviço à comunidade e à nação.</p>
        </div>
    </div>
</body>

</html>