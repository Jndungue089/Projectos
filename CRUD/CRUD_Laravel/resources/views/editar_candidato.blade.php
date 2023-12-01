<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0;
            overflow: hidden;
            background-color: #111121;
        }
      
          .stars1 {
            width: 3px;
            height: 3px;
            border-radius: 50%;
            position: absolute;
            background-color: white;
            animation: twinkle 2s infinite;
          }
      
          @keyframes twinkle {
            0%, 100% {
              opacity: 0;
            }
            50% {
              opacity: 1;
            }
          }
        .ring {
            width: 900px;
            height: 900px;
            border: 10px solid #1110b5;
            /* cor do anel */
            border-radius: 50%;
            position: relative;
            z-index: -1;
            animation: flame 1s infinite alternate;
            /* alterna entre o anel e a animação de chamas */
        }

        @keyframes flame {
            0% {
                box-shadow: 0 0 10px 5px #1110b5, inset 0 0 20px 10px #1110b5;
            }

            100% {
                box-shadow: 0 0 20px 10px #1110b5, inset 0 0 10px 5px #1110b5;
            }
        }

        .header {
            text-align: center;
            margin-top: -400px;
        }

        .header h2 {
            color: white;
            font-size: 50px;
        }

        .main {
            width: auto;
            text-align: left;
            display: block;
            color: white;
            align-items: center;
            text-align: center;
            margin-top: -800px;
        }

        .align h3 {
            font-size: 20px;
        }

        .txt1 {
            margin-left: -200px;
        }

        .txt2 {
            margin-left: -190px;
        }

        .input input {
            width: 250px;
            height: 25px;
            outline: none;
            font-size: 12px;
            border-radius: 10px;
            border: 5px solid black;
            transition: 0.3s;
        }

        .input input:focus {
            border: 5px solid #1110b5;
        }

        .enviar {
            margin-top: 20px;
            border-radius: 5px;
            color: white;
            background-color: #1110b5;
            padding: 10px;
            font-size: 16px;
            border: none;
            position: relative;
            overflow: hidden;
            font-weight: 600;
            transition: 0.3s;
        }

        .enviar:hover {
            box-shadow: 0px 0px 20px 5px blue;
        }

        .mostrar {
            margin-top: 20px;
            border-radius: 5px;
            color: white;
            background-color: #1110b5;
            padding: 10px;
            font-size: 16px;
            border: none;
            position: relative;
            overflow: hidden;
            font-weight: 600;
            transition: 0.3s;
        }

        .mostrar:hover {
            box-shadow: 0px 0px 20px 5px blue;
        }
    </style>
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const starContainer = document.body;
    
          // Number of stars you want
          const numberOfStars = 500; // Increased the number of stars for better coverage
    
          for (let i = 0; i < numberOfStars; i++) {
            const star = document.createElement('div');
            star.className = 'stars1';
            star.style.left = `${getRandomPosition()}vw`; // Adjusted to viewport units
            star.style.top = `${getRandomPosition()}vh`; // Adjusted to viewport units
            starContainer.appendChild(star);
          }
        });
    
        function getRandomPosition() {
          // Generate a random number between 0 and 100 (viewport units)
          return Math.random() * 100;
        }
      </script>
    <div class="all">
        <div class="ring">
            <div class="stars-column1">
                <div class="stars1"></div>

            </div>

        </div>
        <div class="main">
            <div class="header">
                <h2>SHADOW ELETRONICS</h2>
            </div>
            <div class="align">
                <h3>EDITOR DE CADASTRO</h3>
                <form action="/atualizar-candidato/{{ $candidato->id }}" method="post" class="form">
                @csrf
                @method("PUT")
                    <div class="btns">
                        <div class="txt1">
                            <h2>Nome</h2>
                        </div>
                        <div class="input">
                        <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{ $candidato->nome }}">
                        </div>
                    </div>
                    <div>
                        <div class="txt2">
                            <h2>Telefone</h2>
                        </div>
                        <div class="input">
                        <input type="number" placeholder="Digite seu número" name="telefone_candidato" value="{{ $candidato->telefone }}">
                        </div>
                    </div>
                    <div>
                        <div class="txt1">
                            <h2>E-Mail</h2>
                        </div>
                        <div class="input">
                        <input type="email" placeholder="Digite seu e-mail" name="email_candidato" value="{{ $candidato->email }}">
                        </div>
                    </div>
                    <div class="btn1">
                        <button class="enviar">Atualizar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>