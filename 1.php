<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalização do Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFD700; /* Fundo amarelo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #FFD700; /* Formulário com fundo branco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h2 {
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="file"] {
            display: block;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #000000;
            border: none;
            border-radius: 4px;
            color: #FFD700; /* Texto amarelo no botão */
            font-size: 16px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #333333; /* Botão um pouco mais escuro no hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Conclua suas informações</h2>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="rg_cnh">Foto do RG ou CNH:</label>
                <input type="file" name="rg_cnh" id="rg_cnh" required>
            </div>
            <div class="form-group">
                <label for="rg_cnh_verso">Verso do RG ou CNH:</label>
                <input type="file" name="rg_cnh_verso" id="rg_cnh_verso" required>
            </div>
            <div class="form-group">
                <label for="selfie">Selfie:</label>
                <input type="file" name="selfie" id="selfie" required>
            </div>
            <div class="form-group">
                <label for="comprovante">Foto do Comprovante de Residência:</label>
                <input type="file" name="comprovante" id="comprovante" required>
            </div>
            <div class="form-group">
                <label for="renda">Foto do Comprovante de Renda:</label>
                <input type="file" name="renda" id="renda" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
