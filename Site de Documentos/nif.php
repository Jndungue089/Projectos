<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de Identificação Fiscal | NIF</title>
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
        <h1 class="text-center">Número de Identificação Fiscal (NIF): A Chave para a Participação na Vida Contributiva</h1>
        <div class="container mt-5">
            <img src="nif.jpg" alt="Passport" style="width: 100%;">
        </div>
        <div class="container mt-5">
            <p>O Número de Identificação Fiscal (NIF) é mais do que uma sequência de dígitos; é a chave que abre as portas para a participação ativa na vida contributiva de um país. Vamos explorar o significado, a importância, as vantagens e o processo de obtenção do NIF.</p>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meanModal">Significado do NIF:</a>
            </div>
            <div class="modal fade" id="meanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Significado
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Identificação Única:</strong> O NIF é uma identificação única atribuída a cada contribuinte. Ele serve como uma etiqueta exclusiva que distingue cada cidadão ou entidade contribuinte, facilitando a gestão eficiente dos assuntos fiscais.</li>
                                <li><strong>Elemento-Chave na Tributação:</strong> O NIF é fundamental para a tributação. Ele vincula todas as atividades financeiras de um indivíduo ou empresa, garantindo que contribuições fiscais adequadas sejam aplicadas.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importanceModal">Importância do NIF</a>
            </div>
            <div class="modal fade" id="importanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Importância do NIF
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Participação no Sistema Fiscal:</strong> O NIF é uma condição para participar plenamente no sistema fiscal. É necessário para realizar transações financeiras, emprego formal, abertura de contas bancárias e outras atividades financeiras.</li>
                                <li><strong>Rastreabilidade Financeira:</strong> OAtribuir um NIF a cada contribuinte permite a rastreabilidade eficaz das atividades financeiras. Isso é crucial para a prevenção da evasão fiscal e para garantir que todos contribuam equitativamente para os recursos públicos.
                                </li>
                                <li><strong>Acesso a Benefícios Fiscais:</strong> Em alguns casos, a posse de um NIF pode proporcionar acesso a benefícios fiscais ou deduções. Pode ser usado para identificar elegibilidade para certos regimes fiscais ou programas de incentivo governamental.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obterModal">Como Obter o NIF?</a>
            </div>
            <div class="modal fade" id="obterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Passos Para Obter o NIF
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol>
                                <li><strong>Registo nas Autoridades Fiscais:</strong> O processo de obtenção do NIF geralmente envolve o registo junto das autoridades fiscais do país. Pode ser necessário preencher formulários específicos e fornecer documentação de identificação, como o Bilhete de Identidade.</li>
                                <li><strong>Verificação e Atribuição:</strong> Após o registo, as autoridades fiscais verificam a informação fornecida e atribuem um NIF único ao contribuinte. Este número torna-se a referência principal para todas as interações fiscais.</li>
                                <li><strong>Atualizações Obrigatórias:</strong> É responsabilidade do contribuinte manter as informações associadas ao NIF atualizadas. Mudanças de endereço, estado civil ou outras alterações relevantes devem ser comunicadas às autoridades fiscais.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vantagemModal">Vantagens de Possuir um NIF</a>
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
                                <li><strong>Legalidade e Conformidade:</strong> Possuir um NIF é essencial para operar legalmente e em conformidade com as leis fiscais. Isso evita penalidades e complicações legais associadas à evasão fiscal.</li>
                                <li><strong>Participação no Mercado de Trabalho:</strong> Muitos empregadores exigem um NIF como parte do processo de contratação. Ter um NIF facilita a participação no mercado de trabalho formal.
                                </li>
                                <li><strong>Facilita Transações Financeiras:</strong> O NIF é necessário para abrir contas bancárias, realizar transações imobiliárias e comerciais, entre outras atividades financeiras.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <h2>Em Resumo</h2>
            <p>O Número de Identificação Fiscal (NIF) é a pedra angular da participação na vida contributiva de uma sociedade. Além de ser uma exigência legal, o NIF oferece uma maneira eficaz de rastrear e gerenciar as atividades financeiras dos contribuintes. Possuir um NIF não é apenas uma formalidade; é um passo fundamental para contribuir de forma justa e equitativa para o bem-estar da comunidade e para garantir a transparência e eficiência nos assuntos fiscais. É a chave que desbloqueia as portas para uma participação plena no sistema fiscal e no desenvolvimento econômico do país.</p>
        </div>
    </div>
</body>

</html>