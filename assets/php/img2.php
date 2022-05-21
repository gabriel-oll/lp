<?php

$_UP['pasta'] = '../../assets/img/uploads';
$_UP['tamanho'] = 1024 * 1024 * 5;
$_UP['extensoes'] = array('jpg', 'png', 'gif');
$_UP['renomeia'] = false;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
if ($_FILES['arquivo2']['error'] != 0) {
    die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo2']['error']]);
    exit;
}

$extensao = strtolower(end(explode('.', $_FILES['arquivo2']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
    echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    exit;
}

if ($_UP['tamanho'] < $_FILES['arquivo2']['size']) {
    echo "O arquivo enviado é muito grande, envie arquivos de até 5Mb.";
    exit;
}

if ($_UP['renomeia'] == true) {
    $nome_final = md5(time()) . '.jpg';
} else {
    $nome_final = $_FILES['arquivo2']['name'];
}

if (move_uploaded_file($_FILES['arquivo2']['tmp_name'], $_UP['pasta'] . $nome_final)) {

    $imgFinal = $_UP['pasta'] . $nome_final;
    $imgFormated = substr($imgFinal, 3);
    echo $imgFormated;

    $conn = new PDO('mysql:host=localhost;dbname=lp-cms', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("UPDATE `lp-cms`.`imagem` SET `img-1`='" . $imgFormated . "' WHERE  `id`=2");
    $sql->execute();
    echo "Upload efetuado com sucesso!";
} else {
    echo "Não foi possível enviar o arquivo, tente novamente";
}
