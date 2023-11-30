<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário CRUD</title>
</head>

<body>
    <style>
        .header {
            background-color: blue;
            padding: 10px 0px;
            margin: 0;
            text-align: center;
        }

        .header h2 {
            font-family: 'Times New Roman', Times, serif;
            color: white
        }

        .main {
            text-align: center;
            display: block;
            color: white
        }

        .btn1 {
            display: block;
        }

        .main h3 {
            font-size: 16px;
        }
    </style>

    <div class="header">
        <h2><strong>SHADOW ELETRONICS</strong></h2>
    </div>
    <div class="main">
        <img src="img.png" alt="fundo">
        <h3>Seja Bem-Vindo à SHADOW ELETRONICS</h3>
        <form action="/atualizar-candidato/{{ $candidato->id }}" method="post">
            @csrf
            @method("PUT")
            <div class="btn1">
                <div class="txt1">
                    <label for="nome">Nome</label>
                </div>
                <div class="input">
                    <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{ $candidato->nome }}">
                </div>
            </div>
            <div>
                <label for="telefone">Telefone</label>
                <input type="text" placeholder="Digite seu número" name="telefone_candidato" value="{{ $candidato->telefone }}">
            </div>
            <div>
                <button style="border-radius: 5px;
            color:white;
            background-color: blue;
            padding: 10px;
            font-size: 16px;
            border: none;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            ">Enviar Cadastro</button>
            </div>
        </form>
    </div>
</body>

</html>