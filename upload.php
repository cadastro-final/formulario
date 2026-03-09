<?php
// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Diretório para salvar os uploads
    $uploadDir = 'uploads/';
    
    // Cria a pasta se não existir
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Função para salvar arquivo
    function saveFile($file, $uploadDir) {
        $targetFile = $uploadDir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verifica se o arquivo é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            echo "Arquivo é uma imagem - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "Arquivo não é uma imagem.<br>";
            $uploadOk = 0;
        }

        // Verifica se o arquivo já existe
        if (file_exists($targetFile)) {
            echo "Desculpe, o arquivo já existe.<br>";
            $uploadOk = 0;
        }

        // Verifica o tamanho do arquivo
        if ($file["size"] > 5000000) {
            echo "Desculpe, o arquivo é muito grande.<br>";
            $uploadOk = 0;
        }

        // Permite certos formatos de arquivo
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.<br>";
            $uploadOk = 0;
        }

        // Verifica se $uploadOk é 0 devido a um erro
        if ($uploadOk == 0) {
            echo "Desculpe, seu arquivo não foi enviado.<br>";
        } else {
            // Tenta fazer o upload do arquivo
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "O arquivo " . htmlspecialchars(basename($file["name"])) . " foi enviado com sucesso.<br>";
            } else {
                echo "Desculpe, houve um erro ao enviar seu arquivo.<br>";
            }
        }
    }

    // Chama a função saveFile para cada arquivo
    saveFile($_FILES["rg_cnh"], $uploadDir);
    saveFile($_FILES["rg_cnh_verso"], $uploadDir);
    saveFile($_FILES["selfie"], $uploadDir);
    saveFile($_FILES["comprovante"], $uploadDir);
    saveFile($_FILES["renda"], $uploadDir);

    // Redireciona para 2.php após o upload
    header("Location: 2.php");
    exit();
}
?>
