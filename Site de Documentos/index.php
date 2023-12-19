<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Documentos</a>
                        <div class="dropdown-menu  dropdown-center" aria-labelledby="navbarDropdown">
                            <a href="#" class="p-3 dropdown-item">Bilhete de Identidade</a>
                            <a href="#" class="p-3 dropdown-item">Cartão de Contribuinte</a>
                            <a href="#" class="p-3 dropdown-item">Cartão de Eleitor</a>
                            <a href="#" class="p-3 dropdown-item">Passaporte</a>
                            <a href="#" class="p-3 dropdown-item">Certidão de Nascimento</a>
                            <a href="#" class="p-3 dropdown-item">Carteira de Condução</a>
                            <a href="#" class="p-3 dropdown-item">Documento Militar</a>
                            <a href="#" class="p-3 dropdown-item">Cartão Nacional de Saúde</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#!">Onde Tratar</a></li>
                </ul>
                <button type="button" id="themeToggleBtn" class="btn btn-primary">
                    <i id="themeIcon" class="fas fa-sun"></i><!-- Ícone para o modo claro -->
                </button>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="page-content container-fluid">
        <h2 class="text-center text-wrap">Tratar os documentos necessários de forma adequada é essencial
            para diversos
            aspectos da vida de um cidadão angolano.</h2>
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide center" data-bs-ride="carousel">
                <div class="carousel-inner center-block">
                    <div class="carousel-item active">
                        <img src="sepe.jpg" class="d-block w-100" alt="SEPE">
                    </div>
                    <div class="carousel-item">
                        <img src="siac.jpg" class="d-block w-100" alt="SIAC">
                    </div>
                    <div class="carousel-item">
                        <img src="gue.jpg" class="d-block w-100" alt="GUE">
                    </div>
                    <div class="carousel-item">
                        <img src="buap.jpg" class="d-block w-100" alt="BUAP">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="text text-wrap mt-5">
        <p>Os documentos necessários para um cidadão angolano podem variar dependendo da situação específica e
            dos
            requisitos em vigor. No entanto, alguns dos documentos principais que os cidadãos angolanos
            geralmente
            precisam tratar obrigatoriamente incluem:</p>
        <ol>
            <li><strong>Bilhete de Identidade (BI):</strong> O BI é um documento de identificação obrigatório
                para os cidadãos
                angolanos. Ele é emitido pela Direção Nacional de Identificação Civil e Criminal (DNICC) e é
                utilizado para provar a identidade do titular.</li>
            <li><strong>Cartão de Contribuinte:</strong> O Cartão de Contribuinte é emitido pela Administração
                Geral Tributária (AGT)
                e é necessário para efeitos fiscais. É utilizado para identificar os contribuintes perante as
                autoridades tributárias.</li>
            <li><strong>Cartão de Eleitor:</strong> O Cartão de Eleitor é essencial para participar em eleições.
                Ele é emitido pela
                Comissão Nacional Eleitoral (CNE) e permite que os cidadãos exerçam o seu direito de voto.</li>
            <li><strong>Passaporte:</strong> Para viagens internacionais, os cidadãos angolanos necessitam de um
                passaporte válido. O
                passaporte é emitido pela Direção de Migração e Estrangeiros (DME).</li>
            <li><strong>Certidão de Nascimento:</strong> A Certidão de Nascimento é um documento que atesta o
                registo civil de uma
                pessoa e é emitida pelo Registo Civil.</li>
            <li><strong>Carteira de Condução:</strong> Para conduzir veículos, os cidadãos precisam de obter uma
                carteira de
                condução, que é emitida pelo Ministério dos Transportes.</li>
            <li><strong>Documento Militar:</strong> Para os cidadãos do sexo masculino, é comum ser necessário
                um documento militar,
                que comprova o cumprimento do serviço militar obrigatório.</li>
            <li><strong>Cartão Nacional de Saúde:</strong> O Cartão Nacional de Saúde é utilizado para aceder a
                serviços de saúde. É
                emitido pelo Ministério da Saúde.</li>
        </ol>
    </div>

    <div class="text-center mt-5">
        <a class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Frizamos a importância de
            tratá-los</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Porque Devemos Tratar Tais Documentos?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li><strong>Identificação e Reconhecimento:</strong> Os documentos, como o Bilhete de
                            Identidade
                            e a Certidão de
                            Nascimento, são fundamentais para a identificação e reconhecimento legal de um
                            indivíduo.
                            Eles são necessários para acessar uma variedade de serviços, como educação, saúde,
                            emprego e
                            outros.</li>
                        <li><strong>Participação Cívica:</strong> O Cartão de Eleitor é vital para participar
                            ativamente
                            no processo
                            democrático, permitindo que os cidadãos exerçam o seu direito de voto durante as
                            eleições.
                            Isso é fundamental para a construção e manutenção de uma sociedade justa e
                            equitativa.
                        </li>
                        <li><strong>Mobilidade Internacional:</strong> Um passaporte válido é essencial para
                            viagens
                            internacionais.
                            Facilita a entrada em outros países e é um requisito básico para a obtenção de
                            vistos.
                        </li>
                        <li><strong>Acesso a Serviços Públicos:</strong> Muitos serviços governamentais e
                            públicos
                            exigem documentos
                            específicos para serem acessados. Ter os documentos corretos em ordem simplifica
                            processos
                            administrativos e evita complicações desnecessárias.</li>
                        <li><strong>Cumprimento de Deveres Militares e Fiscais:</strong> Documentos como o
                            Documento
                            Militar e o Cartão
                            de Contribuinte são essenciais para cumprir obrigações militares e fiscais. O não
                            cumprimento dessas obrigações pode resultar em penalidades legais.</li>
                        <li><strong>Segurança Pessoal e Social:</strong> Documentos oficiais são frequentemente
                            necessários para garantir
                            a segurança pessoal e social. Eles ajudam na prevenção de atividades ilegais, como
                            fraude de
                            identidade, e proporcionam uma base sólida para o sistema legal.</li>
                        <li><strong>Facilita Transações e Atividades Diárias:</strong> Documentos como a
                            Carteira de
                            Condução são
                            essenciais para realizar atividades diárias, como dirigir legalmente. Facilitam
                            transações e
                            interações cotidianas.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>

</html>