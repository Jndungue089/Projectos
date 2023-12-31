<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilhete De Identidade</title>
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
        <h1 class="text-center">BILHETE DE IDENTIDADE (BI)</h1>
        <div class="container mt-5">
            <img src="bi.png" alt="BI" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>O Bilhete de Identidade, elemento vital na experiência cidadã angolana,
                transcende sua existência como um mero documento. Ele é a expressão
                tangível da identidade de um indivíduo, uma peça que une passado,
                presente e futuro em um testemunho visual da existência e cidadania.
                Mais do que um simples cartão, o Bilhete de Identidade angolano é um
                elo comum que une a rica diversidade do povo angolano.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância do Bilhete de Identidade Angolano</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância do BI
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Identificação e Reconhecimento:</strong> O Bilhete de Identidade é o certificado
                                    oficial que atesta quem somos. Ele é fundamental para a identificação e reconhecimento legal
                                    de um cidadão angolano em diversos contextos, como educação, saúde, emprego e outros aspectos
                                    da vida cotidiana.</li>
                                <li><strong>Participação Cívica:</strong> Além de ser uma ferramenta de identificação, o Bilhete
                                    de Identidade é essencial para a participação ativa no processo democrático. É um requisito para
                                    exercer o direito de voto durante as eleições, contribuindo assim para a construção e manutenção
                                    de uma sociedade justa e equitativa.
                                </li>
                                <li><strong>Acesso a Serviços Públicos:</strong> Muitos serviços governamentais e
                                    públicos
                                    exigem documentos
                                    específicos para serem acessados. Ter os documentos corretos em ordem simplifica
                                    processos
                                    administrativos e evita complicações desnecessárias.</li>
                                <li><strong>Registro Civil e Histórico Pessoal:</strong> O Bilhete de Identidade é uma peça-chave
                                    no registro civil, atestando o nascimento e a trajetória legal do cidadão. Ele não apenas valida
                                    a identidade, mas também é parte integrante do legado histórico pessoal.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter o Bilhete de Identidade Angolano?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter o Bilhete de Identidade Angolano
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Requisitos Básicos:</strong> Geralmente, para obter o Bilhete de Identidade, é necessário apresentar certidão
                                    de nascimento, comprovante de residência e outros documentos que variam conforme a jurisdição.</li>
                                <li><strong>Dirigir-se à Repartição de Identificação Civil: </strong> O próximo passo envolve
                                    dirigir-se à Repartição de Identificação Civil, onde o processo de emissão é conduzido. É importante estar ciente dos
                                    requisitos específicos da região.
                                </li>
                                <li><strong>Preencher Formulários e Fotografias: </strong> Ao chegar à repartição, os candidatos preenchem formulários,
                                    fornecem fotografias recentes e pagam as taxas associadas ao processo.</li>
                                <li><strong>Agendar e Aguardar Processamento:</strong> Em alguns casos, é necessário
                                    agendar uma entrevista. Após o processamento, o Bilhete de Identidade é emitido e entregue
                                    ao solicitante.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir um Bilhete de Identidade Angolano</a>
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
                                <li><strong>Facilita a Vida Diária:</strong> Ter o Bilhete de Identidade simplifica várias
                                    atividades diárias, desde transações bancárias até o acesso a serviços públicos e privados.</li>
                                <li><strong>Protege Contra Fraudes:</strong> Ao garantir a autenticidade da identidade, o Bilhete
                                    de Identidade ajuda na prevenção de atividades ilegais, como fraude de identidade, proporcionando
                                    uma base sólida para o sistema legal.
                                </li>
                                <li><strong>Constitui Dever Cívico: </strong> Além de uma obrigação legal, possuir um Bilhete de
                                    Identidade é um dever cívico, contribuindo para a construção de uma sociedade organizada e consciente.</li>
                                <li><strong>Promove a Participação Cidadã: </strong>Ao fornecer acesso a direitos fundamentais, o Bilhete de
                                    Identidade promove a participação cidadã, capacitando os indivíduos a contribuir ativamente para o desenvolvimento da nação.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Motivação:</h2>
            <p>O Bilhete de Identidade é mais do que um documento; é a narrativa visual da cidadania, um testemunho de pertencimento a uma nação que se orgulha de sua
                diversidade e história. Sua obtenção e preservação não são apenas obrigações legais, mas um compromisso pessoal e coletivo com a construção de um futuro
                sustentável e inclusivo para Angola.</p>
        </div>
    </div>
</body>

</html>