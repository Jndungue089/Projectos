<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certidão De Nascimento</title>
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
            Certidão de Nascimento Angolana: O Registro do Início da Jornada da Vida</h1>
        <div class="container mt-5">
            <img src="minjsdh.jpg" alt="Birth" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>A certidão de nascimento é um documento vital que transcende sua natureza burocrática; é a testemunha oficial do início da jornada de um
                cidadão angolano neste mundo. Mais do que um simples registro, a certidão de nascimento é a base que sustenta uma série de direitos
                e oportunidades ao longo da vida.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância da Certidão de Nascimento</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância da Certidão De Nascimento
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Identificação e Reconhecimento Civil:</strong> A certidão de nascimento é o primeiro documento que concede identidade e reconhecimento civil a um indivíduo. Ela atesta a existência legal e registra informações fundamentais, como nome, data e local de nascimento.</li>
                                <li><strong>Acesso a Serviços Básicos:</strong> É um requisito essencial para acessar uma variedade de serviços básicos, incluindo educação, saúde e assistência social. A certidão de nascimento é muitas vezes solicitada durante a matrícula escolar e ao receber cuidados de saúde.
                                </li>
                                <li><strong>Cidadania e Nacionalidade:</strong> A certidão de nascimento é uma prova tangível da cidadania angolana. Ela estabelece a nacionalidade do indivíduo e é necessária ao longo da vida para participação em processos cívicos e sociais.</li>
                                <li><strong>Proteção Legal:</strong> Em caso de disputas legais, a certidão de nascimento serve como documento fundamental para comprovar a identidade e filiação de um indivíduo, fornecendo uma base sólida para a resolução de questões legais.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter a Certidão de Nascimento?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter a Certidão de Nascimento Angolano
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Registro no Registo Civil:</strong> O processo começa com o registro do nascimento no Registo Civil, geralmente realizado pelos pais ou responsáveis legais do recém-nascido. É importante realizar esse registro o mais breve possível após o nascimento.</li>
                                <li><strong>Fornecimento de Informações Precisas:</strong> Durante o registro, informações precisas, como nome completo, data de nascimento, local de nascimento e nomes dos pais, devem ser fornecidas. A precisão dessas informações é crucial para evitar problemas futuros.
                                </li>
                                <li><strong>Emissão da Certidão de Nascimento:</strong> Após o registro, a certidão de nascimento é emitida pelo Registo Civil. Este documento oficial é então usado ao longo da vida para uma variedade de fins.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir uma Certidão de Nascimento Angolano</a>
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
                                <li><strong>Acesso à Educação:</strong> A certidão de nascimento é frequentemente exigida durante o processo de matrícula escolar, garantindo o acesso contínuo à educação.</li>
                                <li><strong>Cidadania Plena:</strong> Estabelece a cidadania angolana, permitindo que o indivíduo participe plenamente da vida cívica e social do país.
                                </li>
                                <li><strong>Direitos Legais e Civis:</strong> Fornece uma base sólida para o exercício de direitos legais e civis ao longo da vida, incluindo o direito de voto, participação em processos legais e outros direitos fundamentais.</li>
                                <li><strong>Documentação Oficial:</strong> Serve como documento oficial que atesta a identidade do indivíduo em diversas situações ao longo da vida, desde a infância até a idade adulta.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Em Resumo</h2>
            <p>A certidão de nascimento é o alicerce de uma vida cidadã. Ela não apenas documenta o início da jornada, mas também serve como a chave que abre as portas para oportunidades, direitos e participação plena na sociedade angolana. Cada certidão de nascimento conta a história única de um indivíduo, capturando os primeiros momentos de sua existência e preparando o caminho para um futuro cheio de possibilidades.</p>
        </div>
    </div>
</body>

</html>